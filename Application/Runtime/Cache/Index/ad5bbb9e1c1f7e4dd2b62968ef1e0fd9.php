<?php if (!defined('THINK_PATH')) exit();?>   <div class="container">
    <script type="text/javascript">
        //调用微信JS api 支付
        function jsApiCall()
        {
            WeixinJSBridge.invoke(
                    'getBrandWCPayRequest',
                    <?php echo ($jsApiParameters); ?>,
                    function(res){
                        WeixinJSBridge.log(res.err_msg);
//                        alert(res.err_code+ " " + res.err_desc+ " " + res.err_msg);
                        if(res.err_msg == 'get_brand_wcpay_request:cancel') {
                            alert('支付取消');
                            //todo: 刷新页面支付状态保存数据库
                        } else if(res.err_msg == 'get_brand_wcpay_request:ok') {
                            alert('支付完成！');
                            //todo: 刷新页面支付状态保存数据库
                        } else {
                            alert('支付失败');
                        }
                    }
            );
        }

        function callpay()
        {
            if (typeof WeixinJSBridge == "undefined"){
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall);
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
                }
            }else{
                jsApiCall();
            }
        }

        //获取共享地址
        function editAddress()
        {
            WeixinJSBridge.invoke(
                'editAddress',
                <?php echo ($editAddress); ?>,
                function(res){
                    var value1 = res.proviceFirstStageName;
                    var value2 = res.addressCitySecondStageName;
                    var value3 = res.addressCountiesThirdStageName;
                    var value4 = res.addressDetailInfo;
                    var tel = res.telNumber;
//                    alert(value1 + value2 + value3 + value4 + ":" + tel);
                }
            );
        }

        window.onload = function(){
            if (typeof WeixinJSBridge == "undefined"){
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', editAddress, false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', editAddress);
                    document.attachEvent('onWeixinJSBridgeReady', editAddress);
                }
            }else{
                editAddress();
            }
        };
        $(document).ready(function(){
            callpay();
        });
    </script>