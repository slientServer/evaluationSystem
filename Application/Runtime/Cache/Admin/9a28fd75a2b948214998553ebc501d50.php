<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/index" method="post">
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
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [绫诲瀷key]
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
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/delete/lotteryauditid/{item_id}/navTabId/listlotteryaudit" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li>
			<li><a title="纭疄瑕佸垹闄よ繖浜涜褰曞悧?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/delAll" class="delete" ><span>鎵归噺鍒犻櫎</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="10"><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th width="40">鐢ㄦ埛ID</th>
				<th width="40">鎶藉绫诲瀷</th>
				<th width="40">鎶藉绫诲瀷鍚嶅瓧</th>
				<th width="40">濂栧姳鍊�</th>
				<th width="40">浣跨敤鏉′欢</th>
				<th width="40">鍙戞斁鎯呭喌</th>
				<th width="40">鏀粯娴佹按鍙�</th>
				<th width="40">鎶藉鏃堕棿</th>
				<th width="40">鏇存柊鏃堕棿</th>
				
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["lotteryauditid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['lotteryauditid']); ?>" type="checkbox"><?php echo ($vo["lotteryauditid"]); ?></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/specifieduser/userid/<?php echo ($vo["userid"]); ?>" target="dialog" class="edit" width="500" height="400" title="灞曠ず鐢ㄦ埛淇℃伅"><span>鐢ㄦ埛淇℃伅</span></a></td>
					<td> <?php if($vo['lotterytype'] == redpacket): ?>绾㈠寘<?php elseif($vo['lotterytype'] == coupontype): ?>浼樻儬鍒�<?php elseif($vo['lotterytype'] == scoretype): ?>绉垎<?php else: ?>鏈腑濂�<?php endif; ?></td>		
					<td><?php echo ($vo["lotterytypekey"]); ?></td>
					<td><?php echo ($vo["lotteryvalue"]); ?></td>
					<td><?php echo ($vo["lotterycondition"]); ?></td>
					<td>
						<?php if($vo["state"] == 0): ?>鍙戞斁澶辫触
							<?php else: ?>
							鍙戞斁鎴愬姛<?php endif; ?>
					</td>
					<td><?php echo ($vo["listid"]); ?></td>
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