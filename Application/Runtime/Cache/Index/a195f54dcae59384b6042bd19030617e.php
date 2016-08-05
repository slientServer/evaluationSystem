<?php if (!defined('THINK_PATH')) exit();?><div id="benefitResultPopupMain" style="z-index:10;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-color:rgba(0,0,0,0.5);">
<style>
@-webkit-keyframes creditMoviea{
0%{ left:50%;top:50%;width:0px;height:0px;}
100%{ left:0px;top:0px;width:100%;height:100%;}
}
@-webkit-keyframes creditMovieb{
0%{ left:50%;top:50%;width:0px;height:0px;}
50%{ left:50%;top:50%;width:0px;height:0px;}
100%{ left:0px;top:0px;width:100%;height:100%;}
}
@-webkit-keyframes creditMoviec{
0%{ opacity: 0;}
100%{ opacity: 1;}
}
@-webkit-keyframes creditMovied{
0%{ transform:rotate(-5deg); }
50%{ transform:rotate(5deg); }
100%{ transform:rotate(-5deg); }
}
.creditBackgroundCSS {
    -webkit-animation:creditMoviec 0.3s 1 linear;
}
.creditBackgroundIMGCSS {
    -webkit-animation:creditMoviec 0.5s 1 linear;
}
.creditBackgroundTextCSS {
    -webkit-animation:creditMoviea 0.3s 1 linear;
}
.creditBackgroundScoreCSS {
    -webkit-animation:creditMoviea 0.3s 1 linear;
}
.creditBackgroundScoreTextCSS {
    -webkit-animation:creditMoviec 0.3s 1 linear;
}
.creditBackgroundIMG2CSS {
    -webkit-animation:creditMovied 0.2s 2 linear;
}
</style>
<script>
	/*var textAreaCredit = new ActionArea(actionAreaList, $("#benefitResultPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 950,
        areaWidth : 260,
        areaHeight: 105,
        areaLeft : 890,
        areaTop : 480,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    $(textAreaCredit.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").text("<?php echo ($value); ?>");*/
    setTimeout(function(){
        var textW = $("#benefitResultPopupMain .benefitResultPopupMain_backScoreInfoText").width();
        var left = ($(window).width()-textW)/2;
        $("#benefitResultPopupMain .benefitResultPopupMain_backScoreInfoText").css("left",left+"px").css("bottom","30px").hide();
    });
    
    $("#benefitResultPopupMain").addClass("creditBackgroundCSS");
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backIMG").addClass("creditBackgroundIMGCSS").show();
    },200);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backRENWUIMG").addClass("creditBackgroundTextCSS").show();
    },500);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backText").addClass("creditBackgroundTextCSS").show();
    },900);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backScore").addClass("creditBackgroundScoreCSS").show();
    },1200);
    setTimeout(function(){
        var wh = $(window).height();
        var ww = $(window).width();
        var th = $("#benefitResultPopupMain .benefitResultPopupMain_backScoreText").height();
        var tw = $("#benefitResultPopupMain .benefitResultPopupMain_backScoreText").width();
        $("#benefitResultPopupMain .benefitResultPopupMain_backScoreText").css("top",((wh-(th/2))/2)+"px");
        $("#benefitResultPopupMain .benefitResultPopupMain_backScoreText").css("left",((ww-tw)/2)+"px");
        $("#benefitResultPopupMain .benefitResultPopupMain_backScoreText").addClass("creditBackgroundScoreTextCSS").show();
    },1400);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backRENWUIMG").removeClass("creditBackgroundTextCSS").addClass("creditBackgroundIMG2CSS");
    },1700);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backScoreInfoText").fadeIn();
    },1800);
    /*var backValue= '1% 1%';
    var idx=0;
    var sh= setInterval(function(){
        if(idx==101){
            clearInterval(sh); 
            
        }else{
            backValue= idx+'% '+idx+'%';
            $('#benefitResultPopupMain').css('background-size', backValue);
            if(idx%2==0){
                $('#benefitResultPopupMain').css('left', 50-Math.floor(idx/2)+'%'); 
                $('#benefitResultPopupMain').css('top', 50-Math.floor(idx/2)+'%'); 
            }
            idx++;
        }
    },1);*/
</script>
<div class="benefitResultPopupMain_backIMG" style="z-index:11;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl2_bg.jpg');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backRENWUIMG" style="z-index:12;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl2_renwu.png');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backText" style="z-index:13;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl2_text.png');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backScore" style="z-index:14;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl2_fenshu.png');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backScoreText" style="display:none;position:absolute;z-index:14;top:50%;left:50%;color:#ffd322;font-size:3em;text-shadow: 1px 1px 1px black;">
<?php echo ($value); ?>
</div>
<div class="benefitResultPopupMain_backScoreInfoText" style="display:block;position:absolute;z-index:15;bottom:20px;left:50%;color:white;font-size:1em;">
积分可用于兑换商品哦~
</div>
</div>