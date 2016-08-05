<?php if (!defined('THINK_PATH')) exit();?><div id="exchangeBuyPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-color:#f5f5f5">
<style>
@-webkit-keyframes exchangeBuyPopupMainSizeInfoHide{
0%{ opacity:1;left:0px;}
100%{ opacity:0;left:-100px;}
}
.exchangeBuyPopupMainSizeInfoHideClass{
    -webkit-animation:exchangeBuyPopupMainSizeInfoHide 0.2s 1 linear;
}
@-webkit-keyframes exchangeBuyPopupMainUserInfoShow{
0%{ opacity:0;left:-100px;}
100%{ opacity:1;left:0px;}
}
.exchangeBuyPopupMainUserInfoShowClass{
    -webkit-animation:exchangeBuyPopupMainUserInfoShow 0.2s 1 linear;
}
</style>
<script>
$("#exchangeBuyPopupMain .sizeSelectToken").click(function(evt){
	$("#exchangeBuyPopupMain .sizeSelectToken").removeClass("active");
	$("#exchangeBuyPopupMain .sizeSelectToken").css("background-color","transparent");
	$(evt.target).addClass("active");
});
$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButton").click(function(){
	setTimeout(function(){
		$("#exchangeBuyPopupMain .exchangeBuyPopupMain_userInformation").hide();
	},200);
	setTimeout(function(){
		$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformation").removeClass("exchangeBuyPopupMainUserInfoShowClass").addClass("exchangeBuyPopupMainUserInfoShowClass").show();
	},200);
	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_userInformation").removeClass("exchangeBuyPopupMainSizeInfoHideClass").removeClass("exchangeBuyPopupMainUserInfoShowClass");
	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_userInformation").addClass("exchangeBuyPopupMainSizeInfoHideClass");
});
$("#exchangeBuyPopupMain .ConfirmSizeButton").click(function(){
	if($("#exchangeBuyPopupMain .sizeSelectToken.active").length==0){
		$("#exchangeBuyPopupMain .sizeSelectToken").css("background-color","#ce8d8d");
		return;
	}
	var selectedValue = $("#exchangeBuyPopupMain .sizeSelectToken.active").text().replace(/ /g,"");
	var selectData = $("#exchangeBuyPopupMain .sizeSelectToken.active").attr("value");
	if(selectData!="avg"){
		$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButtonText").css("font-size","15px").css("margin-top","30px");
		$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButtonText").html(selectedValue+"<br/>尺码");
	}else{
		$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButtonText").css("font-size","18px").css("margin-top","35px");;
		$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButtonText").text(selectedValue);
	}
	
	setTimeout(function(){
		$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformation").hide();
	},200);
	setTimeout(function(){
		$("#exchangeBuyPopupMain .exchangeBuyPopupMain_userInformation").removeClass("exchangeBuyPopupMainUserInfoShowClass").addClass("exchangeBuyPopupMainUserInfoShowClass").show();
	},200);
	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformation").removeClass("exchangeBuyPopupMainSizeInfoHideClass").removeClass("exchangeBuyPopupMainUserInfoShowClass");
	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformation").addClass("exchangeBuyPopupMainSizeInfoHideClass");
});
function validationExchangeBuyPopupMainForm(){
	var ispass = true;
	var name= $('#exchangerecipientname').val();
	var nameEle = $('#exchangerecipientname');
	if(name.trim()==""){
		nameEle.attr("placeholder","请填写姓名");
		nameEle.parent().css("background-color","#ce8d8d");
		ispass = false;
	}
    var phone= $('#exchangerecipientphone').val();
    var phoneEle = $('#exchangerecipientphone');
	if(phone.trim()==""){
		phoneEle.attr("placeholder","请填写手机");
		phoneEle.parent().css("background-color","#ce8d8d");
		ispass = false;
	}
    var mainaddress= $('#exchangeBuyPopupMain_citylist_dummy').val();
    var mainAddrEle = $('#exchangeBuyPopupMain_citylist');
	if(mainaddress.trim()==""){
		mainAddrEle.attr("placeholder","请填写地址");
		mainAddrEle.parent().css("background-color","#ce8d8d");
		ispass = false;
	}
    var address= $('#exchangedetailaddress').val();
    var addressEle = $('#exchangedetailaddress');
	if(address.trim()==""){
		addressEle.attr("placeholder","请填写详细地址");
		addressEle.parent().css("background-color","#ce8d8d");
		ispass = false;
	}
	return ispass;
}
$('#exchangerecipientname').focus(function(){
	$(this).parent().css("background-color","white");
	$(this).attr("placeholder","");
});
$('#exchangerecipientphone').focus(function(){
	$(this).parent().css("background-color","white");
	$(this).attr("placeholder","");
});
$('#exchangeBuyPopupMain_citylist').parent().click(function(){
	$(this).parent().css("background-color","transparent");
	$(this).attr("placeholder","");
});
$('#exchangedetailaddress').focus(function(){
	$(this).parent().css("background-color","white");
	$(this).attr("placeholder","请填写详细地址");
});
$("#exchangeConfirmBuyFinal").click(function(evt){
	if(validationExchangeBuyPopupMainForm()==false){
		return;
	}
        var productid=evt.target.attributes[0].value;
        var name= $('#exchangerecipientname').val();
        var phone= $('#exchangerecipientphone').val();
        var mainaddress= $('#exchangeBuyPopupMain_citylist_dummy').val();
        var address= $('#exchangedetailaddress').val();
        var selectedValue = $("#exchangeBuyPopupMain .sizeSelectToken.active").attr("value");
        dynamicPopupGroup.addNewPopup("confirmExchangeFinal","<?php echo U('WScreen/confirmExchangeFinal');?>",{'scoreproductid': productid, 'name': name, 'phone': phone, 'mainaddress': mainaddress, 'address': address, size: selectedValue}, {forceReload:true,closeButton:true, afterclose:function(){
              // dynamicPopupGroup.addNewPopup("MarketPlacePopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:true}, DivDialog);
        }}, DivDialog);
    });
