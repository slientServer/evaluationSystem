<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Assessgroup/update/navTabId/assessgroup/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dl>
				<dt>评价小组名字：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="groupname" value="<?php echo ($vo["groupname"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>状　　态:</dt>
				<dd>
					开启&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="1" <?php if($vo['status'] == 1): ?>checked<?php endif; ?> />&nbsp;&nbsp;&nbsp;
					关闭&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="0" <?php if($vo['status'] == 0): ?>checked<?php endif; ?> />
				</dd>
			</dl>
			<dl>
				<dt>开始日期：</dt>
				<dd><input type="number" value="<?php echo ($vo["startday"]); ?>"  style="width:30%" name="startday"/>日</dd>
			</dl>
			<dl>
				<dt>结束日期：</dt>
				<dd><input type="number" value="<?php echo ($vo["endday"]); ?>" style="width:30%" name="endday"/>日</dd>
			</dl>
			<dl>
				<dt>评价小组描述：</dt>
				<dd><textarea rows='10'  style="width:100%" name="groupremark"><?php echo ($vo["groupremark"]); ?></textarea></dd>
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