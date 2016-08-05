<?php if (!defined('THINK_PATH')) exit();?><div id="benefitResultPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitWinHongBao.png');background-size: 100% 100%;">
<script>
	var textAreaHongBao = new ActionArea(actionAreaList, $("#benefitResultPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 946,
        areaWidth : 260,
        areaHeight: 160,
        areaLeft : 950,
        areaTop : 300,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    alert('<?php echo ($test); ?>');
    var template="<div style='width:100%;text-align:center;'><?php echo ($benefit["redpacketvalue"]); ?></div><div style='width:100%;text-align:center;font-size:15px;'>红包奖励</div>"
    $(textAreaHongBao.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").append($(template));
</script>
</div>