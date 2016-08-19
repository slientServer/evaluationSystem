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
    <h1>评价中心</h1>
  </div>
  <table class="table">
    <tr class="danger">
      <th class="textCenter">编号</th>
      <th class="textCenter">姓名</th>
      <th class="textCenter">电话</th>
      <th class="textCenter">职位</th>
      <th class="textCenter">打分</th>
    </tr>
    <?php if(is_array($userInfo)): foreach($userInfo as $key=>$vo): if($key%2 == 0): ?><tr>
          <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["showname"]); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["phone"]); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["position"]); ?></td>
          <td class="textCenter">
            <?php if($isstart == start): if($vo["isassessed"] != 1): ?><button type="button" data-toggle="modal" userid="<?php echo ($vo["id"]); ?>" data-target="#myModal" class="btn btn-link assess-button">打分</button>
                <?php else: ?>
                    <span style="font-size:14px; color:gray;">已打分</span><?php endif; ?>
            <?php else: ?>
                <span style="font-size:14px; color:gray;">打分将于<?php echo ($groupStartDay); ?>日开启</span><?php endif; ?>
           </td>
        </tr>
      <?php else: ?>
        <tr class="success">
          <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["showname"]); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["phone"]); ?></td>
          <td class="textCenter verticalAlignCenter"><?php echo ($vo["position"]); ?></td>
          <td class="textCenter">
            <?php if($isstart == 'start'): if($vo["isassessed"] != 1): ?><button type="button" data-toggle="modal" userid="<?php echo ($vo["id"]); ?>" data-target="#myModal" class="btn btn-link assess-button">打分</button>
                <?php else: ?>
                    <span style="font-size:14px; color:gray;">已打分</span><?php endif; ?>
            <?php else: ?>
                <span style="font-size:14px; color:gray;">打分将于<?php echo ($groupStartDay); ?>日开启</span><?php endif; ?>
          </td>
        </tr><?php endif; endforeach; endif; ?>
  </table>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">打分</h4>
          </div>
          <div class="modal-body assess-content">
              <div class="form-group">
                <label for="score">分数:</label>
                <input type="number" class="form-control required" id="score" placeholder="满分100分">
              </div>
              <div class="form-group">
                <label for="remark">评价:</label>
                <textarea rows='10' class="form-control" id="remark" placeholder="评价"></textarea>
              </div>     
              <div class="form-group">
                <span class="verticalAlignCenter" style="font-weight:bold;">匿名:</span>
                <input type="checkbox" class="verticalAlignCenter" style="width: 20px; height: 20px;" id="anony"><span class="verticalAlignCenter" style="font-style: italic;">勾选此项，任何人无法查看打分人</span>
                <span class="success-hint textCenter" style="disply:none;"></spn>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="button" class="btn btn-primary assess-save">保存</button>
          </div>
        </div>
      </div>
    </div>

  </section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>