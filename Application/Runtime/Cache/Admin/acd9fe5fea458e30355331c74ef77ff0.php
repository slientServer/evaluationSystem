<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Redpacket/insert/navTabId/listredpacket/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>红包名字(唯一):</dt>
				<dd><input type="input"  style="width:100%" name="redpacketkey" /></dd>
			</dl>
			<dl>
				<dt>红包金额:</dt>
				<dd><input type="number" style="width:100%" name="redpacketvalue" /></dd>
			</dl>
			<dl>
				<dt>祝福语:</dt>
				<dd><input type="input"  style="width:100%" name="wishing" /></dd>
			</dl>
			<dl>
				<dt>活动名称:</dt>
				<dd><input type="input"  style="width:100%" name="actname" /></dd>
			</dl>
			<dl>
				<dt>备注:</dt>
				<dd><input type="input"  style="width:100%" name="remark" /></dd>
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