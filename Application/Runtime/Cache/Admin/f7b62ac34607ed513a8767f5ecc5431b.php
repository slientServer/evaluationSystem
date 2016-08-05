<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/insert/navTabId/listscoreproducts/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>商品名字：</dt>
				<dd><input type="input"  style="width:100%" name="scoreproductname" /></dd>
			</dl>
			<dl>
				<dt>兑换积分数：</dt>
				<dd><input style="width:100%" type="number" name="scorecondition" /></dd>
			</dl>						
<!-- 			<dl>
				<dt>商品库存：</dt>
				<dd><input style="width:100%" type="number" name="scoreproductleft" /></dd>
			</dl> -->
			<dl>
				<dt>商品概要描述：</dt>
				<dd><input style="width:100%" type="input" name="scoreproductshortdescription" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>商品描述：</dt>
				<dd><textarea style="width:100%" rows="5" name="scoreproductdescription"></textarea> </dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XS码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexs" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>S码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizes" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>M码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizem" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>L码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizel" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XL码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexl" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XXl码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexxl" /></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>均码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizeavg" /></dd>
			</dl>
			<dl style="height:auto;">
				<dt>商品状态：</dt>
				<dd>
					<input type="radio" name="scoreproductleft" value="1" checked/>上架
					<input type="radio" name="scoreproductleft" value="0" />下架
				</dd>
			</dl>
			<dl>
				<dt>商品图片：</dt>
				<dd>
					<input type="file" name="scoreproductpic"  style="width:100%;" >
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