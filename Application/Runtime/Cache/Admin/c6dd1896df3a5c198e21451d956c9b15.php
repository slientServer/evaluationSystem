<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Memberuser/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Memberuser/editCoupon/couponid/{item_id}/navTabId/listcoupons"  width="550" height="380" target="dialog"><span>修改</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/deleteCoupon/couponid/{item_id}/navTabId/listcoupon" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delAllCoupon/navTabId/listcoupon" class="delete" ><span>批量删除</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="60">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th width="40">优惠券券号</th>
				<th width="40">优惠券额度</th>
				<th width="40">使用条件</th>
				<th width="40">生效时间</th>
				<th width="40">失效时间</th>
				<th width="40">是否已使用</th>
				<th width="40">发放时间</th>
				<th width="40">更新时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["couponid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['couponid']); ?>" type="checkbox"><?php echo ($vo["couponid"]); ?></td>
					<td><?php echo ($vo["couponnumber"]); ?></td>
					<td><?php echo ($vo["couponvalue"]); ?></td>
					<td><?php echo ($vo["couponcondition"]); ?></td>
					<td><?php echo ($vo["starttime"]); ?></td>
					<td><?php echo ($vo["endtime"]); ?></td>
					<?php if($vo["isused"] == 0): ?><td>未使用</td>
					<?php else: ?>
						<td>已使用</td><?php endif; ?>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>