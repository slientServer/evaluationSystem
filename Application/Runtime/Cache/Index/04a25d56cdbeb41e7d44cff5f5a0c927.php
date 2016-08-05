<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height; initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Mobiscroll</title>

    <!-- jQuery Mobile Include -->
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquerymobile/jquery.mobile-1.4.5.css" />
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/mobiscroll-2.16.1/css/mobiscroll.custom-2.16.1.min.css" rel="stylesheet" type="text/css" />
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquery-1.11.3.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquerymobile/jquery.mobile-1.4.5.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/ScaleBackground.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/ActionArea.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/OrientationCheck.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/PopupDialog.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/DivDialog.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/DynamicPopupGroup2.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/mobiscroll-2.16.1/js/mobiscroll.custom-2.16.1.min.js" type="text/javascript"></script>

<style>
/*#pageone {
    background-color: black;
    background-image : url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entry.jpg');
    background-repeat : no-repeat;
    background-size : 100% 100%;
}*/
</style>

<script type="text/javascript">
var imageRootPath = "/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images";
var currentRequiredOrintation = 90;
var actionAreaList = new Array();

function onPersonalInfoButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup",{}, {forceReload:true,closeButton:true});
}

function onBenefitButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("benefitMainPopup","./benefitMain",{}, {forceReload:true}, DivDialog);
}

function onProductMainButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("marketplaceMainPopup","./marketplace",{}, {forceReload:true}, DivDialog);
}

function onNewsMainButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("NewsMainPopup","./newsMain",{}, {forceReload:true,closeButton:false}, DivDialog);
}

function showUserLogin(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("userLogin","./userLogin.html",{}, {forceReload:true, closeButton:false});
}

function onStartButtonClicked(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("mainMenuPopup","./mainMenu",{}, {forceReload:true,closeButton:false, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
}

$(document).on("pageshow", function(){
    dynamicPopupGroup = new DynamicPopupGroup({rootElement:$("#pageone"),backgroundColor:"rgba(255,255,255,0)", borderColor:"rgba(255,255,255,0)", openAfterLoad:true, modal:true, transition:""});
    $(".mainPageStartButton").click(function(){
        onStartButtonClicked();
    });
    //$("#popupBasic").popup({transition : "pop"});
    
    /*var actionArea1 = new ActionArea(actionAreaList,null,{
        backgroundWidth : 1334,
        backgroundHeight : 657,
        areaWidth : 216,
        areaHeight: 88,
        areaLeft : 43,
        areaTop : 430,
        areaBackgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/PersonalInfoButton.png',
        usingShortCalculate : true,
        events : {
            click : onPersonalInfoButtonClick
        }
    });
    var actionArea2 = new ActionArea(actionAreaList,null,{
        backgroundWidth : 1334,
        backgroundHeight : 657,
        areaWidth : 216,
        areaHeight: 88,
        areaLeft : 274,
        areaTop : 430,
        areaBackgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/BenefitButton.png',
        usingShortCalculate : true,
        events : {
            click : onBenefitButtonClick
        }
    });
    var actionArea3 = new ActionArea(actionAreaList,null,{
        backgroundWidth : 1334,
        backgroundHeight : 657,
        areaWidth : 216,
        areaHeight: 88,
        areaLeft : 186,
        areaTop : 532,
        areaBackgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/ProductsButton.png',
        usingShortCalculate : true,
        events : {
            click : onProductMainButtonClick
        }
    });
    var actionArea4 = new ActionArea(actionAreaList,null,{
        backgroundWidth : 1334,
        backgroundHeight : 657,
        areaWidth : 216,
        areaHeight: 88,
        areaLeft : 415,
        areaTop : 533,
        areaBackgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/NewsButton.png',
        usingShortCalculate : true,
        events : {
            click : onNewsMainButtonClick
        }
    });*/
    var currentID = "";
    var orintationCheck = new OrientationCheck(currentRequiredOrintation, function(){
        var lastPopupID = dynamicPopupGroup.getLastPopupID();
        setTimeout(function(){
            console.log(lastPopupID);
            if(lastPopupID!=null && lastPopupID!="" && lastPopupID!="oriantationNotificationPopup"){
                dynamicPopupGroup.addNewPopup(lastPopupID, "", {}, {forceReload:false});
            }else{
                dynamicPopupGroup.closeCurrentPopup();
            }
        });
        /*var lastPopupID = currentID;
        setTimeout(function(){
            if(lastPopupID!=null && lastPopupID!="" && lastPopupID!="oriantationNotificationPopup"){
                dynamicPopupGroup._openPopup(lastPopupID, {forceReload:false});
            }else{
                dynamicPopupGroup.closeCurrentPopup();
            }
            $("#orientationChangeLayer").css("display","none");
        },0);*/
    },function(){
        dynamicPopupGroup.addNewPopup("oriantationNotificationPopup","./oriantationNotification",{}, {forceReload:false, closeButton:false}, DivDialog);
        /*currentID = dynamicPopupGroup.currentPopupID;
        dynamicPopupGroup.closeCurrentPopup(function(){
            $("#orientationChangeLayer").height($(window).height()).width($(window).width());
            $("#orientationChangeLayer").css("display","block");
        });*/
    });


    /*$( "#orientationCheckPopup" ).on({
        popupafterclose: function() {
            orintationCheck.setOritationChangeMethod();
        }
    });*/
    $(window).on("orientationchange",function(){
        orintationCheck.setOritationChangeMethod();
    });
    /*var background = new ScaleBackground({
        backgroundWidth : 1334,
        backgroundHeight : 657,
        backgroundImg : '/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entry.jpg',
        usingShortCalculate : true,
        onBackgroundImageLoad : function(){
            $(window).trigger( "orientationchange" );
        }
    });*/
    
    //dynamicPopupGroup.addNewPopup("test1","./dialogContent1.html",{openAfterLoad:true});
    /*setTimeout(function(){
        orintationCheck.setOritationChangeMethod();
    },100);*/
    /*var div = $("<div id='orientationChangeLayer'></div>").height($(window).height()).width($(window).width())
        .css("position","absolute").css("left","0px").css("top","0px")
        .css("z-index","9999")
        .css("background-image","url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/wscreennotify.png)")
        .css("background-repeat","no-repeat")
        .css("background-size","100% 100%")
        .css("background-color","rgba(0,0,0,0.5)");
    $("body").append(div);*/
    
    var isHadPhoneNumber= "<?php echo ($isHadPhoneNumber); ?>";
    if(isHadPhoneNumber){
        //Nothing to do 
    }else{
        showUserLogin();
    }
    $(window).trigger( "orientationchange" );
});

</script>
</head>
<body style="background:black;overflow:hidden;">
    <div data-role="page" id="pageone" style="width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entry.jpg');background-size: 100% 100%;">
        <div class="mainPageStartButton" style="width:12%;height:20%;position:absolute;left:25px;bottom:23px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startButton.png');background-size: 100% 100%;">
        </div>
        <div data-role="content" style='text-align:center;margin-left:auto;margin-right:auto;overflow:hidden;'>
        </div>
    </div> 
</body>
</html>