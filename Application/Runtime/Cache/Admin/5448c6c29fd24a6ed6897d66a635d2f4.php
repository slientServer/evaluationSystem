<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Performanceform/insertQuestion/navTabId/performanceform/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($id); ?>"/>
		<div class="pageFormContent" width="100%" layoutH="60">
			<div>添加问题组：</div><br/>
			<div>
				<?php if(is_array($questionarr)): foreach($questionarr as $key=>$vo): ?><label style="width: auto;"><input name="questionArr[]" type="checkbox" value="<?php echo ($vo["id"]); ?>" /><?php echo ($vo["questiontext"]); ?>[<?php echo ($vo["id"]); ?>]</label><?php endforeach; endif; ?>
			</div>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>