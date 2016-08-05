<?php
/**
 * Created by PhpStorm.
 * User: I309618
 * Date: 1/23/2016
 * Time: 1:49 PM
 */

namespace Index\Controller;

import("Org.WxPay.WxPayData");
use Org\WxPay\WxPayApi;
use Org\WxPay\WxPayCashRed;
use Org\WxPay\WxPayConfig;
use Org\WxPay\WxPayUnifiedOrder;
use Org\WxPay\WxPayJsApiPay;
use Org\WxPay\WxPayException;

class PayController extends WechatController
{

    public function index() {
        $this->display('pay');
    }

    public function preview() {
        // 获得订单属性
        $orderInfo = array(
            'total_fee' => $_POST['mount'],
            'body' => '这是商品描述',
            'out_trade_no' => 'order'. date("YmdHis"), //系统内部订单号
        );

//        $jsTicket = $this->wechat->getJsTicket();
//        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//        $jsSign = $this->wechat->getJsSign($url, $timestamp = 0, $noncestr = '1234568');
//        var_dump($jsSign);die;

        $openId = $this->openid;
        $input = new WxPayUnifiedOrder();
        $input->SetBody($orderInfo['body']);
        $input->SetAttach("这是附加数据，会原样返回");
//        $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
        $input->SetOut_trade_no($orderInfo['out_trade_no']);
        $total_fee = $orderInfo['total_fee'];
        $input->SetTotal_fee("$total_fee");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 600));
//        $input->SetGoods_tag("148888");
        $input->SetNotify_url(C('WEB_DOMAIN') . "/" . MODULE_NAME . "/PayCallback/notify");
        $input->SetTrade_type("JSAPI");
        $input->SetOpenid($openId);
        $order = WxPayApi::unifiedOrder($input);
//        var_dump($order);

//        var_dump($order);die;
        $jsApiParameters = $this->GetJsApiParameters($order);
//        var_dump($jsApiParameters);

        $editAddress = $this->GetEditAddressParameters();
//        var_dump($editAddress);die;

        //显示支付预览页面
        $this->assign('order', $order);
        $this->assign('jsApiParameters', $jsApiParameters);
        $this->assign('editAddress', $editAddress);
//        $this->assign('jsSign', $jsSign);
        $this->assign('orderInfo', $orderInfo);

        $this->display('preview');

    }

    public function sendCashRed() {
        $cashRedInfo = array(
            'mch_billno' => WxPayConfig::MCHID.date("YmdHis")."1".mt_srand(999999999),
            're_openid' => $this->openid,
            'send_name' => 'The Simpsons Fashion',
            'total_amount' => 100,
            'wishing' => '祝你快乐',
            'act_name' => '开发网站',
            'remark' => '最少发1元',
        );

        $input = new WxPayCashRed();
        $input->SetMch_billno($cashRedInfo['mch_billno']);
        $input->SetRe_openid($cashRedInfo['re_openid']);
        $input->SetSend_name($cashRedInfo['send_name']);
        $input->SetTotal_amount($cashRedInfo['total_amount']);
        $input->SetWishing($cashRedInfo['wishing']);
        $input->SetAct_name($cashRedInfo['act_name']);
        $input->SetRemark($cashRedInfo['remark']);

        $result = WxPayApi::sendCashRed($input);

        //var_dump($result);
    }


    private function GetJsApiParameters($UnifiedOrderResult)
    {
//        var_dump($UnifiedOrderResult);die;
        if(!array_key_exists("appid", $UnifiedOrderResult)
            || !array_key_exists("prepay_id", $UnifiedOrderResult)
            || $UnifiedOrderResult['prepay_id'] == "")
        {
            throw new WxPayException("参数错误");
        }
        $jsapi = new WxPayJsApiPay();
        $jsapi->SetAppid($UnifiedOrderResult["appid"]);
        $timeStamp = time();
        $jsapi->SetTimeStamp("$timeStamp");
        $jsapi->SetNonceStr(WxPayApi::getNonceStr());
        $jsapi->SetPackage("prepay_id=" . $UnifiedOrderResult['prepay_id']);
        $jsapi->SetSignType("MD5");
        $jsapi->SetPaySign($jsapi->MakeSign());
        $parameters = json_encode($jsapi->GetValues());
        return $parameters;
    }

    /**
     *
     * 获取地址js参数
     *
     * @return 获取共享收货地址js函数需要的参数，json格式可以直接做参数使用
     */
    private function GetEditAddressParameters()
    {
        $getData = $this->data;
        $data = array();
        $data["appid"] = WxPayConfig::APPID;
        $data["url"] = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $time = time();
        $data["timestamp"] = "$time";
        $data["noncestr"] = "1234568";
        $data["accesstoken"] = $this->user_token;//$getData["access_token"];
        ksort($data);
//        var_dump($data);
        $params = $this->ToUrlParams($data);
        $addrSign = sha1($params);

        $afterData = array(
            "addrSign" => $addrSign,
            "signType" => "sha1",
            "scope" => "jsapi_address",
            "appId" => WxPayConfig::APPID,
            "timeStamp" => $data["timestamp"],
            "nonceStr" => $data["noncestr"]
        );
        $parameters = json_encode($afterData);
        return $parameters;
    }

    /**
     *
     * 拼接签名字符串
     * @param array $urlObj
     *
     * @return 返回已经拼接好的字符串
     */
    private function ToUrlParams($urlObj)
    {
        $buff = "";
        foreach ($urlObj as $k => $v)
        {
            if($k != "sign"){
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }
}