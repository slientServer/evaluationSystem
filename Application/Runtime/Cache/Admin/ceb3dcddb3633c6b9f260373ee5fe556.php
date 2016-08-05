<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/updateImgLib/navTabId/scorelistimglibs/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<input  type="hidden" name="scoreproductimglibid" value="<?php echo ($vo["scoreproductimglibid"]); ?>"/>
		<input  type="hidden" name="scoreproductid" value="<?php echo ($vo["scoreproductid"]); ?>"/>
		<input  type="hidden" name="imgsrcold" value="<?php echo ($vo["imgsrc"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl style="height: auto;">
				<dt>当前图片：</dt>
				<dd>
					<img src="/workspace/simpsons/trunk/server/<?php echo ($vo["imgsrc"]); ?>"  style="width:230px;height:160px;"></img>
				</dd>
			</dl>
			<dl>
				<dt>修改图片：</dt>
				<dd>
					<input type="file" name="imgsrc"  style="width:100%;"></input>
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