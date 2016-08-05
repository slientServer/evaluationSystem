<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Product/insertImgLib/navTabId/listimglibs/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<input  type="hidden" name="productid" value="<?php echo ($productid); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>商品图片：</dt>
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