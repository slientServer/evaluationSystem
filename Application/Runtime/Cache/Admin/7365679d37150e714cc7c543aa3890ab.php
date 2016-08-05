<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Redpacket/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Redpacket/add" target="dialog" width="550" height="380" rel="listcoupons" title="添加红包"><span>添加红包</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Redpacket/delete/redpacketid/{item_id}/navTabId/listredpacket" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
<!-- 			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Redpacket/delAll" class="delete" ><span>批量删除</span></a></li> -->
	<!-- 		<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Redpacket/edit/redpacketid/{item_id}/navTabId/listredpacket"  width="550" height="380" target="dialog"><span>修改</span></a></li> -->
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Redpacket/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">红包ID</th>
				<th width="40">红包名字</th>
				<th width="40">红包金额</th>
				<th width="40">祝福语</th>
				<th width="40">活动名称</th>
				<th width="40">备注</th>
				<th width="40">添加时间</th>
				<th width="40">更新时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["redpacketid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['redpacketid']); ?>" type="checkbox"><?php echo ($vo["redpacketid"]); ?></td>
					<td><?php echo ($vo["redpacketkey"]); ?></td>
					<td><?php echo ($vo["redpacketvalue"]); ?></td>
					<td><?php echo ($vo["wishing"]); ?></td>
					<td><?php echo ($vo["actname"]); ?></td>
					<td><?php echo ($vo["remark"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
<!-- 	<div class="panelBar">
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
	</div> -->
</div>