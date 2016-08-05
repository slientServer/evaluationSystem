<?php if (!defined('THINK_PATH')) exit();?>
<div style="width:100%;height:100%;left:0px;top:0px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/TransparentBackground1.png');background-repeat:repeat;position:absolute;z-index:10;" id="mainMenuPopupMain">
<style>
@-webkit-keyframes startcircle{
0%{ transform:rotate(0deg); }
100%{ transform:rotate(360deg); }
}
@-webkit-keyframes startmainMenu{
0%{ opacity:0; left:-1000px;}
10%{ opacity:0; left:-1000px;}
90%{ opacity:1;}
100%{ opacity:1; left:0px;}
}

@-webkit-keyframes endMainMenu{
0%{ opacity:1; left:0;}
20%{ opacity:1;}
50%{ opacity:0; left:-1000px;}
100%{ opacity:0; left:-1000px;}
}
@-webkit-keyframes hideMainMenu{
0%{ opacity:1;}
40%{ opacity:1;}
100%{ opacity:0;}
}
.startMenuCircleClass{
    -webkit-animation:startcircle 0.6s 1 linear;
}
.startMainMenuClass{
    -webkit-animation:startmainMenu 1s 1 linear;
}
.endMainMenuClass{
    -webkit-animation:endMainMenu 1.3s 1 linear;
}
.hideMainMenuClass{
    -webkit-animation:hideMainMenu 1.3s 1 linear;
}
</style>
    <p></p>
    <script>
    function onPersonalInfoButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }

    function onBenefitButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("benefitMainPopup","<?php echo U('WScreen/benefitMain');?>",{}, {forceReload:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }

    function onProductMainButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("marketplaceMainPopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }

    function onNewsMainButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("NewsMainPopup","<?php echo U('WScreen/newsMain');?>",{}, {forceReload:true,closeButton:false, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }
    function onBenefitBoxButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("BenefitBoxPopup","<?php echo U('WScreen/benefitBox');?>",{}, {forceReload:true,closeButton:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }
    function onExchangeCenterButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
        dynamicPopupGroup.addNewPopup("ExchangeCenterPopup","<?php echo U('WScreen/exchangeCenter');?>",{}, {forceReload:true,closeButton:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
    }
    

    $(document).ready(function(){
        var height = $(window).height();
        var width = $(window).width();
        $("#mainMenuPopupMain").width(width);
        $("#mainMenuPopupMain").height(height);
        var actionArea0 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 1695,
            areaHeight: 286,
            areaLeft : 40,
            areaTop : 630,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
            }
        });
        $(actionArea0.theElement).addClass("menuCircle");
        $(actionArea0.theElement).css("z-index","11");
        //$(actionArea0.theElement).css("bottom","20px").css("top","");
        var actionArea1 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 270,
            areaHeight: 180,
            areaLeft : 280,
            areaTop : 650,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onPersonalInfoButtonClick
            }
        });
        var actionArea2 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 170,
            areaHeight: 180,
            areaLeft : 680,
            areaTop : 720,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onBenefitButtonClick
            }
        });
        var actionArea3 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 170,
            areaHeight: 180,
            areaLeft : 970,
            areaTop : 830,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onProductMainButtonClick
            }
        });
        var actionArea4 = new ActionArea(actionAreaList,  $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 170,
            areaHeight: 180,
            areaLeft : 1280,
            areaTop : 830,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onNewsMainButtonClick
            }
        });
        var actionArea5 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 170,
            areaHeight: 180,
            areaLeft : 1580,
            areaTop : 750,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onExchangeCenterButtonClick
            }
        });
        $(actionArea1.theElement).css("z-index","20");
        $(actionArea2.theElement).css("z-index","20");
        $(actionArea3.theElement).css("z-index","20");
        $(actionArea4.theElement).css("z-index","20");
        $(actionArea5.theElement).css("z-index","20");
        

        //actions
        var img1 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startMenuCircle11.png' style='height:70%;position:absolute;left:0px;bottom:0px;' class='startMenuCircleClass'>");
        var img11 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startMenuCircle12.png' style='height:70%;position:absolute;left:0px;bottom:0px;' class=''>").hide();
        $(actionArea0.theElement).append(img1);
        $(actionArea0.theElement).append(img11);
        
        
        var img2 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/mainMenuButtonsPure1.png' style='height:60%;position:absolute;left:0px;top:0px;' class='startMainMenuClass'>");
        var img1Width = img1.height()-20;
        img2.height($(actionArea0.theElement).height());
        img2.width($(actionArea0.theElement).width()-img1Width);
        img2.css("left",img1Width+"px");
        $(actionArea0.theElement).append(img2);
        setTimeout(function(){
            img1.removeClass("startMenuCircleClass");
            img11.show();
            img11.addClass("startCircleBreathClass");
        },1500);

        $("#mainMenuPopupMain").click(function(){
            img2.removeClass("startMainMenuClass");
            img2.addClass("endMainMenuClass");
            $("#mainMenuPopupMain").addClass("hideMainMenuClass");
            
            setTimeout(function(){
                $("#mainMenuPopupMain").parent().trigger("mycloseaction");
            },1200);
        });
    });
    function startMenuAni(ele, width){
        var each = width/5;
        startMenuStart(ele, -width, each, 5, width);
    }
    function startMenuStart(ele, left, each, count, originalWidth){
        if(count>=0){
            setTimeout(function(){
                ele.css("left", left);
                console.log(left);
                startMenuStart(ele, left+each, each, count-1, originalWidth);
            },20);
        }else{
            ele.css("left","0px");
        }
        
    }
    </script>
</div>