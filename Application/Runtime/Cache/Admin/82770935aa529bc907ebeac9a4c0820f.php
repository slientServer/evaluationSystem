<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Score/insert/navTabId/listscoretype/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>类型名字(唯一)：</dt>
				<dd><input type="input"  style="width:100%" name="typekey"/></dd>
			</dl>
<!-- 			<dl>
				<dt>类型名字：</dt>
				<dd><input type="input"  style="width:100%" name="typename"/></dd>
			</dl> -->
			<dl>
				<dt>积分下限：</dt>
				<dd><input type="number"  style="width:100%" name="typescorelow"/></dd>
			</dl>
			<dl>
				<dt>积分上限：</dt>
				<dd><input type="number"  style="width:100%" name="typescorehigh"/></dd>
			</dl>
<!-- 			<dl>
				<dt>是否系统预设</dt>
				<dd><input type="number"  style="width:100%" name="issystem"/></dd>
			</dl> -->
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>