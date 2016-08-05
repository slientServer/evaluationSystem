<?php if (!defined('THINK_PATH')) exit();?>
<div id="benefitMainPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitMainBackground.png');background-size: 100% 100%;">
	<script>
	$(document).ready(function(){
        $("#benefitMainPopupMain .benefitMainPopupMain_startButton").click(function(){
        	dynamicPopupGroup.addNewPopup("benefitResult","<?php echo U('WScreen/benefitResult');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
        });
    });
	</script>
  <?php if($isFinished == false): ?><div class="benefitMainPopupMain_startButton" style="width:35%;height:14%;margin-left:auto;margin-right:auto;margin-top:30%;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitStartButtonEnabled.png');background-size: 100% 100%;">
    </div>
  <?php else: ?>
    <div class="benefitMainPopupMain_disabledButton" style="width:35%;height:14%;margin-left:auto;margin-right:auto;margin-top:30%;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitStartButtonDisabled.png');background-size: 100% 100%;">
    </div><?php endif; ?>
  <div style="padding-top:10px;margin:auto;font-size:15px;color:#e0e2c5;text-align:center;text-shadow:0 0 0 white;">
      福利宝箱每天可抽取一次<br/>每天0点更新
  </div>
</div>