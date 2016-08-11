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
<script src="/evaluationSystem/Application/Index/View/default/Public/js/Login.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
  <div id="carousel-example-generic" class="headerMargin carousel slide carouselHeight" data-interval="5000" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php if(is_array($mainImages)): foreach($mainImages as $key=>$vo): if($key == 0): ?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($key); ?>" class="active"></li>
          <?php else: ?>
                 <li data-target="#carousel-example-generic" data-slide-to="<?php echo ($key); ?>"></li><?php endif; endforeach; endif; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if(is_array($mainImages)): foreach($mainImages as $key=>$vo): if($key == 0): ?><div class="item active">
              <img src="/evaluationSystem/Application/Index/View/default/Public/images/<?php echo ($vo["content"]); ?>" class="fullImage" alt="评价系统">
              <div class="carousel-caption">
                <h1><?php echo ($vo["additionalinfo"]); ?></h1>
              </div>
            </div>
          <?php else: ?>
            <div class="item">
              <img src="/evaluationSystem/Application/Index/View/default/Public/images/<?php echo ($vo["content"]); ?>" class="fullImage" alt="评价系统">
              <div class="carousel-caption">
                <h1><?php echo ($vo["additionalinfo"]); ?></h1>
              </div>
            </div><?php endif; endforeach; endif; ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<section style="margin: 5%;">
  <div class="row">
  <?php if(is_array($accessList)): foreach($accessList as $key=>$vo): ?><div class="col-sm-4 col-md-3">
      <div class="thumbnail">
        <img src="/evaluationSystem/Application/Index/View/default/Public/images/<?php echo ($vo["appInfo"]["imgsrc"]); ?>" alt="<?php echo ($vo["appInfo"]["name"]); ?>">
        <div class="caption">
          <p class="text-center"><?php echo ($vo["appInfo"]["remark"]); ?></p>
          <p calss="text-center" style="text-align:center;"><a href="/evaluationSystem/Index/<?php echo ($vo["controller"]); ?>/<?php echo ($vo["action"]); ?>" class="btn btn-primary" role="button"><?php echo ($vo["appInfo"]["name"]); ?></a></p>
        </div>
      </div>
    </div><?php endforeach; endif; ?>
  </div>
</section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>