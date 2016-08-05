<?php if (!defined('THINK_PATH')) exit();?><div id="productBuyPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/confirmBuyBackground.png');background-repeat:repeat-y;">
<script>
$("#confirmBuyFinal").click(function(evt){
        var productid=evt.target.attributes[0].value;
        var name= $('#recipientname').val();
        var phone= $('#recipientphone').val();
        var mainaddress= $('#productBuyPopupMain_citylist_dummy').val();
        var address= $('#detailaddress').val();
        // dynamicPopupGroup.addNewPopup("confirmBuyFinal","<?php echo U('WScreen/confirmBuyFinal');?>",{'productid': productid, 'name': name, 'phone': phone, 'mainaddress': mainaddress, 'address': address}, {forceReload:true,closeButton:true, afterclose:function(){
        //       // dynamicPopupGroup.addNewPopup("MarketPlacePopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:true}, DivDialog);
        // }}, DivDialog);
        $.ajax({url:"<?php echo U('WScreen/confirmBuyFinal');?>", data: {'productid': productid, 'name': name, 'phone': phone, 'mainaddress': mainaddress, 'address': address}, async:true, success: function(wxdata){
        	alert(wxdata.join('|'));
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

            callpay();

            //调用微信JS api 支付
	        function jsApiCall()
	        {
	            WeixinJSBridge.invoke(
	                    'getBrandWCPayRequest',
	                    wxdata['jsApiParameters'],
	                    function(res){
	                        WeixinJSBridge.log(res.err_msg);
	                       // alert(wxdata['jsApiParameters']);
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
	                wxdata['editAddress'],
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

        }});
    });
$("#productBuyPopupMain_citylist").mobiscroll().treelist({ 
    theme: 'ios', 
    display: 'bottom',
    formatResult: function (array) { //返回自定义格式结果 
    		var region = $('#productBuyPopupMain_citylist>li').eq(array[0]).children('span').text().trim(" ");
    		var cityObj = $('#productBuyPopupMain_citylist>li').eq(array[0]).find('ul li').eq(array[1]);
    		var city = cityObj.children("span").text().trim(" ");
    		var distObj = cityObj.find("ul li").eq(array[2]);
    		var dist = distObj.children("span").text().trim(" ");
    		var finalStr = region+" "+city+" "+dist;
            return finalStr;  
        }  
});
$("#productBuyPopupMain input").attr("data-enhanced","true");
$("#productBuyPopupMain input").css("border","0px").css("width","70%").css("display","inline-block");

</script>
<table style="width:90%;height:100%;margin:auto;">
	<tr>
		<td style="width:45%;height:100%;">
			<div style="height:80%;width:100%;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png');background-size: 100% 100%;padding-top:10px;text-align:center;">
				<img src="/workspace/simpsons/trunk/server/<?php echo ($product["productpic"]); ?>" style="width:98%;">
				<div style="text-align:left;padding-top:10px;padding-left:10px;">
				<?php echo ($product["productname"]); ?>
				</div>
				<div style="text-align:left;padding-top:10px;padding-left:10px;">
				¥<?php echo ($product["productprice"]); ?>
				</div>
			</div>
		</td>
		<td style="">
			<div style="padding-left:20px;width:250px;">
				<div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:5px;width:250px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
					姓名: <input id='recipientname' class="" value="<?php echo ($user["nickname"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true">
				</div>
				<div style="padding-top:5px;box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) display:inline-block;padding-left:5px;width:250px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
					手机: <input id='recipientphone' class="" value="<?php echo ($user["phonenumber"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true">
				</div>
				<div style="padding-top:5px;box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) display:inline-block;padding-left:5px;width:250px;" class="productBuyPopupMain_Addr ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
					地址: <!-- 地址: <input id='recipientaddress' class="" value="<?php echo ($user["address"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true"> -->
					<ul id="productBuyPopupMain_citylist" style="">
					    <li><span>北京市<span>
					        <ul>
					            <li><span>北京市</span>
					                <ul>
					                    <li>
					                        <span>北京市</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					    <li><span>上海市</span>
					        <ul>
					            <li><span>上海市</span>
					                <ul>
					                    <li>
					                        <span>上海市</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					    <li><span>天津市</span>
					        <ul>
					            <li><span>天津市</span>
					                <ul>
					                    <li>
					                        <span>天津市</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					    <li><span>重庆市</span>
					        <ul>
					            <li><span>重庆市</span>
					                <ul>
					                    <li>
					                        <span>重庆市</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					    <li><span>河北省</span>
					        <ul>
					            <li><span>石家庄市</span>
					                <ul>
					                    <li>
					                        <span>山海关区1</span>
					                    </li>
					                    <li>
					                        <span>北戴河区1</span>
					                    </li>
					                    <li>
					                        <span>抚宁区1</span>
					                    </li>
					                </ul>
					            </li>
					            <li><span>唐山市</span>
					                <ul>
					                    <li>
					                        <span>山海关区2</span>
					                    </li>
					                    <li>
					                        <span>北戴河区2</span>
					                    </li>
					                    <li>
					                        <span>抚宁区2</span>
					                    </li>
					                </ul>
					            </li>
					            <li><span>秦皇岛市</span>
					                <ul>
					                    <li>
					                        <span>山海关区3</span>
					                    </li>
					                    <li>
					                        <span>北戴河区3</span>
					                    </li>
					                    <li>
					                        <span>抚宁区3</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					    <li><span>山西省</span>
					        <ul>
					            <li><span>unknown</span>
					                <ul>
					                    <li>
					                        <span>unknown</span>
					                    </li>
					                </ul>
					            </li>
					        </ul>
					    </li>
					</ul>
				</div>
				<div style="padding-top:5px;box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) display:inline-block;padding-left:5px;width:250px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
					详细地址: <input id='detailaddress' class="" value="<?php echo ($user["address"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true">
				</div>
				<div id='confirmBuyFinal' style="padding-top:10px;width:100%;text-align:center;">
					<div productid="<?php echo ($product["productid"]); ?>" style="margin:auto;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/confirmBuy.png');background-size: 143px 35px;width:143px;height:35px;">
					</div>
				</div>
			</div>
		</td>
	</tr>
</table>
</div>