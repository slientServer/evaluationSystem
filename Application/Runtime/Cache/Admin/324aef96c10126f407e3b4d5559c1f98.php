<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Lotteryaudit/update/navTabId/listorders/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>用户ID：</dt>
				<dd><input disabled type="text"  style="width:100%" name="userid" value="<?php echo ($vo["userid"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>电话号码：</dt>
				<dd><input disabled type="number"  style="width:100%" name="phonenumber" value="<?php echo ($vo["phonenumber"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>生日：</dt>
				<dd><input disabled type="input" class="date textInput valid" style="width:100%" name="birthday" value="<?php echo ($vo["birthday"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>地址：</dt>
				<dd><input disabled type="input" style="width:100%" name="address" value="<?php echo ($vo["address"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>积分：</dt>
				<dd><input disabled type="number" style="width:100%" name="score" value="<?php echo ($vo["score"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>openid：</dt>
				<dd><input disabled type="input" style="width:100%" name="openid" value="<?php echo ($vo["openid"]); ?>" /></dd>
			</dl>
			<dl>
				<dt>微信昵称：</dt>
				<dd><input disabled type="input" style="width:100%" name="nickname" value="<?php echo ($vo["nickname"]); ?>" ></dd>
			</dl>
			<dl>
				<dt>状态：</dt>
				<dd>
					<input disabled type="radio" name="islock" value="0" <?php if($vo["islock"] == 0 ): ?>checked<?php endif; ?>/>正常
					<input disabled type="radio" name="islock" value="1" <?php if($vo["islock"] == 1 ): ?>checked<?php endif; ?>/>锁定
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