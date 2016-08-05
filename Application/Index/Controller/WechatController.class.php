<?php
/**
 * Created by PhpStorm.
 * User: I309618
 * Date: 1/23/2016
 * Time: 9:56 AM
 */

namespace Index\Controller;

use Org\Wechat\Wechat;

/**
 * 所有需要验证微信用户登录的Controller请集成此类
 * Class WechatController
 * @package Index\Controller
 */
class WechatController extends CommonController
{
    protected $wechat;
    protected $openid = '';
    protected $user_token;

    function _initialize()
    {
        parent::_initialize();

        //微信用户登录验证
        if (!session('id') || !session('openid') || !session('user_token')) {
            $this->init();
        } else {
            $this->openid = session('openid');
            $this->user_token = session('user_token');

            $this->wechat = new Wechat();
        }
    }

    public function init(){
        $this->wechat = new Wechat();

        //授权登录，获得用户信息
         $oauth = $this->wechat->getOauthAccessToken();
         if (!$oauth){
             die(header('Location:' . $this->wechat->getOauthRedirect(C('WEB_DOMAIN') . $_SERVER["REQUEST_URI"],'')));
         }

         if (!$data = $this->wechat->getOauthUserinfo($oauth['access_token'], $oauth['openid'])){
             $this->error('获取微信信息失败');
         }
       // $oauth= array(
       //            "openid"=>" OPENID",
       //            "nickname"=> "NICKNAME",
       //            "sex"=>"1",
       //            "province"=>"PROVINCE",
       //            "city"=>"CITY",
       //            "country"=>"COUNTRY",
       //            "headimgurl"=>    "http://wx.qlogo.cn/mmopen/g3MonUZtNHkdmzicIlibx6iaFqAc56vxLSUfpb6n5WKSYVY0ChQKkiaJSgQ1dZuTOgvLLrhJbERQQ4eMsv84eavHiaiceqxibJxCfHe/46",
       //            "unionid"=> "o6_bmasdasdsad6_2sgVt7hMZOPfL"
       //         );
       // $data= $oauth;

        $user = D('Member_user')->where(array('openid' => $oauth['openid']))->find();
        
        if(empty($user)){
            $id = D('Member_user')->add(array(
                                    'openid' => $oauth['openid'],
                                    'nickname' => $data['nickname'],
                                    'photosrc' => $data['headimgurl'],
                                    'inserttime'=> time(),
                                    'lastmodifytime'=> time()
                                ));
            session('id',$id);
            session('openid', $oauth['openid']);
            session('user_token', $oauth['access_token']);
            session(C('USER_AUTH_KEY_F'), $data['nickname']);
            session(C('USER_AUTH_KEY_ID'), $id);
            if(C('IS_INTERGRATION')){
                session('nickname', $data['nickname']);
            }
            $this->openid = $oauth['openid'];
            $this->user_token = $oauth['access_token'];
        }else{
            D('Member_user')->where(array('openid' => $oauth['openid']))->save(array(
                'photosrc' => $data['headimgurl'],
                'lastmodifytime'=> time()
            ));
            session('id',$user['userid']);
            session('openid', $oauth['openid']);
            session('user_token', $oauth['access_token']);
            session(C('USER_AUTH_KEY_F'), $data['nickname']);
            session(C('USER_AUTH_KEY_ID'), $user['userid']);
            if(C('IS_INTERGRATION')){
                session('nickname', $data['nickname']);
                session('phonenumber', $user['phonenumber']);
            }
            $this->openid = $oauth['openid'];
            $this->user_token = $oauth['access_token'];
        }
    }
}