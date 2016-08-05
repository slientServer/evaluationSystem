<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Coupontype/insert/navTabId/listcoupons/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>优惠券名字(唯一)：</dt>
				<dd><input type="input"  style="width:100%" name="couponkey" /></dd>
			</dl>
			<dl>
				<dt>优惠券类型：</dt>
				<dd>
					<select style="width:100%;" name="coupontype" >
							<option value="cash">现金券</option>
							<option value="discount" selected>折扣券</option>
							<!-- <option value="coupon" selected>优惠券</option> CRM注释-->
					</select>
				</dd>
			</dl>
			<dl>
				<dt>优惠券额度：</dt>
				<dd><input type="number"  style="width:100%" name="couponvalue" /></dd>
			</dl>
<!-- 			<dl>
				 <dt>使用条件：</dt> CRM注释
				 <dd><input type="hidden" style="width:100%" name="couponcondition" /></dd> CRM注释
			</dl> CRM注释-->
			<dl>
				<dt>生效时间：</dt>
				<dd><input type="input" class="date textInput valid" style="width:100%" name="starttime" /></dd>
			</dl>
			<dl>
				<dt>失效时间：</dt>
				<dd><input type="input" class="date textInput valid" style="width:100%" name="endtime"/></dd>
			</dl>		
			<dl>
				<div style="text-align:center;"><span style="color:red;">现金券单位为“元”,折扣券请输入小数(如8折请输入0.8)</span></div>
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