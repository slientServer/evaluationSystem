<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Couponverify/index" method="post">
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
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [鍒稿彿]
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
			<!-- <li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Couponverify/add" target="dialog" width="550" height="380" rel="user_msg" title="娣诲姞鐢ㄦ埛淇℃伅"><span>娣诲姞</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li>
			<li><a title="纭疄瑕佸垹闄よ繖浜涜褰曞悧?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delAll" class="delete" ><span>鎵归噺鍒犻櫎</span></a></li> -->
			<!-- <li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Couponverify/delete/userid/{item_id}/navTabId/listusers" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li> -->
		<!-- 	<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Couponverify/edit/userid/{item_id}"  width="550" height="380" target="dialog"><span>淇敼</span></a></li> -->
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Couponverify/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>淇敼瀵嗙爜</span></a></li> -->
			<!-- <li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li> -->
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th width="40">浼樻儬鍒稿埜鍙�</th>
				<th width="40">鏍￠獙鐮�</th>
				<th width="40">浼樻儬鍒搁搴�</th>
				<th width="40">浼樻儬鍒哥被鍨�</th>
				<!-- <th width="40">浣跨敤鏉′欢</th> -->
				<th width="40">鐢熸晥鏃堕棿</th>
				<th width="40">澶辨晥鏃堕棿</th>
				<th width="40">澶囨敞</th>
				<th width="40">CRM鍚屾</th>
				<th width="40">鏄惁宸蹭娇鐢�</th>
				<th width="40">鏍搁攢</th>
				<th width="40">鍙戞斁鏃堕棿</th>
				<th width="40">鏇存柊鏃堕棿</th>
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
						<?php if($vo["coupontype"] == cash): ?>鐜伴噾鍒�
							<?php elseif($vo["coupontype"] == coupon): ?>
							浼樻儬鍒�
							<?php elseif($vo["coupontype"] == discount): ?>
							鎶樻墸鍒�
							<?php else: ?>
							鏈畾涔夌被鍨�<?php endif; ?>
					</td>
					<td><?php echo ($vo["starttime"]); ?></td>
					<td><?php echo ($vo["endtime"]); ?></td>
					<td><?php echo ($vo["couponcomment"]); ?></td>
					<?php if($vo["isupdated"] == 1): ?><td>宸插悓姝�</td>
					<?php else: ?>
						<td>鏈悓姝�</td><?php endif; ?>
					<?php if($vo["isused"] == 0): ?><td>鏈娇鐢�</td>
					<?php else: ?>
						<td>宸蹭娇鐢�</td><?php endif; ?>
					<?php if($vo["isused"] == 0): ?><td><a href="/workspace/simpsons/trunk/server/Admin/Couponverify/removeCoupon/couponid/<?php echo ($vo["couponid"]); ?>/navTabId/listcouponverifys" target="ajaxTodo" title="纭畾瑕佹牳閿�璇ヤ紭鎯犲埜?" width="650" height="400"><span>鏍搁攢</span></a></td>
					<?php else: ?>
						<td><span style="color:gray;">鏍搁攢</span></td><?php endif; ?>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["lastmodifytime"])); ?></td>
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