<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo R('Index/Siteinfo/info',array('title'),'Widget');?>的后台登录面板</title>
<link href="/evaluationSystem/Public/Css/login.css" rel="stylesheet" type="text/css" />
<script src="/evaluationSystem/Public/Js/jquery-1.7.2.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '/evaluationSystem/Admin/Login/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '/evaluationSystem/Admin/Login/verify/'+timenow);
	}
}
//-->
</script>
</head>
<body class="b">
<div class="lg">
<form method="post" action="/evaluationSystem/Admin/Login/checkLogin/">
    <div class="lg_top">辛普森后台管理系统</div>
    <div class="lg_main">
        <div class="lg_m_1">
        <span>用户名：</span>
        <input name="name" placeholder="用户名" class="ur" /><br/>
        <span>密 &nbsp;码：</span>
        <input name="password" type="password" placeholder="密码" class="pw" /><br/>
        <span>验证码：</span>
        <input name="code" type="text" class="pww" placeholder="验证码" size="5"/><br/>
        <span><img id="verifyImg" SRC="/evaluationSystem/Admin/Login/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer; width:115px; height:35px; margin-bottom: 20px;" align="absmiddle"></span>
        </div>
    </div>
    <div class="lg_foot">
    <input type="submit" value="登 录" class="bn" /></div>
    <div style="text-align: center; color: red; margin-top: 20px;"><?php echo ($_SESSION['message']); ?></div>
</form>
</div>
</body>
</html>