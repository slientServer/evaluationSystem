<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Order/index" method="post">
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
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [璁㈠崟鍙穄
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
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Order/delete/id/{item_id}/navTabId/listorders" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li>
			<li><a title="纭疄瑕佸垹闄よ繖浜涜褰曞悧?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Order/delAll" class="delete" ><span>鎵归噺鍒犻櫎</span></a></li>
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Order/edit/id/{item_id}"  width="500" height="380" target="dialog"><span>淇敼</span></a></li>
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Order/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>淇敼瀵嗙爜</span></a></li> -->
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th><input type="checkbox" group="ids[]" class="checkboxCtrl">ID</th>
				<th>璁㈠崟缂栧彿</th>
				<th>涓嬪崟鐢ㄦ埛</th>
				<th>鏀惰揣浜哄鍚�</th>
				<th>鏀惰揣浜虹數璇�</th>
				<th>鍦板潃</th>
				<th>璇︾粏鍦板潃</th>
				<th>閲戦</th>
				<th>鍟嗗搧ID</th>	
				<th>鍟嗗搧灏虹爜</th>	
				<th>璁㈠崟绫诲瀷</th>
				<th>璁㈠崟鐘舵��</th>
				<th>蹇�掑崟鍙�</th>
				<!-- <th>寰俊鍐呴儴璁㈠崟鍙�</th> -->
				<th>鏀粯娴佹按鍙�</th>
				<th>璁㈠崟鐢熸垚鏃堕棿</th>
				<th>鏈�鍚庝慨鏀规椂闂�</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['id']); ?>" type="checkbox"><?php echo ($vo["id"]); ?></td>
					<td><?php echo ($vo["orderid"]); ?></td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Order/specifieduser/userid/<?php echo ($vo["userid"]); ?>" target="dialog" class="edit" width="500" height="400" rel="listorders" title="灞曠ず鐢ㄦ埛淇℃伅"><span>鐢ㄦ埛淇℃伅</span></a></td>
					<td><?php echo ($vo["recipientname"]); ?></td>
					<td><?php echo ($vo["recipientphone"]); ?></td>
					<td><?php echo ($vo["mainaddress"]); ?></td>
					<td><?php echo ($vo["recipientaddress"]); ?></td>
					<td><?php echo ($vo["productprice"]); ?></td>
					<!-- <td><a href="/workspace/simpsons/trunk/server/Admin/Order/specifiedproduct/productid/<?php echo ($vo["productid"]); ?>/ordertype/<?php echo ($vo["producttypekey"]); ?>" target="dialog" class="edit" width="500" height="450" rel="listorders" title="灞曠ず鍟嗗搧淇℃伅"><?php echo ($vo["productid"]); ?>[鍟嗗搧淇℃伅]</a></td> -->
					<td><?php echo ($vo["productid"]); ?></td>
					<td><?php echo ($vo["size"]); ?></td>
					<td>
					<?php if($vo["producttypekey"] == scoreproduct): ?>绉垎鍏戞崲
					<?php else: ?>
						璐拱<?php endif; ?>
					</td>
					<td>
						<?php if($vo["orderstate"] == 1): ?>鏈粯娆�
						<?php elseif($vo["orderstate"] == 2): ?>鏀粯瀹屾垚
						<?php elseif($vo["orderstate"] == 3): ?>宸插彂璐�
						<?php elseif($vo["orderstate"] == 0): ?>鏀粯澶辫触<?php endif; ?> 
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