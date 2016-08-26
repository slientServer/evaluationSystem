<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>亨时达内部员工综合评价系统后台管理面板</title>

<link href="/evaluationSystem/Application/Admin/View/default/Public/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/evaluationSystem/Application/Admin/View/default/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/evaluationSystem/Application/Admin/View/default/Public/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="/evaluationSystem/Application/Admin/View/default/Public/dwz/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
<!--[if IE]>
<link href="/evaluationSystem/Application/Admin/View/default/Public/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
<![endif]-->

<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/speedup.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>

<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/xheditor/xheditor-1.1.14-zh-cn.min.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/uploadify/scripts/swfobject.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/uploadify/scripts/jquery.uploadify.v2.1.0.js" type="text/javascript"></script>


<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/dwz.min.js" type="text/javascript"></script>
<script src="/evaluationSystem/Application/Admin/View/default/Public/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	DWZ.init("/evaluationSystem/Application/Admin/View/default/Public/dwz/dwz.frag.xml", {
		//loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
		//loginUrl:"login.html",	// 跳到登录页面
		statusCode:{ ok:200, error:300, timeout:301}, //【可选】
		pageInfo:{ pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({ themeBase:"/evaluationSystem/Application/Admin/View/default/Public/dwz/themes"}); // themeBase 相对于index页面的主题base路径
		}
	});
});



