<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/evaluationSystem/Admin/Fields/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--姣忛〉鏄剧ず澶氬皯鏉�-->
	</form>
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="edit" href="/evaluationSystem/Admin/Fields/edit/id/{item_id}"  width="600" height="400" target="dialog"><span>淇敼閫夋嫨閰嶇疆</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>鍒锋柊</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="瀹炶瀵煎嚭杩欎簺璁板綍鍚�?"><span>瀵煎嚭EXCEL</span></a></li>-->
		</ul>
	</div>
	<table class="table" width="100%" layoutH="88">
		<thead>
			<tr>
				<th width="30">閰嶇疆椤�</th>
				<th width="40">閰嶇疆鍊�</th>
				<th width="40">闄勫姞淇℃伅</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr target="item_id" rel="<?php echo ($vo["id"]); ?>">
					<td>
					<?php if($vo["field"] == 'title'): ?>绔欑偣鏍囬
						<?php elseif($vo["field"] == 'copyright'): ?>绔欑偣鐗堟潈
						<?php elseif($vo["field"] == 'ad'): ?>
						棣栭〉鍥剧墖
						<?php elseif($vo["field"] == 'announcement'): ?>
						绔欑偣鍏憡
						<?php else: ?>
						绔欑偣鎻忚堪<?php endif; ?>
					</td>
					<td name="content"><?php echo ($vo["content"]); ?></td>
					<td name="additionalinfo"><?php echo ($vo["additionalinfo"]); ?></td>
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