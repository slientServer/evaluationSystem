<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/index" method="post">
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
					<b>鎼滅储</b> &nbsp; 鍏抽敭瀛楋細<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [鍟嗗搧鍚嶅瓧]
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
			<li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/add" target="dialog" width="500" height="480" rel="listscoreproducts" title="娣诲姞鍟嗗搧"><span>娣诲姞鍟嗗搧</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/delete/scoreproductid/{item_id}/navTabId/listscoreproducts" target="ajaxTodo" title="纭畾瑕佸垹闄ゅ悧?"><span>鍒犻櫎</span></a></li>
			<li><a title="纭疄瑕佸垹闄よ繖浜涜褰曞悧?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/delAll" class="delete" ><span>鎵归噺鍒犻櫎</span></a></li>
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/edit/scoreproductid/{item_id}"  width="500" height="480" target="dialog"><span>鏌ョ湅&amp;缂栬緫鍟嗗搧淇℃伅</span></a></li>
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>淇敼瀵嗙爜</span></a></li> -->
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th><input type="checkbox" group="ids[]" class="checkboxCtrl">Id</th>
				<th>鍟嗗搧鍚嶅瓧</th>
				<th>鍏戞崲绉垎鏁�</th>
				<th width='10%'>鍟嗗搧鍥剧墖</th>
				<!-- <th>鍟嗗搧搴撳瓨</th> -->
				<!-- <th>鍟嗗搧姒傝鎻忚堪</th> -->
				<th width='10%'>鍟嗗搧鎻忚堪</th>
				<th>鍑哄敭鐘舵��</th>
				<th>缂栬緫鍥惧簱</th>
				<th>XS鐮佸簱瀛�</th>
				<th>S鐮佸簱瀛�</th>
				<th>M鐮佸簱瀛�</th>
				<th>L鐮佸簱瀛�</th>
				<th>XL鐮佸簱瀛�</th>
				<th>XXL鐮佸簱瀛�</th>
				<th>鍧囩爜搴撳瓨</th>
				<th>娣诲姞鏃堕棿</th>
				<th>鍟嗗搧鍦板潃</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["scoreproductid"]); ?>">
					<td><input name="ids[]" value="<?php echo ($vo['scoreproductid']); ?>" type="checkbox"><?php echo ($vo["scoreproductid"]); ?></td>
					<td><?php echo ($vo["scoreproductname"]); ?></td>
					<td><?php echo ($vo["scorecondition"]); ?></td>
					<td width='10%'><?php echo ($vo["scoreproductpic"]); ?></td>
					<!-- <td><?php echo ($vo["scoreproductleft"]); ?></td> -->
					<!-- <td><?php echo ($vo["scoreproductshortdescription"]); ?></td> -->
					<td width='10%'><?php echo ($vo["scoreproductdescription"]); ?></td>
					<td>
						<?php if($vo["scoreproductleft"] == 0): ?>涓嬫灦
							<?php else: ?>
							涓婃灦<?php endif; ?>
					</td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/imgLib/scoreproductid/<?php echo ($vo["scoreproductid"]); ?>" target="navTab" class="edit" rel="scorelistimglibs" title="缂栬緫鍥惧簱">缂栬緫鍥惧簱</a></td>
					<td><?php echo ($vo["sizexs"]); ?></td>
					<td><?php echo ($vo["sizes"]); ?></td>
					<td><?php echo ($vo["sizem"]); ?></td>
					<td><?php echo ($vo["sizel"]); ?></td>
					<td><?php echo ($vo["sizexl"]); ?></td>
					<td><?php echo ($vo["sizexxl"]); ?></td>
					<td><?php echo ($vo["sizeavg"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td>
						<?php if($vo["scoreproductleft"] == 0): ?>鏃�
							<?php else: ?>
							http://www.thesimpsonschina.com/Index/WScreen.html?target=scoreProductDetailPopup&amp;parameters=<?php echo ($vo["scoreproductid"]); endif; ?>
					</td>	
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