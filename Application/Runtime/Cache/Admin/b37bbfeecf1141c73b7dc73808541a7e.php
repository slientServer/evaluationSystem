<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Performance/updatmember/navTabId/performance/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<input type="hidden" name="groupid" value="<?php echo ($groupid); ?>"/>
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><label><input type="checkbox" name="members[]" value="<?php echo ($vo["id"]); ?>" <?php if($vo["isselected"] == 1): ?>checked<?php endif; ?>/><?php echo ($vo["showname"]); ?>(<?php echo ($vo["username"]); ?>)</label><?php endforeach; endif; ?>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>