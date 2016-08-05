<?php if (!defined('THINK_PATH')) exit();?><div style="width:100%;height:100%;" id="oriantationNotificationPopupMain">
    <p></p>
    <script>
    $(document).ready(function(){
    	var height = $(window).height();
        var width = $(window).width();
        $("#oriantationNotificationPopupMain").width(width);
        $("#oriantationNotificationPopupMain").height(height);
        $("#oriantationNotificationPopupMain").css("position","absolute").css("left","0px").css("top","0px")
        .css("z-index","9999")
        .css("background-image","url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/wscreennotify.png)")
        .css("background-repeat","no-repeat")
        .css("background-size","100% 100%")
        .css("background-color","rgba(0,0,0,0.5)");
    });
    </script>
</div>