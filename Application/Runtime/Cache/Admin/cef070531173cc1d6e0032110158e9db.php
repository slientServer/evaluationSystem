<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacnode/update/navTabId/listnodes/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>应用名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="name" value="<?php echo ($vo["name"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>显示名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"  value="<?php echo ($vo["title"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>缩略图名字：</dt>
				<dd><input type="text" style="width:100%" name="imgsrc"  value="<?php echo ($vo["imgsrc"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>是否开启:</dt>
				<dd>
					开启&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="1" <?php if($vo["status"] == 1): ?>checked<?php endif; ?> />&nbsp;&nbsp;&nbsp;
					关闭&nbsp;&nbsp;<input type="radio" class="required"  name="status" value="0"  <?php if($vo["status"] == 0): ?>checked<?php endif; ?> />
				</dd>
			</dl>
			<dl>
				<dt>备　　注:</dt>
				<dd>
					<textarea name="remark" style="width: 220px; height: 50px; margin: 0px;"><?php echo ($vo["remark"]); ?></textarea>
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