setTimeout(function(){
	var textBoxWidth = $(window).width()-$("#exchangeBuyPopupMain .exchangeBuyPopupMain_ImageDIV").width()-130;
	$("#exchangeBuyPopupMain .textAreaOuter").width(textBoxWidth);
	$("#exchangeBuyPopupMain .ButtonAreaOuter").width(textBoxWidth+20);

	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformationData").width(textBoxWidth+30);
	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformation").show();

	var left1 = $(".exchangeBuyPopupMain_ImageDIV img").position().left;
	var width1 = $(".exchangeBuyPopupMain_ImageDIV img").width();
	var top1 = $(".exchangeBuyPopupMain_ImageDIV img").position().top;
	var height1 = $(".exchangeBuyPopupMain_ImageDIV img").height();
	$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButton").css("top", (height1+top1-30)+"px");
	$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButton").css("left", (width1+left1-80)+"px");
	$("#exchangeBuyPopupMain .exchangeBuyPopupMainSizeButton").show();

	$("#exchangeBuyPopupMain .exchangeBuyPopupMain_ImageDIV").height(height1+60);

	setTimeout(function(){
		var sizeSelectHeight = $("#exchangeBuyPopupMain .exchangeBuyPopupMain_sizeInformationData").height();
		var confirmButtonHeight = $("#exchangeBuyPopupMain .ConfirmSizeButton").height();
		var confirmPaddingTop = height1+60-sizeSelectHeight-confirmButtonHeight;
		$("#exchangeBuyPopupMain .ConfirmSizeButton").css("margin-top", confirmPaddingTop+"px").show();
	});
	
});
setTimeout(function(){
	$("#exchangeBuyPopupMain_citylist").html($("#addressDBAll").html());
	$("#exchangeBuyPopupMain_citylist").mobiscroll().treelist({ 
	    theme: 'ios', 
	    display: 'bottom',
	    setText: '确定', //确认按钮名称
	    cancelText: '取消',//取消按钮名籍我
	    formatResult: function (array) { //返回自定义格式结果 
	    		$("#exchangeBuyPopupMain_citylist").parent().css("background-color","transparent");
				$("#exchangeBuyPopupMain_citylist").attr("placeholder","");
	    		var region = $('#exchangeBuyPopupMain_citylist>li').eq(array[0]).children('span').text().trim(" ");
	    		var cityObj = $('#exchangeBuyPopupMain_citylist>li:eq('+array[0]+')>ul>li:eq('+array[1]+')')
	    		var city = cityObj.children("span").text().trim(" ");
	    		var distObj = cityObj.find("ul li").eq(array[2]);
	    		var dist = distObj.children("span").text().trim(" ");
	    		var finalStr = region+" "+city+" "+dist;
	            return finalStr;  
	        }  
	});
	$("#exchangeBuyPopupMain input").attr("data-enhanced","true");
	$("#exchangeBuyPopupMain input").css("border","0px").css("width","70%").css("display","inline-block");
},100);

