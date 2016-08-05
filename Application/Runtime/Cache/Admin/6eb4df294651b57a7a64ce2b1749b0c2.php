<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Redpacket/update/navTabId/listredpacket/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="redpacketid" value="<?php echo ($vo["redpacketid"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>红包名字(唯一):</dt>
				<dd><input type="input"  style="width:100%" name="redpacketkey" value="<?php echo ($vo["redpacketkey"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>红包金额:</dt>
				<dd><input type="number" style="width:100%" name="redpacketvalue" value="<?php echo ($vo["redpacketvalue"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>祝福语:</dt>
				<dd><input type="number" style="width:100%" name="wishing" value="<?php echo ($vo["wishing"]); ?>"/></dd>
			</dl>	
			<dl>
				<dt>活动名称:</dt>
				<dd><input type="number" style="width:100%" name="actname" value="<?php echo ($vo["actname"]); ?>"/></dd>
			</dl>	
			<dl>
				<dt>备注:</dt>
				<dd><input type="number" style="width:100%" name="remark" value="<?php echo ($vo["remark"]); ?>"/></dd>
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