<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE　html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/Login.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/myDefined.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="/evaluationSystem/Application/Index/View/default/Public/css/jquery-ui/jquery-ui.structure.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/evaluationSystem/Application/Index/View/default/Public/js/Assessment.js"></script>
<script src="/evaluationSystem/Application/Index/View/default/Public/js/jquery-ui/jquery-ui.min.js"></script>

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
    <h1>评价历史</h1>
  </div>
  <ul class="nav nav-tabs" role="tablist">
    <?php if(is_array($passedSixMonth)): foreach($passedSixMonth as $key=>$vo): ?><!-- Nav tabs -->
      <?php if($key == one): ?><li role="presentation" class="active"><a href="#<?php echo ($key); ?>" aria-controls="<?php echo ($key); ?>" role="tab" data-toggle="tab"><?php echo ($vo["year"]); ?>年<?php echo ($vo["month"]); ?>月</a></li>
      <?php else: ?>
        <li role="presentation"><a href="#<?php echo ($key); ?>" aria-controls="<?php echo ($key); ?>" role="tab" data-toggle="tab"><?php echo ($vo["year"]); ?>年<?php echo ($vo["month"]); ?>月</a></li><?php endif; endforeach; endif; ?>
  </ul>

  <div class="tab-content">
    <?php if(is_array($assessmentHistory)): foreach($assessmentHistory as $key=>$vo): ?><!-- Tab panes -->
      <?php if($key == one): ?><div role="tabpanel" class="tab-pane active" id="<?php echo ($key); ?>">
            <table class="table">
                <tr class="danger">
                  <th class="textCenter">编号</th>
                  <th class="textCenter">姓名</th>
                  <th class="textCenter">分数</th>
                  <th class="textCenter">评价</th>
                  <th class="textCenter">是否匿名</th>
                  <th class="textCenter">评价时间</th>
                </tr>
                <?php if(is_array($vo)): foreach($vo as $key=>$assess): if($key%2 == 0): ?><tr>
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["score"]); ?></td>
                      <td class="textCenter verticalAlignCenter remark-width"><?php echo ($assess["remark"]); ?></td>
                      <?php if($assess["isanony"] == 1): ?><td class="textCenter verticalAlignCenter">是</td>
                      <?php else: ?>
                        <td class="textCenter verticalAlignCenter">否</td><?php endif; ?>
                      <td class="textCenter verticalAlignCenter"><?php echo (date("Y-m-d H:i:s",$assess["inserttime"])); ?></td>
                    </tr>
                  <?php else: ?>
                    <tr class="success">
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["score"]); ?></td>
                      <td class="textCenter verticalAlignCenter remark-width"><?php echo ($assess["remark"]); ?></td>
                      <?php if($assess["isanony"] == 1): ?><td class="textCenter verticalAlignCenter">是</td>
                      <?php else: ?>
                        <td class="textCenter verticalAlignCenter">否</td><?php endif; ?>
                      <td class="textCenter verticalAlignCenter"><?php echo (date("Y-m-d H:i:s",$assess["inserttime"])); ?></td>
                    </tr><?php endif; endforeach; endif; ?>
            </table>
        </div>
      <?php else: ?>
        <div role="tabpanel" class="tab-pane" id="<?php echo ($key); ?>">
            <table class="table">
                <tr class="danger">
                  <th class="textCenter">编号</th>
                  <th class="textCenter">姓名</th>
                  <th class="textCenter">分数</th>
                  <th class="textCenter">评价</th>
                  <th class="textCenter">是否匿名</th>
                  <th class="textCenter">评价时间</th>
                </tr>
                <?php if(is_array($vo)): foreach($vo as $key=>$assess): if($key%2 == 0): ?><tr>
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["score"]); ?></td>
                      <td class="textCenter verticalAlignCenter remark-width"><?php echo ($assess["remark"]); ?></td>
                      <?php if($assess["isanony"] == 1): ?><td class="textCenter verticalAlignCenter">是</td>
                      <?php else: ?>
                        <td class="textCenter verticalAlignCenter">否</td><?php endif; ?>
                      <td class="textCenter verticalAlignCenter"><?php echo (date("Y-m-d H:i:s",$assess["inserttime"])); ?></td>
                    </tr>
                  <?php else: ?>
                    <tr class="success">
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($assess["score"]); ?></td>
                      <td class="textCenter verticalAlignCenter remark-width"><?php echo ($assess["remark"]); ?></td>
                      <?php if($assess["isanony"] == 1): ?><td class="textCenter verticalAlignCenter">是</td>
                      <?php else: ?>
                        <td class="textCenter verticalAlignCenter">否</td><?php endif; ?>
                      <td class="textCenter verticalAlignCenter"><?php echo (date("Y-m-d H:i:s",$assess["inserttime"])); ?></td>
                    </tr><?php endif; endforeach; endif; ?>
            </table>
        </div><?php endif; endforeach; endif; ?>
  </div>

</section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>