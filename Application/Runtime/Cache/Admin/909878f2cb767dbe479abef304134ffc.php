<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Dept/update/navTabId/listdepts/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dl>
				<dt>部门名字：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name" value="<?php echo ($vo["name"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>部门描述：</dt>
				<dd><textarea rows='10'  style="width:100%" name="remark"><?php echo ($vo["remark"]); ?></textarea></dd>
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