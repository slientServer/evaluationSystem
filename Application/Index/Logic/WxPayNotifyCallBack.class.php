<?php
/**
 * Created by PhpStorm.
 * User: Blake
 * Date: 3/22/2016
 * Time: 9:13 PM
 */

namespace Index\Logic;

import("Org.WxPay.WxPayData");
use Org\WxPay\WxPayNotify;
use Org\WxPay\WxPayOrderQuery;
use Org\WxPay\WxPayApi;

use Think\Log;


class WxPayNotifyCallBack extends WxPayNotify
{
    //查询订单
    public function Queryorder($transaction_id, $data)
    {
        $input = new WxPayOrderQuery();
        $input->SetTransaction_id($transaction_id);
        $result = WxPayApi::orderQuery($input);
        Log::write("query:" . json_encode($result), Log::DEBUG);
        if(array_key_exists("return_code", $result)
            && array_key_exists("result_code", $result)
            && $result["return_code"] == "SUCCESS"
            && $result["result_code"] == "SUCCESS")
        {
            return true;
        }
        //支付失败，更新订单付款状态
        $updateData['transactionid']= $data["transaction_id"];
        $updateData['returndata']= json_encode($data);
        $updateData['orderstate']= 0;
        $model= M('Order');
        $condition['orderid']= $data['out_trade_no'];
        $model->where($condition)->save($updateData);
        return false;
    }

    //重写回调处理函数
    public function NotifyProcess($data, &$msg)
    {
        Log::write('call back' . json_encode($data), Log::DEBUG);
        $notfiyOutput = array();

        if(!array_key_exists("transaction_id", $data)){
            $msg = "输入参数不正确";
            Log::write('call back error' . $msg, Log::DEBUG);
            return false;
        }
        //查询订单，判断订单真实性
        if(!$this->Queryorder($data["transaction_id"], $data)){
            $msg = "订单查询失败";
            Log::write('call back error' . $msg, Log::DEBUG);
            return false;
        }

        //如果订单检查通过，则进行订单支付状态修改
        $openid = $data['openid']; //用户openid
        $out_trade_no = $data['out_trade_no']; //系统内部订单号
        $attach = $data['attach']; //商户数据包，微信支付时传递，原样返回
        $total_fee = $data['total_fee']; //微信支付总金额
        $transaction_id = $data["transaction_id"]; //微信支付流水号，请保存到数据库以便日后查账

        //业务逻辑，更新订单付款状态
        $updateData['transactionid']= $transaction_id;
        $updateData['returndata']= json_encode($data);
        $updateData['productprice']= $total_fee/100;
        $updateData['orderstate']= 2;
        $model= M('Order');
        $condition['orderid']= $out_trade_no;

        Log::write('call back orderid = ' . $out_trade_no, Log::DEBUG);
        $model->where($condition)->save($updateData);

        //添加积分
        $productScore['userid']= $attach;
        $productScore['typename']= '购物积分';
        $productScore['scorevalue']= ceil($updateData['productprice']);
        $productScore['changetype']= 'ADD';
        $productScore['inserttime']= time();
        $productScore['lastmodifytime']= time();
        D('scoreaudit')->add($productScore);

        $newScore=D('Member_user')->where('userid='.$attach)->getField('score') + ceil($updateData['productprice']);
        D('Member_user')->where('userid='.$attach)->save(array('score'=>$newScore));
        return true;
    }
}