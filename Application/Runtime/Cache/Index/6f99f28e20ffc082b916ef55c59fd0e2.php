<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php echo R('Siteinfo/info',array('title'),'Widget');?>支付</title>

    <!-- Bootstrap core CSS -->
    <link href="/workspace/simpsons/trunk/server/Public/Css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/mobile/Public/js/jquery.js"></script>

</head>

<body>

<div class="container">

    <form class="form-signin" role="form" action="<?php echo U('Pay/preview');?>?showwxpaytitle=1" method="post">
        <h4 class="form-signin-heading" style="font-family:'微软雅黑';font-size:20px;">支付:</h4>
        <input type="text" class="form-control"  name="mount" placeholder="" required value="1">分
        <button class="btn btn-lg btn-primary btn-block" type="submit">微信支付</button>
    </form>

</div>
</body>
</html>