</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<span style='color:white; font-size: 38px;'>Simpsons</span>
				<ul class="nav">
					<li><a href="#" target="_blank">欢迎您：<?php echo (session('adminuser')); ?></a></li>
					<li><a href="/evaluationSystem/admin/Login/logout">退出</a></li>
				</ul>

				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>
				<div class="accordion" fillSpace="sidebar">
					<?php if($permission["username"] == C("RBAC_SUPERADMIN")): ?><!--评价小组管理-->
						<div class="accordionHeader">
							<h2><span>Folder</span>评价小组管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Assessgroup/index');?>" target="navTab" rel="assessgroup" title="评价小组管理" >评价小组管理</a></li>
							</ul>
						</div>

						<!--绩效考核管理-->
						<div class="accordionHeader">
							<h2><span>Folder</span>绩效考核管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Performance/index');?>" target="navTab" rel="performance" title="考核小组管理" >考核小组配置</a></li>
								<li><a href="<?php echo U('Performanceform/index');?>" target="navTab" rel="performanceform" title="考核表单管理" >考核表单配置</a></li>
								<li><a href="<?php echo U('Performancequestion/index');?>" target="navTab" rel="performancequestion" title="考核项目配置" >考核项目配置</a></li>
							</ul>
						</div>

						<div class="accordionHeader">
							<h2><span>Folder</span>系统管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Rbacuser/index');?>" target="navTab" rel="listusers" title="用户管理" >用户管理</a></li>
								<li><a href="<?php echo U('Rbacrole/index');?>" target="navTab" rel="listroles" title="角色配置" >角色配置</a></li>
								<li><a href="<?php echo U('Rbacnode/index');?>" target="navTab" rel="listnodes" title="应用配置" >节点配置</a></li>
								<li><a href="<?php echo U('Dept/index');?>" target="navTab" rel="listdepts" title="部门管理" >部门管理</a></li>
							<!-- 	<li><a href="<?php echo U('Memberuservalid/index');?>" target="navTab" rel="listValidUserList" title="已注册会员信息" >已注册用户信息</a></li> -->
							<!-- 	<li><a href="<?php echo U('Memberuser/add');?>" target="dialog" width="600" height="500">添加会员信息</a></li> -->
							</ul>
						</div>
						<!-- 福利抽奖管理 -->
		<!-- 				<div class="accordionHeader">
							<h2><span>Folder</span>福利抽奖管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Score/index');?>" target="navTab" rel="listscoretype" title="积分类型管理" >积分类型管理</a></li>
								<li><a href="<?php echo U('Coupontype/index');?>" target="navTab" rel="listcoupons" title="优惠券类型管理" >优惠券类型管理</a></li>
								<li><a href="<?php echo U('Redpacket/index');?>" target="navTab" rel="listredpacket" title="红包管理" >红包类型管理</a></li>
								<li><a href="<?php echo U('Lotterytype/index');?>" target="navTab" rel="listlotterytype" title="抽奖类型管理" >抽奖类型管理</a></li>
								<li><a href="<?php echo U('Lotteryaudit/index');?>" target="navTab" rel="listlotteryaudit" title="抽奖历史管理" >抽奖历史管理</a></li>
							</ul>
						</div> -->
	                    <!--销售商品管理 -->
	 <!--                    <div class="accordionHeader">
	                        <h2><span>Folder</span>销售产品管理</h2>
	                    </div>
	                    <div class="accordionContent">
	                        <ul class="tree treeFolder">
	                            <li><a href="<?php echo U('Product/index');?>" target="navTab" rel="listproducts" title="产品管理" >产品管理</a></li>
	                            <li><a href="<?php echo U('Scoreproduct/index');?>" target="navTab" rel="listscoreproducts" title="兑换商品管理" >兑换商品管理</a></li>
	                        </ul>
	                    </div> -->
						<!-- 新闻管理 -->
	<!-- 					<div class="accordionHeader">
							<h2><span>Folder</span>新闻管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Category/index');?>" target="navTab" rel="listcate" title="文章分类列表" >文章分类列表</a></li>
								<li><a href="<?php echo U('News/index');?>" target="navTab" rel="listnews" title="新闻列表" >新闻列表</a></li>
								<li><a href="<?php echo U('Articlem/rubbish');?>" target="navTab" rel="listarticle1" title="文章回收站" >文章回收站</a></li>
							</ul>
						</div> -->

						<!--订单管理-->
			<!-- 			<div class="accordionHeader">
							<h2><span>Folder</span>订单管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Order/index');?>" target="navTab" rel="listorders" title="订单列表" >订单列表</a></li>
								<li><a href="<?php echo U('ExchangeOrder/index');?>" target="navTab" rel="listexchangeorders" title="兑换订单列表" >兑换订单列表</a></li>
							</ul>
						</div> -->
						<!--优惠券核销-->
				<!-- 		<div class="accordionHeader">
							<h2><span>Folder</span>优惠券核销</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Couponverify/index');?>" target="navTab" rel="listcouponverifys" title="优惠券核销" >优惠券核销</a></li>
							</ul>
						</div> -->
						<!--管理员配置-->
		<!-- 				<?php if(session(C('ADMIN_AUTH_KEY'))): ?><div class="accordionHeader">
								<h2><span>Folder</span>管理员配置</h2>
							</div>
							<div class="accordionContent">
								<ul class="tree treeFolder">
									<li><a href="<?php echo U('Rbacuser/index');?>" target="navTab" rel="listadmin" title="管理员列表" >管理员列表</a></li>
								</ul>
							</div><?php endif; ?> -->
						<!-- <div class="accordionHeader"> -->
						<!-- 	<h2><span>Folder</span>插件管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Plugin/index');?>" target="navTab" rel="listplugin" title="插件列表" >插件列表</a></li>
							</ul>
						</div> -->

						<!--系统管理-->
						<div class="accordionHeader">
							<h2><span>Folder</span>系统维护</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Fields/index');?>" target="navTab" rel="listfields" title="站点配置" >站点配置</a></li>
							<!-- 	<li><a href="<?php echo U('Bak/index');?>" target="navTab" rel="listdb" title="数据库下载" >数据库下载</a></li> -->
								<li><a href="<?php echo U('Database/index',array('type'=>'export'));?>" target="navTab" rel="listdb" title="数据库备份" >数据库备份</a></li>
								<li><a href="<?php echo U('Database/index',array('type'=>'import'));?>" target="navTab" rel="listdb" title="数据库还原" >数据库还原</a></li>
								<!-- <li><a href="<?php echo U('Fields/index');?>" target="navTab" rel="listfields" title="站点参数配置" >站点参数配置</a></li>
								<li><a href="<?php echo U('System/index');?>" target="navTab" rel="listsystem" title="系统配置" >系统配置</a></li>
								<li><a href="<?php echo U('System/updateSystemCache');?>" target="dialog" rel="listsystem" title="更新系统缓存" >更新系统缓存</a></li>
								<li><a href="<?php echo U('System/updateTplCache');?>" target="dialog" rel="listsystem" title="更新模版缓存" >更新模版缓存</a></li> -->
							</ul>
						</div>
				<?php else: ?>
			<!-- 		<?php if($permission["perm_member"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>用户管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Memberuser/index');?>" target="navTab" rel="listusers" title="会员信息" >浏览用户信息</a></li>
								<li><a href="<?php echo U('Memberuser/add');?>" target="dialog" width="600" height="500">添加会员信息</a></li>
							</ul>
						</div><?php endif; ?> -->
						<!-- 福利抽奖管理 -->
					<!-- <?php if($permission["perm_lottery"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>福利抽奖管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Score/index');?>" target="navTab" rel="listscoretype" title="积分类型管理" >积分类型管理</a></li>
								<li><a href="<?php echo U('Coupontype/index');?>" target="navTab" rel="listcoupons" title="优惠券类型管理" >优惠券类型管理</a></li>
								<li><a href="<?php echo U('Redpacket/index');?>" target="navTab" rel="listredpacket" title="红包管理" >红包类型管理</a></li>
								<li><a href="<?php echo U('Lotterytype/index');?>" target="navTab" rel="listlotterytype" title="抽奖类型管理" >抽奖类型管理</a></li>
								<li><a href="<?php echo U('Lotteryaudit/index');?>" target="navTab" rel="listlotteryaudit" title="抽奖历史管理" >抽奖历史管理</a></li>
							</ul>
						</div><?php endif; ?> -->
	                    <!--销售商品管理 -->
	               <!--  <?php if($permission["perm_product"] == 1): ?><div class="accordionHeader">
	                        <h2><span>Folder</span>销售产品管理</h2>
	                    </div>
	                    <div class="accordionContent">
	                        <ul class="tree treeFolder">
	                            <li><a href="<?php echo U('Product/index');?>" target="navTab" rel="listproducts" title="产品管理" >产品管理</a></li>
	                            <li><a href="<?php echo U('Scoreproduct/index');?>" target="navTab" rel="listscoreproducts" title="兑换商品管理" >兑换商品管理</a></li>
	                        </ul>
	                    </div><?php endif; ?> -->
						<!-- 新闻管理 -->
	<!-- 				<?php if($permission["perm_news"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>新闻管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Category/index');?>" target="navTab" rel="listcate" title="文章分类列表" >文章分类列表</a></li>
								<li><a href="<?php echo U('News/index');?>" target="navTab" rel="listnews" title="新闻列表" >新闻列表</a></li>
								<li><a href="<?php echo U('Articlem/rubbish');?>" target="navTab" rel="listarticle1" title="文章回收站" >文章回收站</a></li>
							</ul>
						</div><?php endif; ?> -->
						<!--订单管理-->
					<!-- <?php if($permission["perm_order"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>订单管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Order/index');?>" target="navTab" rel="listorders" title="订单列表" >订单列表</a></li>
								<li><a href="<?php echo U('ExchangeOrder/index');?>" target="navTab" rel="listexchangeorders" title="兑换订单列表" >兑换订单列表</a></li>
							</ul>
						</div><?php endif; ?> -->
						<!--优惠券核销-->
					<!-- <?php if($permission["perm_coupon"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>优惠券核销</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Couponverify/index');?>" target="navTab" rel="listcouponverifys" title="优惠券核销" >优惠券核销</a></li>
							</ul>
						</div><?php endif; ?> -->
						<!--管理员配置-->
						<!-- <?php if(session(C('ADMIN_AUTH_KEY'))): ?><div class="accordionHeader">
								<h2><span>Folder</span>管理员配置</h2>
							</div>
							<div class="accordionContent">
								<ul class="tree treeFolder">
									<li><a href="<?php echo U('Rbacuser/index');?>" target="navTab" rel="listadmin" title="管理员列表" >管理员列表</a></li>
								</ul>
							</div><?php endif; ?> -->
						<!-- <div class="accordionHeader"> -->
						<!-- 	<h2><span>Folder</span>插件管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Plugin/index');?>" target="navTab" rel="listplugin" title="插件列表" >插件列表</a></li>
							</ul>
						</div> -->
<!-- 					<?php if($permission["perm_system"] == 1): ?><div class="accordionHeader">
							<h2><span>Folder</span>系统管理</h2>
						</div>
						<div class="accordionContent">
							<ul class="tree treeFolder">
								<li><a href="<?php echo U('Fields/index');?>" target="navTab" rel="listfields" title="站点配置" >站点配置</a></li>
								<li><a href="<?php echo U('Bak/index');?>" target="navTab" rel="listdb" title="数据库下载" >数据库下载</a></li>
								<li><a href="<?php echo U('Database/index',array('type'=>'export'));?>" target="navTab" rel="listdb" title="数据库备份" >数据库备份</a></li>
								<li><a href="<?php echo U('Database/index',array('type'=>'import'));?>" target="navTab" rel="listdb" title="数据库还原" >数据库还原</a></li>
								<li><a href="<?php echo U('Fields/index');?>" target="navTab" rel="listfields" title="站点参数配置" >站点参数配置</a></li>
								<li><a href="<?php echo U('System/index');?>" target="navTab" rel="listsystem" title="系统配置" >系统配置</a></li>
								<li><a href="<?php echo U('System/updateSystemCache');?>" target="dialog" rel="listsystem" title="更新系统缓存" >更新系统缓存</a></li>
								<li><a href="<?php echo U('System/updateTplCache');?>" target="dialog" rel="listsystem" title="更新模版缓存" >更新模版缓存</a></li>
							</ul>
						</div><?php endif; ?> --><?php endif; ?>
				</div>

			</div>
		</div>
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<p>亨时达内部员工综合评价系统后台管理面板
								<a href="#" target="_blank"></a>
							</p>
							<p>今天是 <?php echo (date('Y-m-d g:i a',time())); ?> </p>
						</div>
						<div class="pageFormContent"  style="">
						<table class="list"  width="100%" layoutH="112">
							<tr class="row" ><th colspan="3" class="space">系统信息</th></tr>
							<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="row" ><td width="50%"><?php echo ($key); ?></td><td width="50%"><?php echo ($v); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
						<!--
						<div style="width:230px;position: absolute;top:60px;right:0" layoutH="80">
							<img src="001.jpg" width="200">

							<h2>事件消息</h2>
							<ul>
								<li >1.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >2.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >3.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >4.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
								<li >5.XXXXXXXXXXXXXXXXXXXXXXXxx</li>
							</ul>
						</div>

						-->

					</div>


				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2013 <a href="demo_page2.html" target="dialog">Simpsons</a><!-- Tel：--></div>
</body>
</html>