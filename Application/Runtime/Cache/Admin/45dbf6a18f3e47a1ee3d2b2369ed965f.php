<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Memberuser/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [用户名]
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
			<!-- <li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Memberuser/add" target="dialog" width="550" height="380" rel="user_msg" title="添加用户信息"><span>添加</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delAll" class="delete" ><span>批量删除</span></a></li> -->
			<!-- <li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li> -->
		<!-- 	<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Memberuser/edit/userid/{item_id}"  width="550" height="380" target="dialog"><span>修改</span></a></li> -->
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Memberuser/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<!-- <li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li> -->
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<!-- <th width="30">用户名</th> -->
				<th width="30">电话号码</th>
				<th width="40">生日</th>
				<th width="80">地址</th>
				<!-- <th width="40">积分</th> -->
				<th width="40">openid</th>
				<th width="40">微信昵称</th>
				<th width="40">注册时间</th>
				<th width="40">上次登录时间</th>
				<!-- <th width="30">是否锁定</th> -->
				<!-- <th width="40">微信</th> -->
				<th width="40">优惠券</th>
				<th width="40">积分记录</th>
				<th width="40">订单记录</th>
				<th width="40">抽奖记录</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["userid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['userid']); ?>" type="checkbox"><?php echo ($vo["userid"]); ?></td>
					<!-- <td><?php echo ($vo["username"]); ?></td> -->
					<td><?php echo ($vo["phonenumber"]); ?></td>
					<td><?php echo ($vo["birthday"]); ?></td>
					<td><?php echo ($vo["address"]); ?></td>
					<!-- <td><?php echo ($vo["score"]); ?></td> -->
					<td><?php echo ($vo["openid"]); ?></td>
					<td><?php echo ($vo["nickname"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["enroll"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
					<!-- <td><?php echo ($vo["islock"]); ?></td> -->
					<!-- <td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/wechat/wechatid/<?php echo ($vo["wechatid"]); ?>" target="dialog" class="edit" width="450" height="300" rel="listusers" title="展示用户微信信息"><span>微信</span></a></td> -->
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/coupon/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listcoupon" title="优惠券"><span>优惠券</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/scoreaudit/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listscoreaudit" title="积分记录"><span>积分记录</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/order/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listuserorders" title="订单记录"><span>订单记录</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/lottery/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listuserlottery" title="抽奖记录"><span>抽奖记录</span></a></td>
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