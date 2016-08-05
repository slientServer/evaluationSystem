<?php if (!defined('THINK_PATH')) exit();?><div id="benefitResultPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitWinCredit.png');background-size: 100% 100%;">
<script>
	var textAreaCredit = new ActionArea(actionAreaList, $("#benefitResultPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 950,
        areaWidth : 260,
        areaHeight: 105,
        areaLeft : 870,
        areaTop : 440,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    $(textAreaCredit.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").text("<?php echo ($value); ?>");
</script>
</div>