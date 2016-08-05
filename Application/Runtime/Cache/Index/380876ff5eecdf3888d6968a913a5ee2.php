<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE　html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/Login.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="/evaluationSystem/Application/Index/View/default/Public/js/Login.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="container bg">
   <header>
    <h1 style="margin-top:4%;">亨时达<span>内部员工综合评价系统</span></h1>
</header>
<section>
  <div class='loginBlock'>
    <h2 class="textCenter">登录</h2>
    <form class="form-horizontal" method="post" action="/evaluationSystem/Index/Login/checkLogin/">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
          <input type="input" name="name" class="form-control" id="inputEmail3" placeholder="用户名">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="密码">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-2">
          <input type="input" name="code" class="form-control" id="inputPassword3" placeholder="验证码">
        </div> 
        <div class="col-sm-4">
          <img id="verifyImg" SRC="/evaluationSystem/Index/Login/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer; width:115px; height:35px; margin-bottom: 20px;" align="absmiddle">
        </div>      
      </div>
<!--       <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label class="hint">
              <input type="checkbox">一周内自动登录
            </label>
          </div>
        </div>
      </div> -->
      <div class="form-group">
        <div class="col-sm-12 textCenter">
          <button type="submit" class="btn btn-primary">登&nbsp;&nbsp;&nbsp;录</button>
        </div>
      </div>
       <div style="text-align: center; color: red; margin-top: 20px;"><?php echo ($_SESSION['message']); ?></div>
    </form>
  </div>
</section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
<script type="text/javascript">
function fleshVerify(type){ 
  //重载验证码
  var timenow = new Date().getTime();
  if (type){
    $('#verifyImg').attr("src", '/evaluationSystem/Index/Login/verify/adv/1/'+timenow);
  }else{
    $('#verifyImg').attr("src", '/evaluationSystem/Index/Login/verify/'+timenow);
  }
}
</script>
</html>