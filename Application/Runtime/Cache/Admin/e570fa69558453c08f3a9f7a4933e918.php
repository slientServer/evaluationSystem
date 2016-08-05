<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Score/update/navTabId/listscoretype/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="typeid" value="<?php echo ($vo["typeid"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>类型名字(唯一)：</dt>
				<dd><input type="input"  style="width:100%" name="typekey" value="<?php echo ($vo["typekey"]); ?>" <?php if($vo["issystem"] == 1): ?>disabled<?php endif; ?> /></dd>
			</dl>
<!-- 			<dl>
				<dt>类型名字</dt>
				<dd><input style="width:100%" type="input" name="typename" value=<?php echo ($vo["typename"]); ?> /></dd>
			</dl> -->
			<dl>
				<dt>积分下限</dt>
				<dd><input style="width:100%" type="number" name="typescorelow" value=<?php echo ($vo["typescorelow"]); ?> /></dd>
			</dl>
			<dl>
				<dt>积分上限</dt>
				<dd><input style="width:100%" type="number" name="typescorehigh" value=<?php echo ($vo["typescorehigh"]); ?> /></dd>
			</dl>
	<!-- 		<?php if($vo["issystem"] == 1): ?><dl style="text-align: center;"><span style='color: red;'>该类型为系统预设,key不可修改<span></dl><?php endif; ?> -->

		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>