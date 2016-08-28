<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/evaluationSystem/Admin/Performanceform/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/evaluationSystem/Admin/Performanceform/add" target="dialog" width="550" height="380" rel="user_msg" title="添加部门"><span>添加</span></a></li>
			<li><a class="delete" href="/evaluationSystem/Admin/Performanceform/delete/id/{item_id}/navTabId/performanceform" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/evaluationSystem/Admin/Performanceform/edit/id/{item_id}"  width="550" height="380" target="dialog"><span>修改信息</span></a></li>	
			<li><a class="add" href="/evaluationSystem/Admin/Performanceform/addQuestion/id/{item_id}" target="dialog" width="550" height="380" rel="user_msg" title="添加问题组"><span>添加问题组</span></a></li>
			<li><a class="delete" href="/evaluationSystem/Admin/Performanceform/deleteQuestion/id/{item_id}" target="dialog" width="550" height="380" rel="user_msg" title="删除问题组"><span>管理已添加问题组</span></a></li>	
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak();"><span>刷新</span></a></li>	
		</ul>
	</div>
	<table class="table" width="100%" layoutH="75">
		<thead>
			<tr>
				<th width="10">ID</th>
				<th width="30">考核表单名字</th>
				<th width="40">考核表单描述</th>
				<th width="40">考核问题组</th>
				<th width="40">创建时间</th>
				<th width="40">修改时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>" >
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["formname"]); ?></td>
					<td><?php echo ($vo["formdescription"]); ?></td>
					<td><?php echo ($vo["questionarr"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s",$vo["lastmodifytime"])); ?></td>
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