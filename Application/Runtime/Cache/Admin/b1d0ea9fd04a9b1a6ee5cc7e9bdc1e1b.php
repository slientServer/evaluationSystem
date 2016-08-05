<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/evaluationSystem/Admin/Rbacnode/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--ÿҳ��ʾ������-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>

<style>
	.strong{font-size: 14px;color: #0b99db;}
	.tabsContent a{color:#3361ad; border-radius: 4px;}
	.action {margin:10px 0;overflow: hidden;border:1px solid #dcdcdc;height: auto;}
	.action dt{display: block;height: 30px;background: #e6e6fa;line-height: 30px;}
	.action dd{padding: 10px;float: left;}
	
</style>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/evaluationSystem/Admin/Rbacnode/add/level/1" target="dialog" width="550" height="380" rel="user_msg" title="添加应用"><span>添加应用</span></a></li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>


	<div class="pageContent" layoutH="0">
		<div class="tabs" currentIndex="1" eventType="click">
			<div class="tabsHeader">
				<div class="tabsHeaderContent">
					<ul>
						<?php if(is_array($app)): $i = 0; $__LIST__ = $app;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$appName): $mod = ($i % 2 );++$i;?><li><a href="javascript:;"><span><?php echo ($appName["title"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="tabsContent" style="height:525px;">
				
				<?php if(is_array($app)): foreach($app as $key=>$app): ?><div>
						<!-- 应用 -->
						<p>	

						<?php if($app.name): ?><strong class="strong"><?php echo ($app["title"]); ?></strong> [ 
							<a class="add" href="/evaluationSystem/Admin/Rbacnode/add/pid/<?php echo ($app["id"]); ?>/level/2" target="dialog" width="550" height="380" rel="user_msg">添加控制器</a> ] [ 
							<a class="add" href="/evaluationSystem/Admin/Rbacnode/edit/id/<?php echo ($app["id"]); ?>" target="dialog" width="550" height="380" rel="user_msg">修改</a> ] [ 
							<a href="/evaluationSystem/Admin/Rbacnode/delete/id/<?php echo ($app["id"]); ?>/navTabId/listnodes" class="delete" target="ajaxTodo" title="确定要删除吗?">删除</a> ]
						<?php else: ?>
							<strong class="strong">暂无可分配内容</strong> <br/><br/>
							<a class="add" href="/evaluationSystem/Admin/Rbacnode/edit/id/<?php echo ($app["id"]); ?>" target="dialog" width="550" height="380" rel="user_msg">修改应用</a><br/><br/>
							<a href="/evaluationSystem/Admin/Rbacnode/delete/id/<?php echo ($app["id"]); ?>/navTabId/listnodes" class="delete" target="ajaxTodo" title="确定要删除吗?">删除该应用</a><?php endif; ?>
						</p><br>
						<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$child): ?><!-- 控制器 -->
							<dl class="action">
								<dt>
									<strong class="strong"><?php echo ($child["title"]); ?></strong> [
									<a class="add" href="/evaluationSystem/Admin/Rbacnode/add/pid/<?php echo ($child["id"]); ?>/level/3" target="dialog" width="550" height="380" rel="user_msg">添加方法</a> ] [ 
									<a class="add" href="/evaluationSystem/Admin/Rbacnode/edit/id/<?php echo ($child["id"]); ?>" target="dialog" width="550" height="380" rel="user_msg">修改</a> ] [ 
									<a href="/evaluationSystem/Admin/Rbacnode/delete/id/<?php echo ($child["id"]); ?>/navTabId/listnodes" class="delete" target="ajaxTodo" title="确定要删除吗?">删除</a> ]
								</dt>
							<?php if(is_array($child["child"])): foreach($child["child"] as $key=>$v): ?><!-- 动作方法 -->
								<dd>
									<span><?php echo ($v["title"]); ?></span> [
									<a class="add" href="/evaluationSystem/Admin/Rbacnode/edit/id/<?php echo ($v["id"]); ?>" target="dialog" width="550" height="380" rel="user_msg">修改</a> ] [ 
									<a href="/evaluationSystem/Admin/Rbacnode/delete/id/<?php echo ($v["id"]); ?>/navTabId/listnodes" class="delete" target="ajaxTodo" title="确定要删除吗?">删除</a> ]
								<dd><?php endforeach; endif; ?>
							</dl><?php endforeach; endif; ?>
					</div><?php endforeach; endif; ?>
				
			</div>
			<div class="tabsFooter">
				
			</div>
		</div>	
	</div>

</div>