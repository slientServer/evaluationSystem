<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Performance/insert/navTabId/performance/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" width="100%" layoutH="60">
			<dl>
				<dt>考核小组名字：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="groupname"/></dd>
			</dl>
			<dl>
				<dt>状　　态:</dt>
				<dd>
					开启&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="1" checked/>&nbsp;&nbsp;&nbsp;
					关闭&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="0"/>
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>表单：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="pmformid">
						<option value="">请选择表单</option>
						<?php if(is_array($formList)): foreach($formList as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["formname"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<dl>
				<dt>考核小组描述：</dt>
				<dd><textarea rows='10'  style="width:100%" name="groupdescription"></textarea></dd>
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