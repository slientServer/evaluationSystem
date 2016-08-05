<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Order/update/navTabId/listorders/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" style="width:100%" name="id" value="<?php echo ($vo["id"]); ?>" />
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>收货人姓名：</dt>
				<dd><input style="width:100%" type="input" name="recipientname" value="<?php echo ($vo["recipientname"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>收货人电话：</dt>
				<dd><input style="width:100%" type="input" name="recipientphone" value="<?php echo ($vo["recipientphone"]); ?>" /></dd>
			</dl>	
			<dl>
				<dt>地址：</dt>
				<dd><input style="width:100%" type="input" name="mainaddress" value="<?php echo ($vo["mainaddress"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>收货人地址：</dt>
				<dd><input style="width:100%" type="input" name="recipientaddress" value="<?php echo ($vo["recipientaddress"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>商品价格：</dt>
				<dd><input style="width:100%" type="input" name="productprice" value="<?php echo ($vo["productprice"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>订单状态：</dt>
				<dd>
					<select name="orderstate" style="width:100%;">
							<option value="1" <?php if($vo["orderstate"] == 1): ?>selected<?php endif; ?>
							 >未支付</option>
							 <option value="2" <?php if($vo["orderstate"] == 2): ?>selected<?php endif; ?>
							 >支付完成</option>
							 <option value="3" <?php if($vo["orderstate"] == 3): ?>selected<?php endif; ?>
							 >已发货</option>
							 <option value="0" <?php if($vo["orderstate"] == 0): ?>selected<?php endif; ?>
							 >支付失败</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>快递单号：</dt>
				<dd><input style="width:100%" type="input" name="orderexpress" value="<?php echo ($vo["orderexpress"]); ?>" /></dd>
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