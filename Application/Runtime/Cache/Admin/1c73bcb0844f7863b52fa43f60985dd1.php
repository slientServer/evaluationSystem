<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Memberuser/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/deleteScoreaudit/scoreid/{item_id}/navTabId/listscoreaudit" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delAllScoreaudit/navTabId/listscoreaudit" class="delete" ><span>批量删除</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="60">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">Id</th>
				<!-- <th width="40">类型key</th> -->
				<th width="40">类型名字</th>
				<th width="40">积分</th>
				<th width="40">积分变化类型</th>
				<th width="40">获取时间</th>
				<th width="40">最后修改时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["scoreid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['scoreid']); ?>" type="checkbox"><?php echo ($vo["scoreid"]); ?></td>
					<!-- <td><?php echo ($vo["typekey"]); ?></td> -->
					<td><?php echo ($vo["typename"]); ?></td>
					<td><?php echo ($vo["scorevalue"]); ?></td>
					<?php if($vo['changetype'] == ADD): ?><td>增加</td>
					<?php else: ?>
						<td>消费</td><?php endif; ?>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>