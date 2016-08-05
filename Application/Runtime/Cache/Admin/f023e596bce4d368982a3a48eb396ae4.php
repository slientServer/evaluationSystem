<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacuser/updatePwd/navTabId/listusers/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>用户名：</dt>
				<dd><input type="input" class="required"  style="width:100%" name="username" value="<?php echo ($vo["username"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="password" /></dd>
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