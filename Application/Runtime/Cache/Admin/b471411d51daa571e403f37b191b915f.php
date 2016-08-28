<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Performanceform/insert/navTabId/performanceform/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" width="100%" layoutH="60">
			<dl>
				<dt>表单标题：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="formname"/></dd>
			</dl>
			<dl>
				<dt>表单描述：</dt>
				<dd><textarea rows='10'  style="width:100%" name="formdescription"></textarea></dd>
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