<?php if (!defined('THINK_PATH')) exit();?><style>
	.strong{font-size: 14px;color: #0b99db;}
	.tabsContent a{color:#3361ad; border-radius: 4px;}
	.action {margin:10px 0;overflow: hidden;border:1px solid #dcdcdc;height: auto;}
	.action dt{display: block;height: 30px;background: #e6e6fa;line-height: 30px;}
	.action dd{padding: 10px;float: left;}
	
</style>
<script>
	$(function(){
		$('input[level=1]').click(function(){
			var inputs=$(this).parents('.app').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
		});
		$('input[level=2]').click(function(){
			var inputs=$(this).parents('dl').find('input');
			$(this).attr('checked')?inputs.attr('checked','checked'):inputs.removeAttr('checked');
			$(this).parents('input').attr('checked');
		});
		$('input[level=3]').click(function(){
			var level2=$(this).parent().parent().children().children('input[level=2]');
			var level1=$(this).parent().parent().parent().children().children('input[level=1]');
			$(this).attr('checked')?level2.attr('checked','checked'):false;
			$(this).attr('checked')?level1.attr('checked','checked'):false;
			
		});
		
	})
</script>
<div class="pageContent">
	<form method="post" action="/evaluationSystem/Admin/Rbacaccess/update/navTabId/rbacaccess/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="role_id" value="<?php echo ($rid); ?>"/>
		<div class="tabs" currentIndex="1" eventType="click">
			<div class="tabsHeader">
				<div class="tabsHeaderContent">
					<ul>
						<?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$appName): $mod = ($i % 2 );++$i;?><li><a href="javascript:;"><span><?php echo ($appName["title"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="tabsContent"  layoutH="70">
				
				<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class="app">
						<!-- 应用 -->
						<p>
							<strong class="strong"><?php echo ($app["title"]); ?></strong>
							<input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_1" level="1" <?php if($app['access']): ?>checked='checked'<?php endif; ?> />
						</p><br>
						<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$child): ?><!-- 控制器 -->
							<dl class="action">
								<dt>
									<strong class="strong"><?php echo ($child["title"]); ?></strong>
									<input type="checkbox" name="access[]" value="<?php echo ($child["id"]); ?>_2" level="2" <?php if($child['access']): ?>checked='checked'<?php endif; ?> > 
								</dt>
							<?php if(is_array($child["child"])): foreach($child["child"] as $key=>$v): ?><!-- 动作方法 -->
								<dd>
									<span><?php echo ($v["title"]); ?></span> 
									<input type="checkbox" name="access[]" value="<?php echo ($v["id"]); ?>_3" level="3" <?php if($v['access']): ?>checked='checked'<?php endif; ?> >
								</dd><?php endforeach; endif; ?>
							</dl><?php endforeach; endif; ?>
					</div><?php endforeach; endif; ?>
				
			</div>
			
		</div>	 
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>