<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [类型key]
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
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/delete/lotteryauditid/{item_id}/navTabId/listlotteryaudit" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/delAll" class="delete" ><span>批量删除</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th width="40">用户ID</th>
				<th width="40">抽奖类型</th>
				<th width="40">抽奖类型名字</th>
				<th width="40">奖励值</th>
				<th width="40">使用条件</th>
				<th width="40">发放情况</th>
				<th width="40">支付流水号</th>
				<th width="40">抽奖时间</th>
				<th width="40">更新时间</th>
				
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["lotteryauditid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['lotteryauditid']); ?>" type="checkbox"><?php echo ($vo["lotteryauditid"]); ?></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/specifieduser/userid/<?php echo ($vo["userid"]); ?>" target="dialog" class="edit" width="500" height="400" title="展示用户信息"><span>用户信息</span></a></td>
					<td> <?php if($vo['lotterytype'] == redpacket): ?>红包<?php elseif($vo['lotterytype'] == coupontype): ?>优惠券<?php elseif($vo['lotterytype'] == scoretype): ?>积分<?php else: ?>未中奖<?php endif; ?></td>		
					<td><?php echo ($vo["lotterytypekey"]); ?></td>
					<td><?php echo ($vo["lotteryvalue"]); ?></td>
					<td><?php echo ($vo["lotterycondition"]); ?></td>
					<td>
						<?php if($vo["state"] == 0): ?>发放失败
							<?php else: ?>
							发放成功<?php endif; ?>
					</td>
					<td><?php echo ($vo["listid"]); ?></td>
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