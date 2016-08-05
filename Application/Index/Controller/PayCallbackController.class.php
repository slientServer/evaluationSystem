<?php
/**
 * Created by PhpStorm.
 * User: Blake
 * Date: 3/22/2016
 * Time: 9:21 PM
 */

namespace Index\Controller;

use Index\Logic\WxPayNotifyCallBack;
use Think\Log;

class PayCallbackController extends CommonController
{
    public function notify() {
        Log::write("Start pay callback", Log::DEBUG);
        $notify = new WxPayNotifyCallBack();
        $notify->Handle(false);
        Log::write("End pay callback", Log::DEBUG);

        return;
    }
}