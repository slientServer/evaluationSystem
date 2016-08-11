<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE　html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/Login.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/myDefined.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/evaluationSystem/Application/Index/View/default/Public/js/Employee.js"></script>

</head>
<body class="container-fluid noPadding bg">
<header>
  <nav class="navbar navbar-inverse navbar-fixed-top noMargin">
    <a class="navbar-brand welcome-main" href="/evaluationSystem/Index/Index/index">主页</a>
    <?php if(is_array($accessList)): foreach($accessList as $key=>$vo): ?><a class="navbar-brand welcome-main" href="/evaluationSystem/Index/<?php echo ($vo["controller"]); ?>/<?php echo ($vo["action"]); ?>"><?php echo ($vo["appInfo"]["name"]); ?></a><?php endforeach; endif; ?>
     <a class="navbar-brand navbar-right welcome" href="/evaluationSystem/Index/Login/logout">登出</a>
     <span class="navbar-brand navbar-right welcome" href="#">欢迎你,<?php echo ($showname); ?>！</span>
  </nav>
</header>
<section>
   <div class="page-header siglePageHeader">
    <h1>个人信息管理</h1>
  </div>
  <form class="form-horizontal personInfoWidth textCenter" method="POST" action="/evaluationSystem/Index/Employee/update">

    <div class="row">
       <div class="col-lg-6">
        <image class="employee-icon" src="/evaluationSystem/Application/Index/View/default/Public/images/icon/score.png">
        <span class="employee-font">累计平均:<?php echo ($avgScore); ?></span>
       </div>
       <div class="col-lg-6">
        <image class="employee-icon" src="/evaluationSystem/Application/Index/View/default/Public/images/icon/rank.png">
        <span class="employee-font">排名:<?php echo ($rank); ?></span>
       </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="username" class="col-sm-2 control-label">用户名:</label>
      <div class="col-sm-10">
        <input type="input"  class="form-control" id="username" value="<?php echo ($userInfo[0]["username"]); ?>" disabled>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
      <label for="showname" class="col-sm-2 control-label">姓名:</label>
      <div class="col-sm-10">
        <input type="input" name="showname" class="form-control infoInput" id="showname" value="<?php echo ($userInfo[0]["showname"]); ?>" disabled>
      </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="password" class="col-sm-2 control-label">密码:</label>
      <div class="col-sm-10">
        <input type="password" name="password"  class="form-control infoInput" id="password" value="<?php echo ($userInfo[0]["password"]); ?>" disabled>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
      <label for="phone" class="col-sm-2 control-label">电话:</label>
      <div class="col-sm-10">
        <input type="input" name="phone"  class="form-control infoInput" id="phone" value="<?php echo ($userInfo[0]["phone"]); ?>" disabled>
      </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="deptid" class="col-sm-2 control-label">部门:</label>
      <div class="col-sm-10">
        <input type="input"  class="form-control" id="deptid" value="<?php echo ($userInfo[0]["deptname"]); ?>" disabled>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
      <label for="position" class="col-sm-2 control-label">职位:</label>
      <div class="col-sm-10">
        <input type="input"  class="form-control" id="position" value="<?php echo ($userInfo[0]["position"]); ?>" disabled>
      </div>
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-6">  
    <div class="form-group">
      <label for="directleader" class="col-sm-2 control-label">直属领导:</label>
      <div class="col-sm-10">
        <input type="input"  class="form-control" id="directleader" value="<?php echo ($directName); ?>" disabled>
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
      <label for="enrolldate" class="col-sm-2 control-label">入职日期:</label>
      <div class="col-sm-10">
        <input type="input"  class="form-control" id="enrolldate" value="<?php echo ($userInfo[0]["enrolldate"]); ?>" disabled>
      </div>
    </div>
    </div>
    </div>

    <button class="btn btn-default" id="updatePersonalInfo">修改信息</button>
    <button type="submit" class="btn btn-default hidden" id="updatePersonalInfoSave">保存</button>
    <button class="btn btn-default hidden" id="updatePersonalInfoCancel">取消</button>
   </form>
  </section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>