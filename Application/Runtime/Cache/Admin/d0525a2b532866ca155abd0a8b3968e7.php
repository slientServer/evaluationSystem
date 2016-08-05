<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Order/update/navTabId/listorders/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>商品编号：</dt>
				<dd><input disabled type="input"  style="width:100%" name="productid" value="<?php echo ($vo["productid"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>商品名字：</dt>
				<dd><input disabled type="input"  style="width:100%" name="productname" value="<?php echo ($vo["productname"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>商品价格：</dt>
				<dd><input style="width:100%" disabled type="number" name="productprice" value=<?php echo ($vo["productprice"]); ?> /></dd>
			</dl>			
			<dl>
				<dt>商品库存：</dt>
				<dd><input style="width:100%" disabled type="number" name="productleft" value=<?php echo ($vo["productleft"]); ?> /></dd>
			</dl>
			<dl style="height:auto;">
				<dt>商品图片：</dt>
				<dd>
					<img name="productpic"  style="width:200px;height:300px;" src="/workspace/simpsons/trunk/server/<?php echo ($vo["productpic"]); ?>">
				</dd>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">关闭</button></div></div></li>
			</ul>
		</div>
	</form>
</div>