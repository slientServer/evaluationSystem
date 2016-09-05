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
<script src="/evaluationSystem/Application/Index/View/default/Public/js/Performance.js"></script>
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
    <h1>绩效考核</h1>
  </div>
  <ul class="nav nav-tabs" role="tablist">
    <?php if(is_array($avaliableGroup)): foreach($avaliableGroup as $key=>$vo): ?><!-- Nav tabs -->
      <?php if($key == 0): ?><li role="presentation" class="active"><a href="#<?php echo ($key); ?>" aria-controls="<?php echo ($key); ?>" role="tab" data-toggle="tab"><?php echo ($vo["groupname"]); ?></a></li>
      <?php else: ?>
        <li role="presentation"><a href="#<?php echo ($key); ?>" aria-controls="<?php echo ($key); ?>" role="tab" data-toggle="tab"><?php echo ($vo["groupname"]); ?></a></li><?php endif; endforeach; endif; ?>
  </ul>

  <div class="tab-content">
    <?php if(is_array($avaliableGroup)): foreach($avaliableGroup as $keyPanel=>$vo): ?><!-- Tab panes -->
      <?php if($keyPanel == 0): ?><div role="tabpanel" class="tab-pane active" id="<?php echo ($keyPanel); ?>">
            <table class="table">
                <tr class="danger">
                  <th class="textCenter">编号</th>
                  <th class="textCenter">姓名</th>
                  <th class="textCenter">职位</th>
                  <th class="textCenter">电话</th>
                   <th class="textCenter">月份</th>
                  <th class="textCenter">考核结果</th>
                  <th class="textCenter">未评分者</th>
                </tr>
                <?php if(is_array($vo["targetuser"])): foreach($vo["targetuser"] as $key=>$user): if($key%2 == 0): ?><tr>
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["position"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["phone"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["year"]); ?>-<?php echo ($user["month"]); ?></td>
                      <td class="textCenter">
                          <?php if($user["isexeced"] != 1): ?><!--  <button type="button" data-toggle="modal" userid="<?php echo ($user["id"]); ?>" data-target="#myModal<?php echo ($keyPanel); ?>" class="btn btn-link pm-button">无考核成绩</button> -->
                             <span style="font-size:14px; color:gray;">无考核成绩</span>
                          <?php else: ?>
                              <span style="font-size:14px; color:gray;">考核成绩: <span style="color: red;"><?php echo ($user["avgscore"]); ?></span></span><?php endif; ?>
                          
                       </td>
                       <td class="textCenter verticalAlignCenter">
                          <?php if(is_array($user["unpmusers"])): foreach($user["unpmusers"] as $key=>$un): ?>[<?php echo ($un["showname"]); ?>]<?php endforeach; endif; ?>
                       </td>
                    </tr>
                  <?php else: ?>
                    <tr class="success">
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["position"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["phone"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["year"]); ?>-<?php echo ($user["month"]); ?></td>
                      <td class="textCenter">
                          <?php if($user["isexeced"] != 1): ?><!--  <button type="button" data-toggle="modal" userid="<?php echo ($user["id"]); ?>" data-target="#myModal<?php echo ($keyPanel); ?>" class="btn btn-link pm-button">无考核成绩</button> -->
                             <span style="font-size:14px; color:gray;">无考核成绩</span>
                          <?php else: ?>
                              <span style="font-size:14px; color:gray;">考核成绩: <span style="color: red;"><?php echo ($user["avgscore"]); ?></span></span><?php endif; ?>
                       </td>
                       <td class="textCenter verticalAlignCenter">
                          <?php if(is_array($user["unpmusers"])): foreach($user["unpmusers"] as $key=>$un): ?>[<?php echo ($un["showname"]); ?>]<?php endforeach; endif; ?>
                       </td>
                    </tr><?php endif; endforeach; endif; ?>
            </table>

           <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo ($keyPanel); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">打分</h4>
                  </div>
                  <div class="modal-body assess-content">
                    <?php if(is_array($vo["questionList"])): foreach($vo["questionList"] as $k=>$questionArr): ?><h4 style="font-weight:bold;"><?php echo ($k); ?></h4>
                      <hr>
                      <div style="display: block; margin-bottom: 50px;">
                        <?php if(is_array($questionArr)): foreach($questionArr as $number=>$question): ?><span class="questionLabel<?php echo ($keyPanel); ?>" title="<?php echo ($question["questiontext"]); ?>" style="text-indent:2%; display: inline-block; width: 80%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo ($question["questiontext"]); ?>&nbsp;&nbsp;</span>
                        <input class="questionValue<?php echo ($keyPanel); ?>" style="width: 15%;" type="number" min=0 max=100 placeholder="分数" aria-describedby="basic-addon1" required><?php endforeach; endif; ?>
                      </div><?php endforeach; endif; ?> 
                    <p class="errorHint">所有分数都必填，且不得小于0分， 不得大于100分<p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" modalNum="<?php echo ($keyPanel); ?>" groupId="<?php echo ($vo["groupid"]); ?>" class="btn btn-primary pm-save">保存</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      <?php else: ?>
        <div role="tabpanel" class="tab-pane" id="<?php echo ($keyPanel); ?>">
            <table class="table">
                <tr class="danger">
                  <th class="textCenter">编号</th>
                  <th class="textCenter">姓名</th>
                  <th class="textCenter">职位</th>
                  <th class="textCenter">电话</th>
                  <th class="textCenter">月份</th>
                  <th class="textCenter">考核</th>
                  <th class="textCenter">未评分者</th>
                </tr>
                <?php if(is_array($vo["targetuser"])): foreach($vo["targetuser"] as $key=>$user): if($key%2 == 0): ?><tr>
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["position"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["phone"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["year"]); ?>-<?php echo ($user["month"]); ?></td>
                      <td class="textCenter">
                          <?php if($user["isexeced"] != 1): ?><!--  <button type="button" data-toggle="modal" userid="<?php echo ($user["id"]); ?>" data-target="#myModal<?php echo ($keyPanel); ?>" class="btn btn-link pm-button">无考核成绩</button> -->
                            <span style="font-size:14px; color:gray;">无考核成绩</span>
                          <?php else: ?>
                              <span style="font-size:14px; color:gray;">考核成绩: <span style="color: red;"><?php echo ($user["avgscore"]); ?></span></span><?php endif; ?>
                       </td>
                       <td class="textCenter verticalAlignCenter">
                          <?php if(is_array($user["unpmusers"])): foreach($user["unpmusers"] as $key=>$un): ?>[<?php echo ($un["showname"]); ?>]<?php endforeach; endif; ?>
                       </td>
                    </tr>
                  <?php else: ?>
                    <tr class="success">
                      <td class="textCenter verticalAlignCenter"><?php echo ($key); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["showname"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["position"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["phone"]); ?></td>
                      <td class="textCenter verticalAlignCenter"><?php echo ($user["year"]); ?>-<?php echo ($user["month"]); ?></td>
                      <td class="textCenter">
                          <?php if($user["isexeced"] != 1): ?><!--  <button type="button" data-toggle="modal" userid="<?php echo ($user["id"]); ?>" data-target="#myModal<?php echo ($keyPanel); ?>" class="btn btn-link pm-button">无考核成绩</button> -->
                               <span style="font-size:14px; color:gray;">无考核成绩</span>
                          <?php else: ?>
                              <span style="font-size:14px; color:gray;">考核成绩: <span style="color: red;"><?php echo ($user["avgscore"]); ?></span></span><?php endif; ?>
                       </td>
                       <td class="textCenter verticalAlignCenter">
                          <?php if(is_array($user["unpmusers"])): foreach($user["unpmusers"] as $key=>$un): ?>[<?php echo ($un["showname"]); ?>]<?php endforeach; endif; ?>
                       </td>
                    </tr><?php endif; endforeach; endif; ?>
            </table>

           <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo ($keyPanel); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">打分</h4>
                  </div>
                  <div class="modal-body assess-content">
                    <?php if(is_array($vo["questionList"])): foreach($vo["questionList"] as $k=>$questionArr): ?><h4 style="font-weight:bold;"><?php echo ($k); ?></h4>
                      <hr>
                      <div style="display: block; margin-bottom: 50px;">
                        <?php if(is_array($questionArr)): foreach($questionArr as $number=>$question): ?><span class="questionLabel<?php echo ($keyPanel); ?>" title="<?php echo ($question["questiontext"]); ?>" style="text-indent:2%; display: inline-block; width: 80%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo ($question["questiontext"]); ?>&nbsp;&nbsp;</span>
                        <input class="questionValue<?php echo ($keyPanel); ?>" style="width: 15%;" type="number" min=0 max=100 placeholder="分数" aria-describedby="basic-addon1" required><?php endforeach; endif; ?>
                      </div><?php endforeach; endif; ?> 
                    <p class="errorHint">所有分数都必填，且不得小于0分， 不得大于100分<p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" modalNum="<?php echo ($keyPanel); ?>" groupId="<?php echo ($vo["groupid"]); ?>" class="btn btn-primary pm-save">保存</button>
                  </div>
                </div>
              </div>
            </div>

        </div><?php endif; endforeach; endif; ?>
  </div>
</section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>