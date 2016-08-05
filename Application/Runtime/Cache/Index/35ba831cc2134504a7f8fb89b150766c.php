<?php if (!defined('THINK_PATH')) exit();?><div id="benefitResultPopupMain" style="z-index:10;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-color:rgba(0,0,0,0.5);">
<style>
@-webkit-keyframes RMBMoviea{
0%{ left:50%;top:50%;width:0px;height:0px;}
100%{ left:0px;top:0px;width:100%;height:100%;}
}
@-webkit-keyframes RMBMovieb{
0%{ left:50%;top:50%;width:0px;height:0px;}
50%{ left:50%;top:50%;width:0px;height:0px;}
100%{ left:0px;top:0px;width:100%;height:100%;}
}
@-webkit-keyframes RMBMoviec{
0%{ opacity: 0;}
100%{ opacity: 1;}
}
@-webkit-keyframes RMBMovied{
0%{ transform:rotate(-5deg); }
50%{ transform:rotate(5deg); }
100%{ transform:rotate(-5deg); }
}
.RMBBackgroundCSS {
    -webkit-animation:RMBMoviec 0.3s 1 linear;
}
.RMBBackgroundIMGCSS {
    -webkit-animation:RMBMoviec 0.5s 1 linear;
}
.RMBBackgroundIMG2CSS {
    -webkit-animation:RMBMoviea 0.3s 1 linear;
}
.RMBBackgroundIMG22CSS {
    -webkit-animation:RMBMovied 0.2s 2 linear;
}
</style>
<script>
	/*var textAreaRMB = new ActionArea(actionAreaList, $("#benefitResultPopupMain .benefitResultPopupMain_backIMG3"),{
        backgroundWidth : 1920,
        backgroundHeight : 948,
        areaWidth : 400,
        areaHeight: 399,
        areaLeft : 828,
        areaTop : 332,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    var template='<div>'+
        '    <div style="font-size:15px;color:#fefefe;border-bottom:1px solid #7d7d7d;text-shadow: 0px 0px 0px white;">'+
        '        辛普森门店优惠券'+
        '    </div>'+
        '    <div style="font-weight:bold;font-size:15px;">'+
        '        <span style="font-weight:bold;font-size:20px;">¥</span>'+
        '        <span style="font-weight:bold;font-size:40px;">123<?php echo ($benefit["couponvalue"]); ?></span>'+
        '    </div>'+
        '    <div style="font-size:10px;">'+
        '        <div><?php echo ($benefit["couponcondition"]); ?>aaa</div>'+
        '        <div>券码： <?php echo ($couponnumber); ?>123123123</div>'+
        '    </div>'+
        '</div>';*/
    
    
    $("#benefitResultPopupMain").addClass("RMBBackgroundCSS")
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backIMG").addClass("RMBBackgroundIMGCSS").show();
    },200);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backIMG2").addClass("RMBBackgroundIMG2CSS").show();
        //$(textAreaRMB.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").append($(template));
    },700);
    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backIMG3").addClass("RMBBackgroundIMG2CSS").show();
        //$(textAreaRMB.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").append($(template));
    },1000);

    setTimeout(function(){
        $("#benefitResultPopupMain .benefitResultPopupMain_backIMG2").removeClass("RMBBackgroundIMG2CSS").addClass("RMBBackgroundIMG22CSS");
        //$(textAreaRMB.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").append($(template));
    },1300);

    setTimeout(function(){
        var wh = $(window).height();
        var ww = $(window).width();
        var th = $("#benefitResultPopupMain .benefitResultPopupMain_backText").height();
        var tw = $("#benefitResultPopupMain .benefitResultPopupMain_backText").width();
        $("#benefitResultPopupMain .benefitResultPopupMain_backText").css("top",((wh-th)/2)+"px");
        $("#benefitResultPopupMain .benefitResultPopupMain_backText").css("left",((ww-tw)/2)+"px");
        $("#benefitResultPopupMain .benefitResultPopupMain_backText").addClass("RMBBackgroundCSS").show();
        //$(textAreaRMB.theElement).css("text-align","center").css("font-size","40px").css("font-weight","bold").append($(template));
    },1100);
    

    /*var backValue= '1% 1%';
    var idx=0;
    var sh=setInterval(function(){
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
    },1);
    console.log(idx);*/
</script>
<div class="benefitResultPopupMain_backIMG" style="z-index:11;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl3_bg.jpg');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backIMG2" style="z-index:12;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl3_tanchu.png');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backIMG3" style="z-index:13;position:absolute;top:0%;left:0%;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl3_youhuiquan.png');background-size:100% 100%;background-repeat:no-repeat;display:none;">
</div>
<div class="benefitResultPopupMain_backText" style="position:absolute;z-index:14;left:50%;top:50%;display:none;">
    <table style="color:white;width:100%;height:100%;margin-top:0%;text-align:center;margin-left:0%;margin-auto;">
        <tr>
            <td colspan="2" style="font-size:15px;color:#fefefe;border-bottom:1px solid #7d7d7d;text-shadow: 0px 0px 0px white;">
                        辛普森门店优惠券        
            </td>
        </tr>
        <tr>
            <td style="color:#ffd701;text-shadow: 0px 0px 0px white;">
                <span style="font-size:20px;position:relative;top:-10px;">￥</span>
                <span style="font-size:35px;"><?php echo ($benefit["couponvalue"]); ?></span>
            </td>
            <td style="text-align:left;padding-left:5px;">
                RMB<br/>
                <span style="color:#9a9a9a;text-shadow: 0px 0px 0px white;">
                    <?php echo ($benefit["couponcondition"]); ?>
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="border-top:1px solid #ffd701;font-size:12px;text-shadow: 0px 0px 0px white;padding-top:5px;">
                券码： <?php echo ($couponnumber); ?>
            </td>
        </tr>
    </table>
</div>
</div>