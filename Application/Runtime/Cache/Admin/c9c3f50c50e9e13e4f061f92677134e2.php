<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Fields/update/navTabId/listfields/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>配置项：</dt>
				<dd>
					<?php if($vo["field"] == 'title'): ?>站点标题
						<?php elseif($vo["field"] == 'copyright'): ?>站点版权
						<?php elseif($vo["field"] == 'ad'): ?>
						首页图片|描述
						<?php elseif($vo["field"] == 'announcement'): ?>
						站点公告
						<?php else: ?>
						站点描述<?php endif; ?>
				</dd>
			</dl>
			<br/><br/><br/>
			<dl style="height: auto;">
				<dt>配置值：</dt>
				<dd>
					<textarea  name="content" tools="simple" id="content" cols="50" rows="15" class="required" ><?php echo ($vo["content"]); ?></textarea>
				</dd>
			</dl>
			<br/><br/><br/>
			<dl style="height: auto;">
				<dt>附加信息：</dt>
				<dd>
					<textarea  name="additionalinfo" tools="simple" cols="50" rows="15" ><?php echo ($vo["additionalinfo"]); ?></textarea>
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