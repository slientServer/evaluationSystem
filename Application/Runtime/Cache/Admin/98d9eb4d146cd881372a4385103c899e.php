<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/addImgLib/scoreproductid/<?php echo ($scoreproductid); ?>" target="dialog" width="500" height="480" rel="scorelistimglibs" title="添加图像"><span>添加图像</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/deleteImgLib/scoreproductimglibid/{item_id}/navTabId/scorelistimglibs" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/delAllImgLib/navTabId/scorelistimglibs" class="delete" ><span>批量删除</span></a></li>
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/editImgLib/scoreproductimglibid/{item_id}"  width="500" height="480" target="dialog"><span>修改图像</span></a></li>
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<li class="line">line</li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th><input type="checkbox" group="ids[]" class="checkboxCtrl">图像Id</th>
				<th>商品ID</th>
				<th>图像链接</th>
				<th>添加时间</th>
				<th>最后修改时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($vo)): foreach($vo as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["scoreproductimglibid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['scoreproductimglibid']); ?>" type="checkbox"><?php echo ($vo["scoreproductimglibid"]); ?></td>
					<td><?php echo ($vo["scoreproductid"]); ?></td>
					<td><?php echo ($vo["imgsrc"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>