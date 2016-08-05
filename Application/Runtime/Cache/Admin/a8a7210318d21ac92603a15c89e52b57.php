<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Product/update/navTabId/listproducts/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="productid" value="<?php echo ($vo["productid"]); ?>"/>
		<input type="hidden" name="productpicold" value="<?php echo ($vo["productpic"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>商品名字：</dt>
				<dd><input type="input"  style="width:100%" name="productname" value="<?php echo ($vo["productname"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>商品价格：</dt>
				<dd><input style="width:100%" type="number" name="productprice" value=<?php echo ($vo["productprice"]); ?> /></dd>
			</dl>		
			<dl>
				<dt>商品概要描述：</dt>
				<dd><input style="width:100%" type="input" name="productshortdescription" value=<?php echo ($vo["productshortdescription"]); ?> /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>商品描述：</dt>
				<dd><textarea style="width:100%" rows="5" name="productdescription"><?php echo ($vo["productdescription"]); ?></textarea> </dd>
			</dl>
			<dl style="height:auto;">
				<dt>商品状态：</dt>
				<dd>
					<input type="radio" name="productleft" value="1" <?php if($vo["productleft"] == 1 ): ?>checked<?php endif; ?>/>上架
					<input type="radio" name="productleft" value="0" <?php if($vo["productleft"] == 0 ): ?>checked<?php endif; ?>/>下架
				</dd>
			</dl>
			<dl style="height:auto;">
				<dt>当前图片：</dt>
				<dd>
					<img style="width:230px;height:160px;" src="/workspace/simpsons/trunk/server/<?php echo ($vo["productpic"]); ?>">
				</dd>
			</dl>
			<dl>
				<dt>修改图片：</dt>
				<dd>
					<input type="file" name="productpic"  style="width:100%;" >
					</input>
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