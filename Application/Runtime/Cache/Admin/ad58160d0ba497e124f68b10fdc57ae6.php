<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Order/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [订单号]
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
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Order/delete/id/{item_id}/navTabId/listorders" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Order/delAll" class="delete" ><span>批量删除</span></a></li>
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Order/edit/id/{item_id}"  width="500" height="380" target="dialog"><span>修改</span></a></li>
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Order/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th>订单编号</th>
				<th>下单用户</th>
				<th>收货人姓名</th>
				<th>收货人电话</th>
				<th>地址</th>
				<th>详细地址</th>
				<th>金额</th>
				<th>商品ID</th>	
				<th>商品尺码</th>	
				<th>订单类型</th>
				<th>订单状态</th>
				<th>快递单号</th>
				<!-- <th>微信内部订单号</th> -->
				<th>支付流水号</th>
				<th>订单生成时间</th>
				<th>最后修改时间</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['id']); ?>" type="checkbox"><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["orderid"]); ?></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Order/specifieduser/userid/<?php echo ($vo["userid"]); ?>" target="dialog" class="edit" width="500" height="400" rel="listorders" title="展示用户信息"><span>用户信息</span></a></td>
					<td><?php echo ($vo["recipientname"]); ?></td>
					<td><?php echo ($vo["recipientphone"]); ?></td>
					<td><?php echo ($vo["mainaddress"]); ?></td>
					<td><?php echo ($vo["recipientaddress"]); ?></td>
					<td><?php echo ($vo["productprice"]); ?></td>
					<!-- <td><a href="/workspace/simpsons/trunk/server/Admin/Order/specifiedproduct/productid/<?php echo ($vo["productid"]); ?>/ordertype/<?php echo ($vo["producttypekey"]); ?>" target="dialog" class="edit" width="500" height="450" rel="listorders" title="展示商品信息"><?php echo ($vo["productid"]); ?>[商品信息]</a></td> -->
					<td><?php echo ($vo["productid"]); ?></td>
					<td><?php echo ($vo["size"]); ?></td>
					<td>
					<?php if($vo["producttypekey"] == scoreproduct): ?>积分兑换
					<?php else: ?>
						购买<?php endif; ?>
					</td>
					<td>
						<?php if($vo["orderstate"] == 1): ?>未付款
						<?php elseif($vo["orderstate"] == 2): ?>支付完成
						<?php elseif($vo["orderstate"] == 3): ?>已发货
						<?php elseif($vo["orderstate"] == 0): ?>支付失败<?php endif; ?> 
					</td>
					<td><?php echo ($vo["orderexpress"]); ?></td>
					<!-- <td><?php echo ($vo["wxinnerorderid"]); ?></td> -->
					<td><?php echo ($vo["transactionid"]); ?></td>
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