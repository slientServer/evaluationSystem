<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/workspace/simpsons/trunk/server/Admin/Lotterytype/insert/navTabId/listlotterytype/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>抽奖类型名字：</dt>
				<dd>
					<select style="width:100%" name="lotterytype" onchange="setKeyList(this.value)">
						<option value="redpacket">红包</option>
						<option value="coupontype" selected>优惠券</option>
						<option value="scoretype">积分</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>类型名字[奖励值]：</dt>
				<dd>
					<select style="width:100%;display:none;" name="" id="redpacket">
						<?php if(is_array($redpacketkey)): foreach($redpacketkey as $key=>$keylist): ?><option value="<?php echo ($keylist["redpacketkey"]); ?>"><?php echo ($keylist["redpacketkey"]); ?>[<?php echo ($keylist["redpacketvalue"]); ?>]</option><?php endforeach; endif; ?>
					</select>
					<select style="width:100%" name="lotterytypekey" id="coupontype">
						<?php if(is_array($couponkey)): foreach($couponkey as $key=>$keylist): ?><option value="<?php echo ($keylist["couponkey"]); ?>"><?php echo ($keylist["couponkey"]); ?>[<?php echo ($keylist["couponvalue"]); ?>]</option><?php endforeach; endif; ?>
					</select>
					<select style="width:100%;display:none;" name="" id="scoretype">
						<?php if(is_array($scorekey)): foreach($scorekey as $key=>$keylist): ?><option value="<?php echo ($keylist["typekey"]); ?>"><?php echo ($keylist["typekey"]); ?>[<?php echo ($keylist["typescorelow"]); ?>-<?php echo ($keylist["typescorehigh"]); ?>]</option><?php endforeach; endif; ?>
					</select>
				</dd>
			</dl>		
			<dl>
				<dt>中奖率：</dt>
				<dd><input type="number"  style="width:50%" name="lotteryratio" />%</dd>
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
<script type="text/javascript">
	function setKeyList(value){
		if(value == "redpacket"){
			$("#redpacket").css({"display":"inline"});
			$("#redpacket").attr({"name": "lotterytypekey"});
			$("#coupontype").css({"display":"none"});
			$("#coupontype").attr({"name": ""});
			$("#scoretype").css({"display":"none"});
			$("#scoretype").attr({"name": ""});
		}else if(value == "coupontype"){
			$("#redpacket").css({"display":"none"});
			$("#redpacket").attr({"name": ""});
			$("#coupontype").css({"display":"inline"});
			$("#coupontype").attr({"name": "lotterytypekey"});
			$("#scoretype").css({"display":"none"});
			$("#scoretype").attr({"name": ""});
		}else if(value == "scoretype"){
			$("#redpacket").css({"display":"none"});
			$("#redpacket").attr({"name": ""});
			$("#coupontype").css({"display":"none"});
			$("#coupontype").attr({"name": ""});
			$("#scoretype").css({"display":"inline"});
			$("#scoretype").attr({"name": "lotterytypekey"});
		}
	}
</script>