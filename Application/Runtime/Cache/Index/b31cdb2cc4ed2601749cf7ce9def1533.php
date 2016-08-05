<?php if (!defined('THINK_PATH')) exit();?><div id="productFinalPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/productFinalBackground.png');background-size: 100% 100%;">
<script>
	var productFinalPhoto = new ActionArea(actionAreaList, $("#productFinalPopupMain"),{
        backgroundWidth : 1781,
        backgroundHeight : 876,
        areaWidth : 600,
        areaHeight: 600,
        areaLeft : 222,
        areaTop : 150,
        areaBackgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png',
        usingShortCalculate : true,
        events : {
        }
    });
	var template = '<div style="height:80%;width:100%;background-image:url(\'/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png\');background-size: 100% 100%;padding-top:10px;text-align:center;">'+
	'	<img src="/workspace/simpsons/trunk/server/<?php echo ($product["productpic"]); ?>" style="width:98%;">'+
	'	<div style="text-align:left;padding-top:10px;padding-left:10px;">'+
	'	<?php echo ($product["productname"]); ?>'+
	'	</div>'+
	'	<div style="text-align:left;padding-top:5px;padding-left:10px;">'+
	'	¥<?php echo ($product["productprice"]); ?>'+
	'	</div>'+
	'</div>';
    $(productFinalPhoto.theElement).append($(template)).css("transform","rotate(-10deg)");
</script>
</div>