<?php if (!defined('THINK_PATH')) exit();?><script>
	$(function(){
		$('.add-role').click(function(){
			var obj=$(this).parents('dl').clone();
			obj.find('.add-role').remove();
			$('#last').before(obj);
		});
	})
</script>
<style>
	.add-role{
		display: inline-block;
		width: 100px;
		height: 26px;
		line-height: 28px;
		text-align: center;
		border: 1px solid blue;
		border-radius: 4px;
		margin-left: 20px;
		cursor: pointer;;
	}
</style>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacuser/insert/navTabId/listusers/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" width="100%" layoutH="60">
			<dl>
				<dt>用户名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="password"/></dd>
			</dl>
			<dl>
				<dt>显示名字：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="showname"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" style="width:100%" name="phone"/></dd>
			</dl>		
			<dl>
				<dt>职位：</dt>
				<dd><input type="text"  style="width:100%" name="position"/></dd>
			</dl>
			<dl>
				<dt>入职时间：</dt>
				<dd><input type="input" class="date textInput valid" style="width:100%" name="enrolldate" /></dd>
			</dl>
			<dl style="width:500px;">
				<dt>部门ID：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="deptid">
						<option value="">请选择部门</option>
						<?php if(is_array($dept)): foreach($dept as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>直属领导：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="directleader">
						<option value="">请选择领导</option>
						<?php if(is_array($user)): foreach($user as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["username"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<dl>
				<dt>状态：</dt>
				<dd>
					<input type="radio" name="islock" value="0" checked/>正常
					<input type="radio" name="islock" value="1"/>锁定
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>选择角色:</dt>
				<dd style="width:227px">
					<select style="width:227px" name="role_id[]">
						<option value="">请选择角色</option>
						<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<p id="last"></p>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>