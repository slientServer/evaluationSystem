<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Scoreproduct/update/navTabId/listscoreproducts/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="scoreproductid" value="<?php echo ($vo["scoreproductid"]); ?>"/>
		<input type="hidden" name="scoreproductpicold" value="<?php echo ($vo["scoreproductpic"]); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>商品ID：</dt>
				<dd><?php echo ($vo["scoreproductid"]); ?></dd>
			</dl>
			<dl>
				<dt>商品名字：</dt>
				<dd><input type="input"  style="width:100%" name="scoreproductname" value="<?php echo ($vo["scoreproductname"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>兑换积分数：</dt>
				<dd><input style="width:100%" type="number" name="scorecondition" value=<?php echo ($vo["scorecondition"]); ?> /></dd>
			</dl>			
<!-- 			<dl>
				<dt>商品库存：</dt>
				<dd><input style="width:100%" type="number" name="scoreproductleft" value=<?php echo ($vo["scoreproductleft"]); ?> /></dd>
			</dl> -->
<!-- 			<dl>
				<dt>商品概要描述：</dt>
				<dd><input style="width:100%" type="input" name="scoreproductshortdescription" value=<?php echo ($vo["scoreproductshortdescription"]); ?> /></dd>
			</dl> -->
			<dl  style="height: auto;">
				<dt>商品描述：</dt>
				<dd><textarea style="width:100%" rows="5" name="scoreproductdescription"><?php echo ($vo["scoreproductdescription"]); ?></textarea> </dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XS码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexs" value="<?php echo ($vo["sizexs"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>S码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizes" value="<?php echo ($vo["sizes"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>M码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizem" value="<?php echo ($vo["sizem"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>L码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizel" value="<?php echo ($vo["sizel"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XL码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexl" value="<?php echo ($vo["sizexl"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>XXl码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizexxl" value="<?php echo ($vo["sizexxl"]); ?>"/></dd>
			</dl>
			<dl  style="height: auto;">
				<dt>均码库存：</dt>
				<dd><input style="width:100%" type="number" name="sizeavg" value="<?php echo ($vo["sizeavg"]); ?>"/></dd>
			</dl>
			<dl style="height:auto;">
				<dt>商品状态：</dt>
				<dd>
					<input type="radio" name="scoreproductleft" value="1" <?php if($vo["scoreproductleft"] == 1 ): ?>checked<?php endif; ?>/>上架
					<input type="radio" name="scoreproductleft" value="0" <?php if($vo["scoreproductleft"] == 0 ): ?>checked<?php endif; ?>/>下架
				</dd>
			</dl>
			<dl  style="height: auto;">
				<dt>商品地址：</dt>
				<dd>
					<?php if($vo["scoreproductleft"] == 0): ?>无
					<?php else: ?>
						http://www.thesimpsonschina.com/Index/WScreen.html?target=scoreProductDetailPopup&amp;parameters=<?php echo ($vo["scoreproductid"]); endif; ?>
				</dd>
			</dl>
			<dl style="height:auto;">
				<dt>当前图片：</dt>
				<dd>
					<img style="width:230px;height:160px;" src="/workspace/simpsons/trunk/server/<?php echo ($vo["scoreproductpic"]); ?>">
				</dd>
			</dl>
			<dl>
				<dt>修改图片：</dt>
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