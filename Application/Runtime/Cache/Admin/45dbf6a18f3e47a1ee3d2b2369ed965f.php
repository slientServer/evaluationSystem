<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Memberuser/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--姣忛〉鏄剧ず澶氬皯鏉�-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [鐢ㄦ埛鍚峕
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">妫�绱�</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<!-- <li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Memberuser/add" target="dialog" width="550" height="380" rel="user_msg" title="娣诲姞鐢ㄦ埛淇℃伅"><span>娣诲姞</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li>
			<li><a title="纭疄瑕佸垹闄よ繖浜涜褰曞悧?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delAll" class="delete" ><span>鎵归噺鍒犻櫎</span></a></li> -->
			<!-- <li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Memberuser/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li> -->
		<!-- 	<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Memberuser/edit/userid/{item_id}"  width="550" height="380" target="dialog"><span>淇敼</span></a></li> -->
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Memberuser/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>淇敼瀵嗙爜</span></a></li> -->
			<!-- <li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li> -->
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<!-- <th width="30">鐢ㄦ埛鍚�</th> -->
				<th width="30">鐢佃瘽鍙风爜</th>
				<th width="40">鐢熸棩</th>
				<th width="80">鍦板潃</th>
				<!-- <th width="40">绉垎</th> -->
				<th width="40">openid</th>
				<th width="40">寰俊鏄电О</th>
				<th width="40">娉ㄥ唽鏃堕棿</th>
				<th width="40">涓婃鐧诲綍鏃堕棿</th>
				<!-- <th width="30">鏄惁閿佸畾</th> -->
				<!-- <th width="40">寰俊</th> -->
				<th width="40">浼樻儬鍒�</th>
				<th width="40">绉垎璁板綍</th>
				<th width="40">璁㈠崟璁板綍</th>
				<th width="40">鎶藉璁板綍</th>
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
					<!-- <td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/wechat/wechatid/<?php echo ($vo["wechatid"]); ?>" target="dialog" class="edit" width="450" height="300" rel="listusers" title="灞曠ず鐢ㄦ埛寰俊淇℃伅"><span>寰俊</span></a></td> -->
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/coupon/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listcoupon" title="浼樻儬鍒�"><span>浼樻儬鍒�</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/scoreaudit/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listscoreaudit" title="绉垎璁板綍"><span>绉垎璁板綍</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/order/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listuserorders" title="璁㈠崟璁板綍"><span>璁㈠崟璁板綍</span></a></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Memberuser/lottery/userid/<?php echo ($vo["userid"]); ?>" target="navTab" width="650" height="400" rel="listuserlottery" title="鎶藉璁板綍"><span>鎶藉璁板綍</span></a></td>
				</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>鏄剧ず</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="10" <?php if($numPerPage == 10 ): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15 ): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20 ): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25 ): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30 ): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>鍏�<?php echo ($totalCount); ?>鏉�</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>