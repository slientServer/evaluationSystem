<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacnode/insert/navTabId/listnodes/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<input type="hidden" name='pid' value="<?php echo ($_REQUEST['pid']); ?>">
			<input type="hidden" name='level' value="<?php echo ($_REQUEST['level']); ?>">
			<dl>
				<dt><?php if($_REQUEST['level']== 1): ?>应用<?php elseif($_REQUEST['level']== 2): ?>控制器<?php else: ?>方法<?php endif; ?>名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name"/></dd>
			</dl>
			<dl>
				<dt>显示名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
			<dl>
				<dt>缩略图名字：</dt>
				<dd><input type="text"  style="width:100%" name="imgsrc"/></dd>
			</dl>
			<dl>
				<dt>是否开启:</dt>
				<dd>
					开启&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="1" checked />&nbsp;&nbsp;&nbsp;
					关闭&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="0"  />
				</dd>
			</dl>
			<dl>
				<dt>备　　注:</dt>
				<dd>
					<textarea name="remark" style="width: 220px; height: 50px; margin: 0px;"></textarea>
				</dd>
			</dl>
			
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>