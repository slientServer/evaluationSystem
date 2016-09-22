<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Performancequestion/update/navTabId/performancequestion/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
		<div class="pageFormContent" width="100%" layoutH="60">
			<dl>
				<dt>项目内容：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="questiontext" value="<?php echo ($vo["questiontext"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>项目级别：</dt>
				<dd>
					<select style="width:227px" name="questionlevel">
						<option value='0' <?php if($vo["questionlevel"] == 0): ?>selected<?php endif; ?> >组名</option>
						<option value='1' <?php if($vo["questionlevel"] == 1): ?>selected<?php endif; ?>>问题</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>百分比：</dt>
				<dd>
					<input type="number" value="<?php echo ($vo["questionpercentage"]); ?>" name="questionpercentage" style="width: 200px;">%
				</dd>
			</dl>
			<dl style="width:500px;">
				<dt>父项目：</dt>
				<dd style="width:227px">
					<select style="width:227px" name="questionparent">
						<option value=0 <?php if($vo["questionparent"] == 0): ?>selected<?php endif; ?>>无父项目</option>
						<?php if(is_array($parentList)): foreach($parentList as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php if($v["id"] == vo.questionparent): ?>selected<?php endif; ?>><?php echo ($v["questiontext"]); ?>(<?php echo ($v["id"]); ?>)</option><?php endforeach; endif; ?>
					</select>
					<!-- <span class="add-role">添加角色</span> -->
				</dd>
			</dl>
			<dl>
				<dt>项目类型：</dt>
				<dd>
					<select style="width:227px" name="questiontype">
						<option value='number' <?php if($vo["questiontype"] == number): ?>selected<?php endif; ?>>分数</option>
						<option value='nan' <?php if($vo["questiontype"] == nan): ?>selected<?php endif; ?>>其它</option>
					</select>
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