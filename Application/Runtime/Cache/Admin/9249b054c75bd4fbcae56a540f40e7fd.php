<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Couponverify/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [券号]
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<!-- <li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Couponverify/add" target="dialog" width="550" height="380" rel="user_msg" title="添加用户信息"><span>添加</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delAll" class="delete" ><span>批量删除</span></a></li> -->
			<!-- <li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li> -->
		<!-- 	<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Couponverify/edit/userid/{item_id}"  width="550" height="380" target="dialog"><span>修改</span></a></li> -->
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Couponverify/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<!-- <li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li> -->
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th width="40">优惠券券号</th>
				<th width="40">校验码</th>
				<th width="40">优惠券额度</th>
				<th width="40">优惠券类型</th>
				<!-- <th width="40">使用条件</th> -->
				<th width="40">生效时间</th>
				<th width="40">失效时间</th>
				<th width="40">备注</th>
				<th width="40">CRM同步</th>
				<th width="40">是否已使用</th>
				<th width="40">核销</th>
				<th width="40">发放时间</th>
				<th width="40">更新时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["couponid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['couponid']); ?>" type="checkbox"><?php echo ($vo["couponid"]); ?></td>
					<td><?php echo ($vo["couponnumber"]); ?></td>
					<td><?php echo ($vo["couponcode"]); ?></td>
					<td><?php echo ($vo["couponvalue"]); ?></td>
					<!-- <td><?php echo ($vo["couponcondition"]); ?></td> -->
					<td>
						<?php if($vo["coupontype"] == cash): ?>现金券
							<?php elseif($vo["coupontype"] == coupon): ?>
							优惠券
							<?php elseif($vo["coupontype"] == discount): ?>
							折扣券
							<?php else: ?>
							未定义类型<?php endif; ?>
					</td>
					<td><?php echo ($vo["starttime"]); ?></td>
					<td><?php echo ($vo["endtime"]); ?></td>
					<td><?php echo ($vo["couponcomment"]); ?></td>
					<?php if($vo["isupdated"] == 1): ?><td>已同步</td>
					<?php else: ?>
						<td>未同步</td><?php endif; ?>
					<?php if($vo["isused"] == 0): ?><td>未使用</td>
					<?php else: ?>
						<td>已使用</td><?php endif; ?>
					<?php if($vo["isused"] == 0): ?><td><a href="/workspace/simpsons/trunk/server/Admin/Couponverify/removeCoupon/couponid/<?php echo ($vo["couponid"]); ?>/navTabId/listcouponverifys" target="ajaxTodo" title="确定要核销该优惠券?" width="650" height="400"><span>核销</span></a></td>
					<?php else: ?>
						<td><span style="color:gray;">核销</span></td><?php endif; ?>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
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