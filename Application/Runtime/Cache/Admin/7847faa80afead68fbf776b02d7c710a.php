<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacuser/update/navTabId/listusers/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dl>
				<dt>用户名：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="username" value="<?php echo ($vo["username"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="password"/></dd>
			</dl>
			<dl>
				<dt>显示名字：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="showname" value="<?php echo ($vo["showname"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>电话：</dt>
				<dd><input type="text" style="width:100%" name="phone" value="<?php echo ($vo["phone"]); ?>"/></dd>
			</dl>			
			<dl>
				<dt>职位：</dt>
				<dd><input type="text" style="width:100%" name="position" value="<?php echo ($vo["position"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>入职时间：</dt>
				<dd><input type="input" class="date textInput valid" style="width:100%" name="enrolldate" value="<?php echo ($vo["enrolldate"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>打分比重：</dt>
				<dd><input type="number"  style="width:30%" name="scoreratio" value="<?php echo ($vo["scoreratio"]); ?>"/>%(如无特殊要求，可不设)</dd>
			</dl>
			<dl>
				<dt>当前部门:</dt>
				<dd><input type="hidden" name="deptid">
					<?php echo ($vo["deptid"]); ?>
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>更改部门：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="deptid">
						<option value="<?php echo ($vo["deptid"]); ?>">请选择部门</option>
						<?php if(is_array($dept)): foreach($dept as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<dl>
				<dt>当前领导:</dt>
				<dd><input type="hidden" name="directleader">
					<?php echo ($vo["directleader"]); ?>
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>更改领导：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="directleader">
						<option value="<?php echo ($vo["directleader"]); ?>">请选择领导</option>
						<?php if(is_array($user)): foreach($user as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["username"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<?php if($vo['username']==C('RBAC_SUPERADMIN')): ?><dl>
				<dt>当前角色:</dt>
				<dd>超级管理员</dd>
			</dl>
			<?php else: ?>

				<dl>
					<dt>当前角色:</dt>
					<dd><input type="hidden" name="role_id">
						<?php echo ($name); ?>
					</dd>
				</dl>
				<dl style="width:500px;">
					<dt>更改角色:</dt>
					<dd style="width:300px">

						<select name="role_id" >
							<option value="">请选择角色</option>
							<?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
						</select><!-- <span class="add-role">添加角色</span> -->
					</dd>
				</dl>
				<p id="last"></p><?php endif; ?>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>