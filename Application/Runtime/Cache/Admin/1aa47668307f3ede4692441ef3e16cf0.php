<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/index" method="post">
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
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo ($_POST['keyword']); ?>" /> [商品名字]
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
			<li><a class="add" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/add" target="dialog" width="500" height="480" rel="listscoreproducts" title="添加商品"><span>添加商品</span></a></li>
			<li><a class="delete" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/delete/scoreproductid/{item_id}/navTabId/listscoreproducts" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a title="确实要删除这些记录吗?" target="selectedTodo" target="dialog" rel="ids[]" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/delAll" class="delete" ><span>批量删除</span></a></li>
			<li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/edit/scoreproductid/{item_id}"  width="500" height="480" target="dialog"><span>查看&amp;编辑商品信息</span></a></li>
			<!-- <li><a class="edit" href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/editpwd/user_id/{item_id}"  width="550" height="380" target="dialog"><span>修改密码</span></a></li> -->
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th><input type="checkbox" group="ids[]" class="checkboxCtrl">Id</th>
				<th>商品名字</th>
				<th>兑换积分数</th>
				<th width='10%'>商品图片</th>
				<!-- <th>商品库存</th> -->
				<!-- <th>商品概要描述</th> -->
				<th width='10%'>商品描述</th>
				<th>出售状态</th>
				<th>编辑图库</th>
				<th>XS码库存</th>
				<th>S码库存</th>
				<th>M码库存</th>
				<th>L码库存</th>
				<th>XL码库存</th>
				<th>XXL码库存</th>
				<th>均码库存</th>
				<th>添加时间</th>
				<th>商品地址</th>
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
						<?php if($vo["scoreproductleft"] == 0): ?>下架
							<?php else: ?>
							上架<?php endif; ?>
					</td>
					<td><a href="/workspace/simpsons/trunk/server/Admin/Scoreproduct/imgLib/scoreproductid/<?php echo ($vo["scoreproductid"]); ?>" target="navTab" class="edit" rel="scorelistimglibs" title="编辑图库">编辑图库</a></td>
					<td><?php echo ($vo["sizexs"]); ?></td>
					<td><?php echo ($vo["sizes"]); ?></td>
					<td><?php echo ($vo["sizem"]); ?></td>
					<td><?php echo ($vo["sizel"]); ?></td>
					<td><?php echo ($vo["sizexl"]); ?></td>
					<td><?php echo ($vo["sizexxl"]); ?></td>
					<td><?php echo ($vo["sizeavg"]); ?></td>
					<td><?php echo (date("Y-m-d H:i:s", $vo["inserttime"])); ?></td>
					<td>
						<?php if($vo["scoreproductleft"] == 0): ?>无
							<?php else: ?>
							http://www.thesimpsonschina.com/Index/WScreen.html?target=scoreProductDetailPopup&amp;parameters=<?php echo ($vo["scoreproductid"]); endif; ?>
					</td>	
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