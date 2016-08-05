<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Coupontype/dispatchCouponExecution/navTabId/listcoupons/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>优惠券名字:</dt>
				<dd>	
					<select name="couponkey" style="width:100%;">
						<?php if(is_array($couponTypeList)): foreach($couponTypeList as $key=>$vo): ?><option value="<?php echo ($vo["couponkey"]); ?>"><?php echo ($vo["couponkey"]); ?></option><?php endforeach; endif; ?>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>匹配条件:</dt>
				<dd>	
					<input type="radio" name="condition" value="all" checked/>所有人
					<input type="radio" name="condition" value="enroll" />注册时间
					<input type="radio" name="condition" value="login" />登录时间

				</dd>
			</dl>
			<dl>
				<dt>备注:</dt>
				<dd>	
					<input type="input" style="width:100%;" name="couponcomment"/>
				</dd>
			</dl>
			<dl>
				<dt>时间段:</dt>
				<dd>	
					<input type="input" class="date textInput valid" style="width:40%; margin-right: 20px;" name="starttime"/>
					<input type="input" class="date textInput valid" style="width:40%" name="endtime"/>
				</dd>
			</dl>
			<dl style= 'text-align: center;'>
				<span style='color: red;'>时间段对"所有人"无效</span>
			</dl>
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">发放</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>