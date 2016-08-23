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
<script src="/evaluationSystem/Application/Index/View/default/Public/js/jquery-ui/jquery-ui.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script>
  $(document).ready(function() {
     var data= <?php echo ($userList); ?>;

     var title = {
        text: '员工分数分布'   
     };
     var subtitle = {
        text: ''
     };
     var categoryArr= [];
     for(var idx=0; idx< data.length; idx++){
        categoryArr.push(data[idx]['showname']);
     }
     var xAxis = {
        categories: categoryArr
     };
     var yAxis = {
        title: {
           text: '分数'
        },
        min: 0,
        max: 100,
        plotLines: [{
           value: 0,
           width: 1,
        }]
     };   

     var tooltip = {
        valueSuffix: '分 ',
        crosshairs: true,
        shared: true
     }

     var legend = {
        layout: 'vertical',
        align: 'right',
        enabled: true,
        verticalAlign: 'middle',
        borderWidth: 0
     };
    var avgArr=[];
    var minArr=[];
    var maxArr=[];
    for(var idx=0; idx< data.length; idx++){
        avgArr.push(data[idx]['avgScore']);
        minArr.push(data[idx]['minScore']);
        maxArr.push(data[idx]['maxScore']);
     }
     var series =  [
        {
           name: '最高分',
           data: maxArr
        }, 
        {
           name: '平均分',
           data: avgArr,
           marker: {
            symbol: 'square'
         },
        },
        {
           name: '最低分',
           data: minArr
        }
     ];

     var json = {};

     json.credits= {enabled: false};
     json.title = title;
     json.subtitle = subtitle;
     json.xAxis = xAxis;
     json.yAxis = yAxis;
     json.tooltip = tooltip;
     json.legend = legend;
     json.series = series;

     $('#container').highcharts(json);
  });
</script>
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
    <h1>员工评价分析</h1>
  </div>
  <div id="container" style="width: '100%'; height: 450px; margin: 0 auto"></div>
</section>
<footer class="copyright">© 2016 Wugubaike.com. 版权所有 Powered by Brian.</footer>
</body>
</html>