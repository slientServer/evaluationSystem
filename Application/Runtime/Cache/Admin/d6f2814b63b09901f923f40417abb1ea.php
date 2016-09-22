<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/evaluationSystem/Admin/Performancequestion/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/evaluationSystem/Admin/Performancequestion/add" target="dialog" width="550" height="380" rel="performancequestion" title="添加问题"><span>添加</span></a></li>
			<li><a class="delete" href="/evaluationSystem/Admin/Performancequestion/delete/id/{item_id}/navTabId/performancequestion" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/evaluationSystem/Admin/Performancequestion/edit/id/{item_id}"  width="550" height="380" target="dialog"><span>修改信息</span></a></li>	
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak();"><span>刷新</span></a></li>	
		</ul>
	</div>
	<table class="table" width="100%" layoutH="75">
		<thead>
			<tr>
				<th width="10">ID</th>
				<th width="30">项目内容</th>
				<th width="40">项目级别</th>
				<th width="40">父级项目</th>
				<th width="40">项目类型</th>
				<th width="40">百分比</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>" >
					<td><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["questiontext"]); ?></td>
					<td>
						<?php if($vo["questionlevel"] == 1): ?>问题
						<?php else: ?>
							组名<?php endif; ?> 
					</td>
					<td>
						<?php if($vo["questionparent"] == 0): ?>无
						<?php else: ?>
							<?php echo ($vo["parenttext"]); ?>[<?php echo ($vo["questionparent"]); ?>]<?php endif; ?>
					</td>
					<td>
						<?php if($vo["questiontype"] == number): ?>分数
						<?php else: ?>
							其它<?php endif; ?>
					</td>
					<td>
						<?php echo ($vo["questionpercentage"]); ?>%
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