</script>
<table style="width:90%;height:100%;margin:auto;">
	<tr>
		<td style="width:45%;height:100%;">
			<div class="exchangeBuyPopupMain_ImageDIV" style="height:100%;width:100%;margin-top:30px;margin-bottom:30px;padding-top:10px;text-align:center;border-radius:10px;background-color:white;border: 1px dashed grey;">
				<img src="/workspace/simpsons/trunk/server/<?php echo ($product["scoreproductpic"]); ?>" style="width:95%;border-radius:10px;">
				<div style="color:#323232;font-size:15px;font-weight:bold;text-align:left;padding-top:10px;padding-left:10px;">
				<?php echo ($product["scoreproductname"]); ?>
				</div>
				<div style="color:#323232;font-size:20px;font-weight:bold;text-align:left;;padding-left:10px;">
				<?php echo ($product["scorecondition"]); ?>积分
				</div>
				<div class="exchangeBuyPopupMainSizeButton" style="position:absolute;cursor:pointer;width:80px;height:87px;display:none;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/SizeSelectionButton.png');background-size:100% 100%;background-repeat:no-repeat;">
                    <div class="exchangeBuyPopupMainSizeButtonText" style="margin:auto;margin-top:35px;font-size:18px;color:white;text-shadow:1px 1px 0px black, 2px 2px 0px black, -1px -1px 0px grey;">
                    	尺码
                    </div>
                </div>
			</div>
		</td>
		<td style="">
			<div class="exchangeBuyPopupMain_sizeInformation" style="padding-left:15px;width:250px;height:100%;margin-top:50px;position:relative;">
				<div style="width:100%;" class="exchangeBuyPopupMain_sizeInformationData">
					<?php if($product["sizeavg"] > 0): ?><div class="sizeSelectToken" value="avg">
							均码
						</div>
					<?php else: ?>	
						<?php if($product["sizexs"] > 0): ?><div class="sizeSelectToken" value="xs">
								XS
							</div><?php endif; ?>
						<?php if($product["sizes"] > 0): ?><div class="sizeSelectToken" value="s">
								S
							</div><?php endif; ?>
						<?php if($product["sizem"] > 0): ?><div class="sizeSelectToken" value="m">
								M
							</div><?php endif; ?>
						<?php if($product["sizel"] > 0): ?><div class="sizeSelectToken" value="l">
								L
							</div><?php endif; ?>
						<?php if($product["sizexl"] > 0): ?><div class="sizeSelectToken" value="xl">
								XL
							</div><?php endif; ?>
						<?php if($product["sizexxl"] > 0): ?><div class="sizeSelectToken" value="xxl">
								XXL
							</div><?php endif; endif; ?>
					<?php if(($product["sizeavg"] <= 0) AND ($product["sizexs"] <= 0) AND ($product["sizes"] <= 0) AND ($product["sizem"] <= 0) AND ($product.sizel) AND ($product["sizexl"] <= 0) AND ($product["sizexxl"] <= 0)): ?><div style="font-size:25px;text-align:center;width:100%;padding-top:20px;">
							无货
						</div><?php endif; ?>
				</div>
				<div>
					<?php if(($product["sizeavg"] <= 0) AND ($product["sizexs"] <= 0) AND ($product["sizes"] <= 0) AND ($product["sizem"] <= 0) AND ($product.sizel) AND ($product["sizexl"] <= 0) AND ($product["sizexxl"] <= 0)): else: ?>
					<div  style="position:relative;bottom:0px;margin:auto；width:100%;">
						<img productid="<?php echo ($product["productid"]); ?>" class="ButtonAreaOuter ConfirmSizeButton"  src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/confirmSizeButton.png" style="display:none;width:250px;height:auto;margin-top:30px;">
					</div><?php endif; ?>
				</div>
			</div>
			<div class="exchangeBuyPopupMain_userInformation" style="padding-left:15px;width:250px;position:relative;display:none;">
				<div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:250px;" class="ui-input-text textAreaOuter">
					姓名: &nbsp;<input id='exchangerecipientname' class="" value="<?php echo ($user["nickname"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true">
				</div>
				<div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:250px;" class="ui-input-text textAreaOuter">
					手机: &nbsp;<input id='exchangerecipientphone' class="" value="<?php echo ($user["phonenumber"]); ?>" style="width:70%;border:0px; display:inline-block;background-color: transparent;" data-enhanced="true">
				</div>
				<div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:250px;" class="greyBackgroundColor exchangeBuyPopupMain_Addr ui-input-text textAreaOuter">
					地址: &nbsp;<!-- 地址: <input id='recipientaddress' class="" value="<?php echo ($user["address"]); ?>" style="width:70%;border:0px; display:inline-block;" data-enhanced="true"> -->
					<ul id="exchangeBuyPopupMain_citylist" style="display:none;">
					</ul>
				</div>
				<div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:250px;" class="ui-input-text textAreaOuter">
					<input id='exchangedetailaddress' class="" value="<?php echo ($user["address"]); ?>" style="width:100%;border:0px; display:inline-block;" data-enhanced="true">
				</div>
				<div id='exchangeConfirmBuyFinal' productid="<?php echo ($product["scoreproductid"]); ?>" style="padding-top:10px;width:100%;text-align:center;">
					<div productid="<?php echo ($product["scoreproductid"]); ?>" style="margin:auto；width:100%;">
						<img productid="<?php echo ($product["scoreproductid"]); ?>"  class="ButtonAreaOuter" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/confirmExchange.png" style="width:250px;height:auto">
					</div>
				</div>
			</div>
		</td>
	</tr>
</table>
</div>