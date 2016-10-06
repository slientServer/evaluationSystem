<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/evaluationSystem/Admin/Rbacuser/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/evaluationSystem/Admin/Rbacuser/add" target="dialog" width="550" height="380" rel="user_msg" title="添加用户"><span>添加</span></a></li>
			<li><a class="delete" href="/evaluationSystem/Admin/Rbacuser/delete/id/{item_id}/navTabId/listusers" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/evaluationSystem/Admin/Rbacuser/edit/id/{item_id}"  width="550" height="380" target="dialog"><span>修改信息</span></a></li>	
			<li><a class="edit" href="/evaluationSystem/Admin/Rbacuser/editpwd/id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li>	
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak();"><span>刷新</span></a></li>	
		</ul>
	</div>
	<table class="table" width="100%" layoutH="75">
		<thead>
			<tr>
				<th width="10">ID</th>
				<th width="30">用户名</th>
				<th width="30">显示名字</th>
				<th width="30">电话</th>
				<th width="30">职位</th>
				<th width="30">直属领导</th>
				<th width="30">所属部门</th>
				<th width="30">入职日期</th>
				<th width="30">打分所占比重</th>
				<th width="40">上次登陆时间</th>
				<th width="40">上次登陆IP</th>
				<th width="40">所属组别</th>
				<th width="40">状态</th>
				<th width="40">操作</th>	
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>" <?php if($vo['username']==C('RBAC_SUPERADMIN')): ?>style=""<?php endif; ?> >
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["username"]); ?></td>
					<td><?php echo ($vo["showname"]); ?></td>
					<td><?php echo ($vo["phone"]); ?></td>
					<td><?php echo ($vo["position"]); ?></td>
					<td><?php echo ($vo["directleader"]); ?></td>
					<td><?php echo ($vo["deptid"]); ?></td>
					<td><?php echo ($vo["enrolldate"]); ?></td>
					<td>
						<?php if($vo['scoreratio']== 0): ?>无特殊要求
							<?php else: ?>
								<?php echo ($vo["scoreratio"]); ?>%<?php endif; ?>
					</td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["logintime"])); ?></td>
					<td><?php echo ($vo["loginip"]); ?></td>
					<td>
						<?php if($vo['username']==C('RBAC_SUPERADMIN')): ?><b>超级管理员</b>
						<?php else: ?>
							<?php if(is_array($vo["role"])): foreach($vo["role"] as $key=>$value): echo ($value["name"]); ?><!-- <?php echo ($value["remark"]); ?> --><?php endforeach; endif; endif; ?>
					</td>
					<td><?php echo (islock($vo["islock"])); ?></td>
					<td>

<script>
function updateLock(id,num){
	$.post('/evaluationSystem/Admin/Rbacuser/update/navTabId/listusers/callbackType/closeCurrent',{'id':id,'islock':num},function(data){
		if (data) {
			navTabPageBreak();
		};	
	});	
}
</script>
						<?php if($vo["islock"] == 1): ?><a href="javascript:void(0);" onclick="updateLock(<?php echo ($vo["id"]); ?>,0);">解锁</a>
						<?php else: ?>
							<?php if($vo['username']==admin): ?>无法锁定<?php else: ?>
								<a href="javascript:void(0);" onclick="updateLock(<?php echo ($vo["id"]); ?>,1);">锁定</a><?php endif; endif; ?>
					</td>
					
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if($numPerPage == 10 ): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15 ): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20 ): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25 ): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30 ): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>