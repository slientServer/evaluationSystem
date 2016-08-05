<?php if (!defined('THINK_PATH')) exit();?>
<div id="benefitMainPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-color:rgba(0,0,0,0.5);">
<style>
@-webkit-keyframes benefitMainBoxShake{
0%{ transform:rotate(-10deg); }
50%{ transform:rotate(10deg); }
100%{ transform:rotate(-10deg); }
}
@-webkit-keyframes benefitMainBoxBackgroundStartShow{
0%{ opacity:0;}
100%{ opacity:1}
}
@-webkit-keyframes benefitMainBoxBackgroundShow{
0%{ left:50%;top:50%;width:0px;height:0px;opacity:0;}
100%{ left:0px;top:0px;width:100%;height:100%;opacity:1}
}
@-webkit-keyframes benefitMainBoxShakeFinal{
0%{ left:50%;top:50%;width:0px;height:0px;opacity:0;}
100%{ left:0px;top:0px;width:100%;height:100%;opacity:1}
}
.benefitMainBoxShakeClass{
    -webkit-animation:benefitMainBoxShake 0.2s infinite linear;
}
.benefitMainBoxShakeaClass{
    -webkit-animation:benefitMainBoxShake 0.2s 3 linear;
}
.benefitMainBoxBackgroundShowStartClass{
    -webkit-animation:benefitMainBoxBackgroundStartShow 0.5s 1 linear;
}
.benefitMainBoxBackgroundShowClass{
    -webkit-animation:benefitMainBoxBackgroundShow 0.5s 1 linear;
}
.benefitMainBoxShakeFinalClass{
    -webkit-animation:benefitMainBoxShakeFinal 0.5s 1 linear;
}
.benefitMainBoxOpenClass{

}
</style>
	<script>
	$(document).ready(function(){
      var button1W = $(window).height()*0.14*3.927;
      $("#benefitMainPopupMain .benefitMainPopupMain_theButton").css("height",($(window).height()*0.14)+"px").css("width",button1W+"px");
      var button1W = $(window).height()*0.14*3.927;
      var windowW = $(window).width();
          $("#benefitMainPopupMain .benefitMainPopupMain_outer").css("left",((windowW-button1W)/2)+"px").css("bottom","20px");
      

      $("#benefitMainPopupMain .benefitMainStartBoxBackground").hide();
        var isFinished = $("#benefitMainPopupMain .benefitMainPopupIsFinished").val();
        var wwidth = $(window).width();
        var startBoxWidth = $("#benefitMainPopupMain .benefitMainStartBoxOuter").width();
        $("#benefitMainPopupMain .benefitMainStartBoxOuter").css("left",((wwidth-startBoxWidth)/2)+"px");
        $("#benefitMainPopupMain .benefitMainStartBox").addClass("benefitMainBoxShakeaClass");

        setTimeout(function(){
          $("#benefitMainPopupMain .benefitMainStartBoxBackground").addClass("benefitMainBoxBackgroundShowStartClass").show();
        },500);
        setTimeout(function(){
            $("#benefitMainPopupMain .benefitMainStartBoxBackMoving").addClass("benefitMainBoxBackgroundShowClass").show();
          },1400);
        
        
        var benefitArea1 = new ActionArea(actionAreaList, $("#benefitMainPopupMain .benefitMainPopupMain_center"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 364,
            areaHeight: 250,
            areaLeft : 788,
            areaTop : 406,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
            }
        });
        var centerImg = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitMainBackgroundCenter1.png' style='position:absolute;width:100%;height:100%'>");
        var centerImg2 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitMainBackgroundCenter1.png' style='position:absolute;width:100%;height:100%'>");
        $(benefitArea1.theElement).append(centerImg);
        centerImg.hide();
        setTimeout(function(){
          centerImg.addClass("benefitMainBoxShakeFinalClass").show();
        },1000);
        setTimeout(function(){
          centerImg.removeClass("benefitMainBoxShakeFinalClass");
          centerImg.addClass("benefitMainBoxShakeaClass");
        },1900);

        setTimeout(function(){
          $("#benefitMainPopupMain .benefitMainPopupMain_theButtonIMG").addClass("benefitMainBoxShakeFinalClass").show();
          $("#benefitMainPopupMain .benefitMainPopupMain_outer").fadeIn();
        },2100);



        if(isFinished){
        }
        $("#benefitMainPopupMain .benefitMainPopupMain_startButton").click(function(){
          $(benefitArea1.theElement).removeClass("benefitMainBoxShakeFinalClass");
          $(benefitArea1.theElement).addClass("benefitMainBoxShakeClass");
          setTimeout(function(){
            $(benefitArea1.theElement).removeClass("benefitMainBoxShakeClass");
            centerImg.attr("src","/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl_box2.png")
          },600);
          setTimeout(function(){
            dynamicPopupGroup.addNewPopup("benefitResult","<?php echo U('WScreen/benefitResult');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
          },1200);
        	
        });
        
    });
	</script>
  <div class="benefitMainStartBoxOuter" style="text-align:center;z-index:11;width:100px;height:50px;position:absolute;left:49%;top:49%;text-shadow:0px 0px 0px white;color:white;">
    <image class="benefitMainStartBox" style="width:50px;height:auto;" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitMainBackgroundCenter.png"><br/>
      准备礼物中...
  </div>
  <div class="benefitMainStartBoxBackground" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:12;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl_bg.jpg');background-size: 100% 100%;">
    <div class="benefitMainStartBoxBackMoving" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:12;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/fl_sucai.png');background-size: 100% 100%;display:none;">
    </div>
    <div class="benefitMainPopupMain_center" style="position:absolute;z-index:12;height:100%;width:100%;">
    </div>
    <div class="benefitMainPopupMain_outer" style="position:absolute;z-index:13;display:none;">
      <?php if($isFinished == false): ?><div class="benefitMainPopupMain_startButton benefitMainPopupMain_theButton
benefitMainPopupIsFinished" style="width:100%;height:100%;">
          <img class=" " src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitStartButtonEnabled.png" style="width:100%;height:100%;">
        </div>
        <input class="benefitMainPopupMain_theButtonIMG" type="hidden" style="display:none;" value="true">
      <?php else: ?>
        <div class="benefitMainPopupMain_disabledButton benefitMainPopupMain_theButton" style="width:100%;height:100%;">
          <img class="benefitMainPopupMain_theButtonIMG" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitStartButtonDisabled.png" style="width:100%;height:100%;">
        </div><?php endif; ?>
      
      <div style="padding-top:5px;margin:auto;font-size:15px;color:white;text-align:center;text-shadow:0 0 0 white;">
          福利宝箱每天可抽取一次<br/>每天0点更新
      </div>
    </div>
  </div>
</div>