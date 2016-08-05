<?php if (!defined('THINK_PATH')) exit();?><div id="benefitResultPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-color:#999ed8;">
<style>
@-webkit-keyframes benefitResultNoCredita{
0%{ transform:rotate(0deg);transform-origin: 0px 0px; }
50%{ transform:rotate(5deg);transform-origin: 0px 0px; }
}
@-webkit-keyframes benefitResultNoCreditb{
0%{ opacity:0;}
100%{ opacity:1}
}
@-webkit-keyframes benefitResultNoCreditc{
0%{ left:50%;top:50%;width:0px;height:0px;opacity:0;}
100%{ left:0px;top:0px;width:100%;height:100%;opacity:1}
}
.benefitResultNoCreditaClass{
    -webkit-animation:benefitResultNoCreditb 0.3s 1 linear;
}
.benefitResultNoCreditbClass{
    -webkit-animation:benefitResultNoCreditc 0.3s 1 linear;
}
.benefitResultNoCreditcClass{
    transform:rotate(5deg);transform-origin: 0px 0px;
    -webkit-animation:benefitResultNoCredita 0.2s 1 linear;
}
</style>
<script type="text/javascript">
$("#benefitResultPopupMain").addClass("benefitResultNoCreditaClass");
setTimeout(function(){
    $("#benefitResultPopupMain .benefitResultPopupMain_Renwu").addClass("benefitResultNoCreditbClass").show();
},300);
setTimeout(function(){
    $("#benefitResultPopupMain .benefitResultPopupMain_Text").addClass("benefitResultNoCreditbClass").show();
},500);
setTimeout(function(){
    $("#benefitResultPopupMain .benefitResultPopupMain_Text").removeClass("benefitResultNoCreditbClass").addClass("benefitResultNoCreditcClass");
},900);
</script>
    <div class="benefitResultPopupMain_Text" style="width:100%;height:100%;position:absolute;left:0px;top:0px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitWinNoRewardText.png');background-size:100% 100%;background-repeat:no-repeat;z-index:12;display:none;">
    </div>
    <div class="benefitResultPopupMain_Renwu" style="width:100%;height:100%;position:absolute;left:0px;top:0px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitWinNoRewardRenwu.png');background-size:100% 100%;background-repeat:no-repeat;z-index:13;display:none;">
    </div>
</div>