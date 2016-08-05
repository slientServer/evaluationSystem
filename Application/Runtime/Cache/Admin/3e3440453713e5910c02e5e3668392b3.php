<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Lotterytype/update/navTabId/listlotterytype/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="lotterytypeid" value="<?php echo ($vo["lotterytypeid"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>中奖率：</dt>
				<dd><input type="number"  style="width:50%" name="lotteryratio" value="<?php echo ($vo["lotteryratio"]); ?>"/>%</dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>