<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height; initial-scale=1, maximum-scale=1, user-scalable=0">

    <title><?php echo R('Siteinfo/info',array('title'),'Widget');?></title>
    <meta name="description" content="<?php echo R('Siteinfo/info',array('description'),'Widget');?>" />

    <!-- jQuery Mobile Include -->
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquerymobile/jquery.mobile-1.4.5.css" />
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/mobiscroll-2.16.1/css/mobiscroll.custom-2.16.1.min.css" rel="stylesheet" type="text/css" />

    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquery-1.12.3.min.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/jquerymobile/jquery.mobile-1.4.5.min.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/ScaleBackground.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/ActionArea.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/OrientationCheck.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/PopupDialog.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/DivDialog.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/customer/DynamicPopupGroup2.js"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/js/framework/mobiscroll-2.16.1/js/mobiscroll.custom-2.16.1.min.js" type="text/javascript"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="http://pingjs.qq.com/h5/stats.js" name="MTAH5" sid="500115741"></script>
<style>
/*#pageone {
    background-color: black;
    background-image : url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entry.jpg');
    background-repeat : no-repeat;
    background-size : 100% 100%;
}*/
.TheSimpsons .sizeSelectToken {
    width:60px;
    display:inline-block;
    height:40px;
    line-height:40px;
    border-radius:8px;
    border:1px dashed grey;
    text-align: center;
    background-color: white;
    margin-bottom: 20px;
    margin-right: 10px;
    font-size: 17px;

}
.TheSimpsons .sizeSelectToken.active {
    background-color: #ffd801 !important;
    border:1px solid black;
    box-shadow: 2px 2px 2px black;
}
.TheSimpsons .carousel-control,
.TheSimpsons .carousel-control:focus,
.TheSimpsons .carousel-control:hover {
    opacity: 1;
}
.TheSimpsons .carousel-indicators li.active{
    background-color: black;
    border: 1px solid black;
    width: 10px;
    height: 10px;
    border-radius: 5px;
}
.TheSimpsons .carousel-indicators li{
    background-color: white;
    border: 1px solid black;
    width: 10px;
    height: 10px;
    border-radius: 5px;
}
.TheSimpsons .textAreaOuter{
    padding-left: 0.4em;
    border-style: dashed;
    border: 1px dashed #9394cd;
    border-radius: 5px;
    display: inline-block;
    width: 70%;
    height: 45px;
    line-height: 45px;
    margin-top: 3px;
    margin-bottom: 3px;
    background-color: white;
}
.TheSimpsons .textAreaOuter input{
    background-color: transparent;
    height: 45px;
}
@-webkit-keyframes startCircleBreath{
0%{ opacity:0.1;}
50%{ opacity:1;}
100%{ opacity:0.1;}
}
.startCircleBreathClass{
    -webkit-animation:startCircleBreath 2s infinite linear;
}
@-webkit-keyframes childFloat{
0%{ left:-10px;top:0px;}
25%{ left:-12px;top:20px;}
50%{ left:0px;top:25px;}
75%{ left:5px;top:15px;}
100%{ left:-10px;top:0px;}
}
.childFloatClass{
    -webkit-animation:childFloat 4s infinite linear;
}
@-webkit-keyframes startCircleRotate{
0%{ transform:rotate(0deg); }
100%{ transform:rotate(360deg); }
}
.startCircleRotateClass{
    -webkit-animation:startCircleRotate 2s infinite linear;
}
#personalInfoTabPopupMain .greyColor{
    color: #a7acd6;
}
.TheSimpsons .greyBackgroundColor{
    /*background-color: #f5f5f5;*/
    background-color: white;
}

@-webkit-keyframes doorleft{
0%{ left: 0px; }
100%{ left: -60%; }
}
@-webkit-keyframes doorright{
0%{ left: 50%; }
100%{ left: 110%; }
}
.doorleftClass {
    -webkit-animation:doorleft 1s 1 linear;
}
.doorrightClass {
    -webkit-animation:doorright 1s 1 linear;
}
@-webkit-keyframes doora{
0%{ left:50%;top:50%;width:0%;height:0%; }
100%{ left:0%;top:0%;width:100%;height:100%; }
}
@-webkit-keyframes doorb{
0%{ left:100%;}
100%{ left:0%;}
}
@-webkit-keyframes doorbc{
0%{ opacity:0;}
100%{ opacity:1;}
}
.dooraClass{
    -webkit-animation:doora 0.3s 1 linear;
}
.doorbClass{
    -webkit-animation:doorb 0.5s 1 linear;
}
.doorcClass{
    -webkit-animation:doorc 0.5s 1 linear;
}

@-webkit-keyframes dooraa{
0%{ width:50px;height:50px;top:45%;left:0px;transform:rotate(0deg);}
100%{ width:50px;height:50px;top:45%;left:49%;transform:rotate(720deg);}
}
@-webkit-keyframes doorab{
0%{ width:50px;height:50px;top:45%;left:49%;}
100%{ width:5000px;height:5000px;top:-2300px;left:-2300px;}
}
@-webkit-keyframes doorac{
0%{ opacity:1;}
100%{ opacity:0;}
}
.dooraaClass{
    -webkit-animation:dooraa 3s 1 linear;
}
.doorabClass{
    -webkit-animation:doorab 2s 1 linear;
}
.dooracClass{
    -webkit-animation:doorac 2s 1 linear;
}

@-webkit-keyframes ttqinformation{
0%{ bottom:0px;}
50%{ bottom:-20px;}
100%{ bottom:0px;}
}
.ttqinformationClass{
    -webkit-animation:ttqinformation 0.5s 3 linear;
}
@-webkit-keyframes musicStart{
0%{ transform:rotate(6deg); }
25%{ transform:rotate(0deg); }
50%{ transform:rotate(-6deg); }
75%{ transform:rotate(0deg); }
100%{ transform:rotate(6deg); }
}
.musicStartClass{
    -webkit-animation:musicStart 2s infinite linear;
}
</style>

<script type="text/javascript">
var firstNotification = false;
var firstMessage = false;
var functionPageMapping = {};
functionPageMapping["productDetailPopup"] = {"url":"<?php echo U('WScreen/productDetail');?>","parameters":"productid","closeButton":false,"backID":"MarketPlacePopup","backURL":"<?php echo U('WScreen/marketplace');?>"};
functionPageMapping["scoreProductDetailPopup"] = {"url":"<?php echo U('WScreen/scoreproductDetail');?>","parameters":"scoreproductid","closeButton":false,"backID":"exchangeCenterPopup","backURL":"<?php echo U('WScreen/exchangeCenter');?>"};
functionPageMapping["marketPlacePopup"] = {"url":"<?php echo U('WScreen/marketplace');?>","parameters":"productid","closeButton":true,"backID":"","backURL":""};
var target = "<?php echo ($target); ?>";
var targetParameters = "<?php echo ($parameters); ?>";

var currentUserID = "<?php echo ($currentUserID); ?>";
var imageRootPath = "/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images";
var currentRequiredOrintation = 90;
var actionAreaList = new Array();

function onPersonalInfoButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true});
}

function onBenefitButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("benefitMainPopup","<?php echo U('WScreen/benefitMain');?>",{}, {forceReload:true}, DivDialog);
}

function onProductMainButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("marketplaceMainPopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:true}, DivDialog);
}

function onNewsMainButtonClick(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("NewsMainPopup","<?php echo U('WScreen/newsMain');?>",{}, {forceReload:true,closeButton:false}, DivDialog);
}

function showUserLogin(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    dynamicPopupGroup.addNewPopup("userLogin","<?php echo U('WScreen/userLogin');?>",{}, {forceReload:true, closeButton:false}, DivDialog);
}

function onStartButtonClicked(){
    /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/
    /*dynamicPopupGroup.addNewPopup("mainMenuPopup","<?php echo U('WScreen/mainMenu');?>",{}, {forceReload:true,closeButton:false, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);*/
    dynamicPopupGroup.addNewPopup("mainMenuPopup","<?php echo U('WScreen/mainMenu');?>",{}, {forceReload:true,closeButton:false, afterclose:function(){dynamicPopupGroup.currentPopupID="";}}, DivDialog);
}
function prepareWX(){
    wx.config({
        debug: false,
        appId: '<?php echo ($jsAPIData["appId"]); ?>',
        timestamp: '<?php echo ($jsAPIData["timestamp"]); ?>',
        nonceStr: '<?php echo ($jsAPIData["nonceStr"]); ?>',
        signature: '<?php echo ($jsAPIData["signature"]); ?>',
        jsApiList: [
          // 所有要调用的 API 都要加到这个列表中
          'onMenuShareTimeline',
          'onMenuShareAppMessage'
        ]
    });
    wx.error(function(res){
    })
}
function setupHelpUserShareWX(){
    wx.ready(function () {  
        wx.checkJsApi({
            jsApiList: [
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
            ],
            success: function (res) {
                wx.onMenuShareAppMessage({
                  title: 'The Simpsons',
                  desc: '来到辛普森之家帮好友加分吧！',
                  link: "<?php echo ($shareURL); ?>",
                  imgUrl: 'http://www.thesimpsonschina.com/Application/Index/View/default/Public/images/newsDetailItem1.png',
                  success: function (res) {
                  },
                  cancel: function (res) {
                    // alert('已取消');
                  },
                  fail: function (res) {
                    // alert(JSON.stringify(res));
                  }
                });

                wx.onMenuShareTimeline({
                  title: 'The Simpsons',
                  link: "<?php echo ($shareURL); ?>",
                  imgUrl: 'http://www.thesimpsonschina.com/Application/Index/View/default/Public/images/newsDetailItem1.png',
                  success: function (res) {
                  },
                  cancel: function (res) {
                    // alert('已取消');
                  },
                  fail: function (res) {
                    // alert(JSON.stringify(res));
                  }
                });
            },
            fail: function(res){
            }
        });
    });
}
function setupMainShareWX(){
    wx.ready(function () {  
        wx.checkJsApi({
            jsApiList: [
                'onMenuShareTimeline',
                'onMenuShareAppMessage'
            ],
            success: function (res) {
                wx.onMenuShareAppMessage({
                  title: 'The Simpsons',
                  desc: '欢迎来到辛普森之家',
                  link: "<?php echo ($shareMainURL); ?>",
                  imgUrl: 'http://www.thesimpsonschina.com/Application/Index/View/default/Public/images/newsDetailItem1.png',
                  success: function (res) {
                  },
                  cancel: function (res) {
                    // alert('已取消');
                  },
                  fail: function (res) {
                    // alert(JSON.stringify(res));
                  }
                });

                wx.onMenuShareTimeline({
                  title: 'The Simpsons',
                  link: "<?php echo ($shareMainURL); ?>",
                  imgUrl: 'http://www.thesimpsonschina.com/Application/Index/View/default/Public/images/newsDetailItem1.png',
                  success: function (res) {
                  },
                  cancel: function (res) {
                    // alert('已取消');
                  },
                  fail: function (res) {
                    // alert(JSON.stringify(res));
                  }
                });
            },
            fail: function(res){
            }
        });
    });
}
$(document).on("pageshow", function(){
    dynamicPopupGroup = new DynamicPopupGroup({rootElement:$("#pageone"),backgroundColor:"rgba(255,255,255,0)", borderColor:"rgba(255,255,255,0)", openAfterLoad:true, modal:true, transition:""});
    
    var wScreenActionArea0 = new ActionArea(actionAreaList, $("#pageone"),{
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
    var img1 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startMenuCircle12.png' style='height:70%;position:absolute;left:0px;bottom:0px;z-index:2;' class='startCircleRotateClass'>");
    /*var img2 = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startMenuCircle12.png' style='height:70%;position:absolute;left:0px;bottom:0px;z-index:1;' class='startCircleBreathClass'>");*/
    $(wScreenActionArea0.theElement).addClass("menuCircle");
    $(wScreenActionArea0.theElement).append(img1);
    //$(wScreenActionArea0.theElement).append(img2);
    //$(wScreenActionArea0.theElement).css("bottom","20px").css("top","");
    $(wScreenActionArea0.theElement).click(function(){
        onStartButtonClicked();
    });

    var wScreenActionArea1 = new ActionArea(actionAreaList, $("#pageone"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 480,
            areaHeight: 510,
            areaLeft : 1480,
            areaTop : -80,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
            }
        });
    var imgchild = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entryinner.png' style='width:100;height:100%;position:relative;' class='childFloatClass'>");
    $(wScreenActionArea1.theElement).append(imgchild);

    var wScreenActionArea2 = new ActionArea(actionAreaList, $("#pageone"),{
            backgroundWidth : 1920,
            backgroundHeight : 946,
            areaWidth : 93,
            areaHeight: 75,
            areaLeft : 725,
            areaTop : 250,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
            }
        });
    var sleep1 = $("<img class='wscreenSleep1' src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/sleep1.png' style='position:absolute;left:0px;top:0px;width:100%;height:100%'>");
    var sleep2 = $("<img class='wscreenSleep2' src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/sleep2.png' style='position:absolute;left:0px;top:0px;width:100%;height:100%'>");
    var sleep3 = $("<img class='wscreenSleep3' src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/sleep3.png' style='position:absolute;left:0px;top:0px;width:100%;height:100%'>");
    $(wScreenActionArea2.theElement).append(sleep1);
    $(wScreenActionArea2.theElement).append(sleep2);
    $(wScreenActionArea2.theElement).append(sleep3);
    var sleepNum = 0;
    setInterval(function(){
        switch(sleepNum){
            case 0:
                $(".wscreenSleep1").show();  
                $(".wscreenSleep2").hide();
                $(".wscreenSleep3").hide();
                break;
            case 1:
                $(".wscreenSleep1").hide();  
                $(".wscreenSleep2").show();
                $(".wscreenSleep3").hide();
                break;
            case 2:
                $(".wscreenSleep1").hide();  
                $(".wscreenSleep2").hide();
                $(".wscreenSleep3").show();
                break;
        }
        sleepNum++;
        if(sleepNum>2){
            sleepNum=0;
        }
    },600)
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
    var wScreenActionArea3 = new ActionArea(actionAreaList, $("#pageone"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 1695,
            areaHeight: 286,
            areaLeft : 30,
            areaTop : 420,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
            }
        });
    var imgttqinformation = $("<img src='/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/ttqinformation.png' style='height:70%;position:absolute;left:0px;bottom:0px;z-index:2;' class=''>");
    $(wScreenActionArea3.theElement).append(imgttqinformation).hide();

    var currentID = "";
    function positionCircle(){
        var windowH = $(window).height();
        var circleHeight = $(".menuCircle").height();
        var top = windowH-circleHeight-20;
        //$(".menuCircle").css("position","absolute").css("top",top+"px");
    }
    var orintationCheck = new OrientationCheck(currentRequiredOrintation, function(){
        //var lastPopupID = dynamicPopupGroup.getLastPopupID();
        //$("#oriantationNotificationPopupMain").hide();
        setTimeout(function(){
           /* console.log(lastPopupID);
            if(lastPopupID!=null && lastPopupID!="" && lastPopupID!="oriantationNotificationPopup"){
                dynamicPopupGroup.addNewPopup(lastPopupID, "", {}, {forceReload:false});
            }else{
                dynamicPopupGroup.closeCurrentPopup();
            }*/
            $("#oriantationNotificationPopupMain").hide();
            if(firstNotification==false){
                firstNotification = true;
                $(".notificationDoor").show();
                $(".notificationDoor1").removeClass("dooraaClass").addClass("dooraaClass").show();
                setTimeout(function(){
                    $(".notificationDoor1").removeClass("dooraaClass").removeClass("doorabClass").addClass("doorabClass");
                },2800);
                setTimeout(function(){
                    $(".notificationDoor").removeClass("dooracClass").removeClass("dooracClass").addClass("dooracClass");
                },3000);
                setTimeout(function(){
                    $(".notificationDoor").fadeOut();
                },4800);
                
                /*$(".notificationDoor1").removeClass("dooraClass").addClass("dooraClass").show();
                setTimeout(function(){
                    $(".notificationDoor2").removeClass("doorbClass").addClass("doorbClass").show();
                },500);
                setTimeout(function(){
                    $(".notificationDoor3").removeClass("doorcClass").addClass("doorcClass").show();
                },1500);
                setTimeout(function(){
                    $(".notificationDoor").fadeOut();
                    $(".notificationDoor1").fadeOut();
                    $(".notificationDoor2").fadeOut();
                    $(".notificationDoor3").fadeOut();
                },3500);*/
                setTimeout(function(){
                    $(wScreenActionArea3.theElement).fadeIn().find("img").removeClass("ttqinformationClass").addClass("ttqinformationClass");
                },5000);
                setTimeout(function(){
                    $(wScreenActionArea3.theElement).fadeOut();
                },11000);
            }
            if(typeof oritationMyFunction=="function"){
                setTimeout(function(){
                    oritationMyFunction();
                },100);
            }
            
            
            positionCircle();
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
        setTimeout(function(){
            if(typeof oritationOpenMyFunction=="function"){
                oritationOpenMyFunction();
            }
            $("#oriantationNotificationPopupMain").show();
            var height = $(window).height();
            var width = $(window).width();
            $("#oriantationNotificationPopupMain").css("height", height+"px");
            $("#oriantationNotificationPopupMain").css("width", width+"px");

            $("#oriantationNotificationPopupMain").width(width);
            $("#oriantationNotificationPopupMain").height(height);

            var left = ($(window).width()-$("#oriantationNotificationPopupMain img").width())/2;
            $("#oriantationNotificationPopupMain img").css("left",left).css("top","37%");
        });
        setTimeout(function(){
            var height = $(window).height();
            var width = $(window).width();
            $("#oriantationNotificationPopupMain").css("height", height+"px");
            $("#oriantationNotificationPopupMain").css("width", width+"px");

            $("#oriantationNotificationPopupMain").width(width);
            $("#oriantationNotificationPopupMain").height(height);

            var left = ($(window).width()-$("#oriantationNotificationPopupMain img").width())/2;
            $("#oriantationNotificationPopupMain img").css("left",left).css("top","37%");
        },500);
        
        
        
        /*dynamicPopupGroup.addNewPopup("oriantationNotificationPopup","<?php echo U('WScreen/oriantationNotification');?>",{}, {forceReload:false, closeButton:false}, DivDialog);*/
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
        if(target!=null && target!=""){
            var functionToTriggle = functionPageMapping[target];
            var functionToTriggleURL = functionToTriggle.url;
            var functionToTriggleParameter = functionToTriggle.parameters;
            var functionToTriggleCloseButton = functionToTriggle.closeButton;
            var functionToTriggleBackID = functionToTriggle.backID;
            var functionToTriggleBackURL = functionToTriggle.backURL;
            var tempParameter = {};
            tempParameter[functionToTriggleParameter]=targetParameters;
            dynamicPopupGroup.addNewPopup(target,functionToTriggleURL,tempParameter, {forceReload:true,closeButton:functionToTriggleCloseButton,afterclose: function(){
                        dynamicPopupGroup.addNewPopup(functionToTriggleBackID,functionToTriggleBackURL,{}, {forceReload:false}, DivDialog);
                    }
                }, DivDialog);
        }
    }else{
        showUserLogin();
    }
    $(window).trigger( "orientationchange" );
    setInterval(function(){
        if($(window).width()>$(window).height()){
            $("#oriantationNotificationPopupMain").hide();
        }else{
            $(window).trigger( "orientationchange" );
        }
    },1000);
    setTimeout(function(){
        try{
            prepareWX();
            setupMainShareWX();
        }catch(e){
        }
    },100);
    setTimeout(function(){

    },1000);
    $(".musicButton").click(function(){
        toggleMusic();
    });
});
function toggleMusic(){
    var start = $(".musicButton").attr("start");
    if(start=="on"){
        if(typeof $("#background_music")[0].pause=="function"){
            $("#background_music")[0].pause();
        }else{
            $("#background_music").attr("src","");
        }
        $(".musicButton").attr("start","off");
        $(".musicButton").removeClass("musicStartClass");
    }else{
        if(typeof $("#background_music")[0].play=="function"){
            $("#background_music")[0].play();
        }else{
            $("#background_music").attr("src","/workspace/simpsons/trunk/server/Application/Index/View/default/Public/music/xps111.mp3");
        }
        $(".musicButton").attr("start","on");
        $(".musicButton").addClass("musicStartClass");
    }
}
</script>
</head>
<body style="background:black;overflow:hidden;" class="TheSimpsons">
<audio autoplay="autoplay" preload="preload" id="background_music" loop="loop">
    <source src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/music/xps111.mp3" type="audio/mpeg" />
</audio>
<div style="background-color:black;position:absolute;left:0px;top:0px;width:100%;height:100%;z-index:9999;" id="oriantationNotificationPopupMain">
    <style>
@-webkit-keyframes oriantationChangeShake{
0%{ transform:rotate(-30deg); }
50%{ transform:rotate(30deg); }
100%{ transform:rotate(-30deg); }
}
.oriantationChangeShakeClass{
    -webkit-animation:oriantationChangeShake 0.5s infinite linear;
}
    </style>
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
        var left = ($(window).width()-$("#oriantationNotificationPopupMain img").width())/2;
        $("#oriantationNotificationPopupMain img").css("left",left).css("top","37%");
    });

    </script>
    <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/wscreennotifycenter.png" style="width:20%;position:absolute;" class="oriantationChangeShakeClass">
</div>
<script>
$(window).trigger( "orientationchange" );
</script>
<div id="addressDBAll" style="position:absolute;left:0px;top:0px;display:none;">
<li><span>北京市</span><ul><li><span>北京市</span><ul><li><span>东城区</span></li></ul><ul><li><span>西城区</span></li></ul><ul><li><span>崇文区</span></li></ul><ul><li><span>宣武区</span></li></ul><ul><li><span>朝阳区</span></li></ul><ul><li><span>丰台区</span></li></ul><ul><li><span>石景山区</span></li></ul><ul><li><span>海淀区</span></li></ul><ul><li><span>门头沟区</span></li></ul><ul><li><span>房山区</span></li></ul><ul><li><span>通州区</span></li></ul><ul><li><span>顺义区</span></li></ul><ul><li><span>昌平区</span></li></ul><ul><li><span>大兴区</span></li></ul><ul><li><span>怀柔区</span></li></ul><ul><li><span>平谷区</span></li></ul><ul><li><span>密云县</span></li></ul><ul><li><span>延庆县</span></li></ul></li></ul></li><li><span>天津市</span><ul><li><span>天津市</span><ul><li><span>和平区</span></li></ul><ul><li><span>河东区</span></li></ul><ul><li><span>河西区</span></li></ul><ul><li><span>南开区</span></li></ul><ul><li><span>河北区</span></li></ul><ul><li><span>红桥区</span></li></ul><ul><li><span>塘沽区</span></li></ul><ul><li><span>汉沽区</span></li></ul><ul><li><span>大港区</span></li></ul><ul><li><span>东丽区</span></li></ul><ul><li><span>西青区</span></li></ul><ul><li><span>津南区</span></li></ul><ul><li><span>北辰区</span></li></ul><ul><li><span>武清区</span></li></ul><ul><li><span>宝坻区</span></li></ul><ul><li><span>宁河县</span></li></ul><ul><li><span>静海县</span></li></ul><ul><li><span>蓟县</span></li></ul></li></ul></li><li><span>河北省</span><ul><li><span>石家庄市</span><ul><li><span>长安区</span></li></ul><ul><li><span>桥东区</span></li></ul><ul><li><span>桥西区</span></li></ul><ul><li><span>新华区</span></li></ul><ul><li><span>井陉矿区</span></li></ul><ul><li><span>裕华区</span></li></ul><ul><li><span>井陉县</span></li></ul><ul><li><span>正定县</span></li></ul><ul><li><span>栾城县</span></li></ul><ul><li><span>行唐县</span></li></ul><ul><li><span>灵寿县</span></li></ul><ul><li><span>高邑县</span></li></ul><ul><li><span>深泽县</span></li></ul><ul><li><span>赞皇县</span></li></ul><ul><li><span>无极县</span></li></ul><ul><li><span>平山县</span></li></ul><ul><li><span>元氏县</span></li></ul><ul><li><span>赵县</span></li></ul><ul><li><span>辛集市</span></li></ul><ul><li><span>藁城市</span></li></ul><ul><li><span>晋州市</span></li></ul><ul><li><span>新乐市</span></li></ul><ul><li><span>鹿泉市</span></li></ul></li></ul><ul><li><span>唐山市</span><ul><li><span>路南区</span></li></ul><ul><li><span>路北区</span></li></ul><ul><li><span>古冶区</span></li></ul><ul><li><span>开平区</span></li></ul><ul><li><span>丰南区</span></li></ul><ul><li><span>丰润区</span></li></ul><ul><li><span>滦县</span></li></ul><ul><li><span>滦南县</span></li></ul><ul><li><span>乐亭县</span></li></ul><ul><li><span>迁西县</span></li></ul><ul><li><span>玉田县</span></li></ul><ul><li><span>唐海县</span></li></ul><ul><li><span>遵化市</span></li></ul><ul><li><span>迁安市</span></li></ul></li></ul><ul><li><span>秦皇岛市</span><ul><li><span>海港区</span></li></ul><ul><li><span>山海关区</span></li></ul><ul><li><span>北戴河区</span></li></ul><ul><li><span>青龙满族自治县</span></li></ul><ul><li><span>昌黎县</span></li></ul><ul><li><span>抚宁县</span></li></ul><ul><li><span>卢龙县</span></li></ul></li></ul><ul><li><span>邯郸市</span><ul><li><span>邯山区</span></li></ul><ul><li><span>丛台区</span></li></ul><ul><li><span>复兴区</span></li></ul><ul><li><span>峰峰矿区</span></li></ul><ul><li><span>邯郸县</span></li></ul><ul><li><span>临漳县</span></li></ul><ul><li><span>成安县</span></li></ul><ul><li><span>大名县</span></li></ul><ul><li><span>涉县</span></li></ul><ul><li><span>磁县</span></li></ul><ul><li><span>肥乡县</span></li></ul><ul><li><span>永年县</span></li></ul><ul><li><span>邱县</span></li></ul><ul><li><span>鸡泽县</span></li></ul><ul><li><span>广平县</span></li></ul><ul><li><span>馆陶县</span></li></ul><ul><li><span>魏县</span></li></ul><ul><li><span>曲周县</span></li></ul><ul><li><span>武安市</span></li></ul></li></ul><ul><li><span>邢台市</span><ul><li><span>桥东区</span></li></ul><ul><li><span>桥西区</span></li></ul><ul><li><span>邢台县</span></li></ul><ul><li><span>临城县</span></li></ul><ul><li><span>内丘县</span></li></ul><ul><li><span>柏乡县</span></li></ul><ul><li><span>隆尧县</span></li></ul><ul><li><span>任县</span></li></ul><ul><li><span>南和县</span></li></ul><ul><li><span>宁晋县</span></li></ul><ul><li><span>巨鹿县</span></li></ul><ul><li><span>新河县</span></li></ul><ul><li><span>广宗县</span></li></ul><ul><li><span>平乡县</span></li></ul><ul><li><span>威县</span></li></ul><ul><li><span>清河县</span></li></ul><ul><li><span>临西县</span></li></ul><ul><li><span>南宫市</span></li></ul><ul><li><span>沙河市</span></li></ul></li></ul><ul><li><span>保定市</span><ul><li><span>新市区</span></li></ul><ul><li><span>北市区</span></li></ul><ul><li><span>南市区</span></li></ul><ul><li><span>满城县</span></li></ul><ul><li><span>清苑县</span></li></ul><ul><li><span>涞水县</span></li></ul><ul><li><span>阜平县</span></li></ul><ul><li><span>徐水县</span></li></ul><ul><li><span>定兴县</span></li></ul><ul><li><span>唐县</span></li></ul><ul><li><span>高阳县</span></li></ul><ul><li><span>容城县</span></li></ul><ul><li><span>涞源县</span></li></ul><ul><li><span>望都县</span></li></ul><ul><li><span>安新县</span></li></ul><ul><li><span>易县</span></li></ul><ul><li><span>曲阳县</span></li></ul><ul><li><span>蠡县</span></li></ul><ul><li><span>顺平县</span></li></ul><ul><li><span>博野县</span></li></ul><ul><li><span>雄县</span></li></ul><ul><li><span>涿州市</span></li></ul><ul><li><span>定州市</span></li></ul><ul><li><span>安国市</span></li></ul><ul><li><span>高碑店市</span></li></ul></li></ul><ul><li><span>张家口市</span><ul><li><span>桥东区</span></li></ul><ul><li><span>桥西区</span></li></ul><ul><li><span>宣化区</span></li></ul><ul><li><span>下花园区</span></li></ul><ul><li><span>宣化县</span></li></ul><ul><li><span>张北县</span></li></ul><ul><li><span>康保县</span></li></ul><ul><li><span>沽源县</span></li></ul><ul><li><span>尚义县</span></li></ul><ul><li><span>蔚县</span></li></ul><ul><li><span>阳原县</span></li></ul><ul><li><span>怀安县</span></li></ul><ul><li><span>万全县</span></li></ul><ul><li><span>怀来县</span></li></ul><ul><li><span>涿鹿县</span></li></ul><ul><li><span>赤城县</span></li></ul><ul><li><span>崇礼县</span></li></ul></li></ul><ul><li><span>承德市</span><ul><li><span>双桥区</span></li></ul><ul><li><span>双滦区</span></li></ul><ul><li><span>鹰手营子矿区</span></li></ul><ul><li><span>承德县</span></li></ul><ul><li><span>兴隆县</span></li></ul><ul><li><span>平泉县</span></li></ul><ul><li><span>滦平县</span></li></ul><ul><li><span>隆化县</span></li></ul><ul><li><span>丰宁满族自治县</span></li></ul><ul><li><span>宽城满族自治县</span></li></ul><ul><li><span>围场满族蒙古族自治县</span></li></ul></li></ul><ul><li><span>沧州市</span><ul><li><span>新华区</span></li></ul><ul><li><span>运河区</span></li></ul><ul><li><span>沧县</span></li></ul><ul><li><span>青县</span></li></ul><ul><li><span>东光县</span></li></ul><ul><li><span>海兴县</span></li></ul><ul><li><span>盐山县</span></li></ul><ul><li><span>肃宁县</span></li></ul><ul><li><span>南皮县</span></li></ul><ul><li><span>吴桥县</span></li></ul><ul><li><span>献县</span></li></ul><ul><li><span>孟村回族自治县</span></li></ul><ul><li><span>泊头市</span></li></ul><ul><li><span>任丘市</span></li></ul><ul><li><span>黄骅市</span></li></ul><ul><li><span>河间市</span></li></ul></li></ul><ul><li><span>廊坊市</span><ul><li><span>安次区</span></li></ul><ul><li><span>广阳区</span></li></ul><ul><li><span>固安县</span></li></ul><ul><li><span>永清县</span></li></ul><ul><li><span>香河县</span></li></ul><ul><li><span>大城县</span></li></ul><ul><li><span>文安县</span></li></ul><ul><li><span>大厂回族自治县</span></li></ul><ul><li><span>霸州市</span></li></ul><ul><li><span>三河市</span></li></ul></li></ul><ul><li><span>衡水市</span><ul><li><span>桃城区</span></li></ul><ul><li><span>枣强县</span></li></ul><ul><li><span>武邑县</span></li></ul><ul><li><span>武强县</span></li></ul><ul><li><span>饶阳县</span></li></ul><ul><li><span>安平县</span></li></ul><ul><li><span>故城县</span></li></ul><ul><li><span>景县</span></li></ul><ul><li><span>阜城县</span></li></ul><ul><li><span>冀州市</span></li></ul><ul><li><span>深州市</span></li></ul></li></ul></li><li><span>山西省</span><ul><li><span>太原市</span><ul><li><span>小店区</span></li></ul><ul><li><span>迎泽区</span></li></ul><ul><li><span>杏花岭区</span></li></ul><ul><li><span>尖草坪区</span></li></ul><ul><li><span>万柏林区</span></li></ul><ul><li><span>晋源区</span></li></ul><ul><li><span>清徐县</span></li></ul><ul><li><span>阳曲县</span></li></ul><ul><li><span>娄烦县</span></li></ul><ul><li><span>古交市</span></li></ul></li></ul><ul><li><span>大同市</span><ul><li><span>城区</span></li></ul><ul><li><span>矿区</span></li></ul><ul><li><span>南郊区</span></li></ul><ul><li><span>新荣区</span></li></ul><ul><li><span>阳高县</span></li></ul><ul><li><span>天镇县</span></li></ul><ul><li><span>广灵县</span></li></ul><ul><li><span>灵丘县</span></li></ul><ul><li><span>浑源县</span></li></ul><ul><li><span>左云县</span></li></ul><ul><li><span>大同县</span></li></ul></li></ul><ul><li><span>阳泉市</span><ul><li><span>城区</span></li></ul><ul><li><span>矿区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>平定县</span></li></ul><ul><li><span>盂县</span></li></ul></li></ul><ul><li><span>长治市</span><ul><li><span>城区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>长治县</span></li></ul><ul><li><span>襄垣县</span></li></ul><ul><li><span>屯留县</span></li></ul><ul><li><span>平顺县</span></li></ul><ul><li><span>黎城县</span></li></ul><ul><li><span>壶关县</span></li></ul><ul><li><span>长子县</span></li></ul><ul><li><span>武乡县</span></li></ul><ul><li><span>沁县</span></li></ul><ul><li><span>沁源县</span></li></ul><ul><li><span>潞城市</span></li></ul></li></ul><ul><li><span>晋城市</span><ul><li><span>城区</span></li></ul><ul><li><span>沁水县</span></li></ul><ul><li><span>阳城县</span></li></ul><ul><li><span>陵川县</span></li></ul><ul><li><span>泽州县</span></li></ul><ul><li><span>高平市</span></li></ul></li></ul><ul><li><span>朔州市</span><ul><li><span>朔城区</span></li></ul><ul><li><span>平鲁区</span></li></ul><ul><li><span>山阴县</span></li></ul><ul><li><span>应县</span></li></ul><ul><li><span>右玉县</span></li></ul><ul><li><span>怀仁县</span></li></ul></li></ul><ul><li><span>晋中市</span><ul><li><span>榆次区</span></li></ul><ul><li><span>榆社县</span></li></ul><ul><li><span>左权县</span></li></ul><ul><li><span>和顺县</span></li></ul><ul><li><span>昔阳县</span></li></ul><ul><li><span>寿阳县</span></li></ul><ul><li><span>太谷县</span></li></ul><ul><li><span>祁县</span></li></ul><ul><li><span>平遥县</span></li></ul><ul><li><span>灵石县</span></li></ul><ul><li><span>介休市</span></li></ul></li></ul><ul><li><span>运城市</span><ul><li><span>盐湖区</span></li></ul><ul><li><span>临猗县</span></li></ul><ul><li><span>万荣县</span></li></ul><ul><li><span>闻喜县</span></li></ul><ul><li><span>稷山县</span></li></ul><ul><li><span>新绛县</span></li></ul><ul><li><span>绛县</span></li></ul><ul><li><span>垣曲县</span></li></ul><ul><li><span>夏县</span></li></ul><ul><li><span>平陆县</span></li></ul><ul><li><span>芮城县</span></li></ul><ul><li><span>永济市</span></li></ul><ul><li><span>河津市</span></li></ul></li></ul><ul><li><span>忻州市</span><ul><li><span>忻府区</span></li></ul><ul><li><span>定襄县</span></li></ul><ul><li><span>五台县</span></li></ul><ul><li><span>代县</span></li></ul><ul><li><span>繁峙县</span></li></ul><ul><li><span>宁武县</span></li></ul><ul><li><span>静乐县</span></li></ul><ul><li><span>神池县</span></li></ul><ul><li><span>五寨县</span></li></ul><ul><li><span>岢岚县</span></li></ul><ul><li><span>河曲县</span></li></ul><ul><li><span>保德县</span></li></ul><ul><li><span>偏关县</span></li></ul><ul><li><span>原平市</span></li></ul></li></ul><ul><li><span>临汾市</span><ul><li><span>尧都区</span></li></ul><ul><li><span>曲沃县</span></li></ul><ul><li><span>翼城县</span></li></ul><ul><li><span>襄汾县</span></li></ul><ul><li><span>洪洞县</span></li></ul><ul><li><span>古县</span></li></ul><ul><li><span>安泽县</span></li></ul><ul><li><span>浮山县</span></li></ul><ul><li><span>吉县</span></li></ul><ul><li><span>乡宁县</span></li></ul><ul><li><span>大宁县</span></li></ul><ul><li><span>隰县</span></li></ul><ul><li><span>永和县</span></li></ul><ul><li><span>蒲县</span></li></ul><ul><li><span>汾西县</span></li></ul><ul><li><span>侯马市</span></li></ul><ul><li><span>霍州市</span></li></ul></li></ul><ul><li><span>吕梁市</span><ul><li><span>离石区</span></li></ul><ul><li><span>文水县</span></li></ul><ul><li><span>交城县</span></li></ul><ul><li><span>兴县</span></li></ul><ul><li><span>临县</span></li></ul><ul><li><span>柳林县</span></li></ul><ul><li><span>石楼县</span></li></ul><ul><li><span>岚县</span></li></ul><ul><li><span>方山县</span></li></ul><ul><li><span>中阳县</span></li></ul><ul><li><span>交口县</span></li></ul><ul><li><span>孝义市</span></li></ul><ul><li><span>汾阳市</span></li></ul></li></ul></li><li><span>内蒙古自治区</span><ul><li><span>呼和浩特市</span><ul><li><span>新城区</span></li></ul><ul><li><span>回民区</span></li></ul><ul><li><span>玉泉区</span></li></ul><ul><li><span>赛罕区</span></li></ul><ul><li><span>土默特左旗</span></li></ul><ul><li><span>托克托县</span></li></ul><ul><li><span>和林格尔县</span></li></ul><ul><li><span>清水河县</span></li></ul><ul><li><span>武川县</span></li></ul></li></ul><ul><li><span>包头市</span><ul><li><span>东河区</span></li></ul><ul><li><span>昆都仑区</span></li></ul><ul><li><span>青山区</span></li></ul><ul><li><span>石拐区</span></li></ul><ul><li><span>白云矿区</span></li></ul><ul><li><span>九原区</span></li></ul><ul><li><span>土默特右旗</span></li></ul><ul><li><span>固阳县</span></li></ul><ul><li><span>达尔罕茂明安联合旗</span></li></ul></li></ul><ul><li><span>乌海市</span><ul><li><span>海勃湾区</span></li></ul><ul><li><span>海南区</span></li></ul><ul><li><span>乌达区</span></li></ul></li></ul><ul><li><span>赤峰市</span><ul><li><span>红山区</span></li></ul><ul><li><span>元宝山区</span></li></ul><ul><li><span>松山区</span></li></ul><ul><li><span>阿鲁科尔沁旗</span></li></ul><ul><li><span>巴林左旗</span></li></ul><ul><li><span>巴林右旗</span></li></ul><ul><li><span>林西县</span></li></ul><ul><li><span>克什克腾旗</span></li></ul><ul><li><span>翁牛特旗</span></li></ul><ul><li><span>喀喇沁旗</span></li></ul><ul><li><span>宁城县</span></li></ul><ul><li><span>敖汉旗</span></li></ul></li></ul><ul><li><span>通辽市</span><ul><li><span>科尔沁区</span></li></ul><ul><li><span>科尔沁左翼中旗</span></li></ul><ul><li><span>科尔沁左翼后旗</span></li></ul><ul><li><span>开鲁县</span></li></ul><ul><li><span>库伦旗</span></li></ul><ul><li><span>奈曼旗</span></li></ul><ul><li><span>扎鲁特旗</span></li></ul><ul><li><span>霍林郭勒市</span></li></ul></li></ul><ul><li><span>鄂尔多斯市</span><ul><li><span>东胜区</span></li></ul><ul><li><span>达拉特旗</span></li></ul><ul><li><span>准格尔旗</span></li></ul><ul><li><span>鄂托克前旗</span></li></ul><ul><li><span>鄂托克旗</span></li></ul><ul><li><span>杭锦旗</span></li></ul><ul><li><span>乌审旗</span></li></ul><ul><li><span>伊金霍洛旗</span></li></ul></li></ul><ul><li><span>呼伦贝尔市</span><ul><li><span>海拉尔区</span></li></ul><ul><li><span>阿荣旗</span></li></ul><ul><li><span>莫力达瓦达斡尔族自治旗</span></li></ul><ul><li><span>鄂伦春自治旗</span></li></ul><ul><li><span>鄂温克族自治旗</span></li></ul><ul><li><span>陈巴尔虎旗</span></li></ul><ul><li><span>新巴尔虎左旗</span></li></ul><ul><li><span>新巴尔虎右旗</span></li></ul><ul><li><span>满洲里市</span></li></ul><ul><li><span>牙克石市</span></li></ul><ul><li><span>扎兰屯市</span></li></ul><ul><li><span>额尔古纳市</span></li></ul><ul><li><span>根河市</span></li></ul></li></ul><ul><li><span>巴彦淖尔市</span><ul><li><span>临河区</span></li></ul><ul><li><span>五原县</span></li></ul><ul><li><span>磴口县</span></li></ul><ul><li><span>乌拉特前旗</span></li></ul><ul><li><span>乌拉特中旗</span></li></ul><ul><li><span>乌拉特后旗</span></li></ul><ul><li><span>杭锦后旗</span></li></ul></li></ul><ul><li><span>乌兰察布市</span><ul><li><span>集宁区</span></li></ul><ul><li><span>卓资县</span></li></ul><ul><li><span>化德县</span></li></ul><ul><li><span>商都县</span></li></ul><ul><li><span>兴和县</span></li></ul><ul><li><span>凉城县</span></li></ul><ul><li><span>察哈尔右翼前旗</span></li></ul><ul><li><span>察哈尔右翼中旗</span></li></ul><ul><li><span>察哈尔右翼后旗</span></li></ul><ul><li><span>四子王旗</span></li></ul><ul><li><span>丰镇市</span></li></ul></li></ul><ul><li><span>兴安盟</span><ul><li><span>乌兰浩特市</span></li></ul><ul><li><span>阿尔山市</span></li></ul><ul><li><span>科尔沁右翼前旗</span></li></ul><ul><li><span>科尔沁右翼中旗</span></li></ul><ul><li><span>扎赉特旗</span></li></ul><ul><li><span>突泉县</span></li></ul></li></ul><ul><li><span>锡林郭勒盟</span><ul><li><span>二连浩特市</span></li></ul><ul><li><span>锡林浩特市</span></li></ul><ul><li><span>阿巴嘎旗</span></li></ul><ul><li><span>苏尼特左旗</span></li></ul><ul><li><span>苏尼特右旗</span></li></ul><ul><li><span>东乌珠穆沁旗</span></li></ul><ul><li><span>西乌珠穆沁旗</span></li></ul><ul><li><span>太仆寺旗</span></li></ul><ul><li><span>镶黄旗</span></li></ul><ul><li><span>正镶白旗</span></li></ul><ul><li><span>正蓝旗</span></li></ul><ul><li><span>多伦县</span></li></ul></li></ul><ul><li><span>阿拉善盟</span><ul><li><span>阿拉善左旗</span></li></ul><ul><li><span>阿拉善右旗</span></li></ul><ul><li><span>额济纳旗</span></li></ul></li></ul></li><li><span>辽宁省</span><ul><li><span>沈阳市</span><ul><li><span>和平区</span></li></ul><ul><li><span>沈河区</span></li></ul><ul><li><span>大东区</span></li></ul><ul><li><span>皇姑区</span></li></ul><ul><li><span>铁西区</span></li></ul><ul><li><span>苏家屯区</span></li></ul><ul><li><span>东陵区</span></li></ul><ul><li><span>新城子区</span></li></ul><ul><li><span>于洪区</span></li></ul><ul><li><span>辽中县</span></li></ul><ul><li><span>康平县</span></li></ul><ul><li><span>法库县</span></li></ul><ul><li><span>新民市</span></li></ul></li></ul><ul><li><span>大连市</span><ul><li><span>中山区</span></li></ul><ul><li><span>西岗区</span></li></ul><ul><li><span>沙河口区</span></li></ul><ul><li><span>甘井子区</span></li></ul><ul><li><span>旅顺口区</span></li></ul><ul><li><span>金州区</span></li></ul><ul><li><span>长海县</span></li></ul><ul><li><span>瓦房店市</span></li></ul><ul><li><span>普兰店市</span></li></ul><ul><li><span>庄河市</span></li></ul></li></ul><ul><li><span>鞍山市</span><ul><li><span>铁东区</span></li></ul><ul><li><span>铁西区</span></li></ul><ul><li><span>立山区</span></li></ul><ul><li><span>千山区</span></li></ul><ul><li><span>台安县</span></li></ul><ul><li><span>岫岩满族自治县</span></li></ul><ul><li><span>海城市</span></li></ul></li></ul><ul><li><span>抚顺市</span><ul><li><span>新抚区</span></li></ul><ul><li><span>东洲区</span></li></ul><ul><li><span>望花区</span></li></ul><ul><li><span>顺城区</span></li></ul><ul><li><span>抚顺县</span></li></ul><ul><li><span>新宾满族自治县</span></li></ul><ul><li><span>清原满族自治县</span></li></ul></li></ul><ul><li><span>本溪市</span><ul><li><span>平山区</span></li></ul><ul><li><span>溪湖区</span></li></ul><ul><li><span>明山区</span></li></ul><ul><li><span>南芬区</span></li></ul><ul><li><span>本溪满族自治县</span></li></ul><ul><li><span>桓仁满族自治县</span></li></ul></li></ul><ul><li><span>丹东市</span><ul><li><span>元宝区</span></li></ul><ul><li><span>振兴区</span></li></ul><ul><li><span>振安区</span></li></ul><ul><li><span>宽甸满族自治县</span></li></ul><ul><li><span>东港市</span></li></ul><ul><li><span>凤城市</span></li></ul></li></ul><ul><li><span>锦州市</span><ul><li><span>古塔区</span></li></ul><ul><li><span>凌河区</span></li></ul><ul><li><span>太和区</span></li></ul><ul><li><span>黑山县</span></li></ul><ul><li><span>义县</span></li></ul><ul><li><span>凌海市</span></li></ul><ul><li><span>北宁市</span></li></ul></li></ul><ul><li><span>营口市</span><ul><li><span>站前区</span></li></ul><ul><li><span>西市区</span></li></ul><ul><li><span>鲅鱼圈区</span></li></ul><ul><li><span>老边区</span></li></ul><ul><li><span>盖州市</span></li></ul><ul><li><span>大石桥市</span></li></ul></li></ul><ul><li><span>阜新市</span><ul><li><span>海州区</span></li></ul><ul><li><span>新邱区</span></li></ul><ul><li><span>太平区</span></li></ul><ul><li><span>清河门区</span></li></ul><ul><li><span>细河区</span></li></ul><ul><li><span>阜新蒙古族自治县</span></li></ul><ul><li><span>彰武县</span></li></ul></li></ul><ul><li><span>辽阳市</span><ul><li><span>白塔区</span></li></ul><ul><li><span>文圣区</span></li></ul><ul><li><span>宏伟区</span></li></ul><ul><li><span>弓长岭区</span></li></ul><ul><li><span>太子河区</span></li></ul><ul><li><span>辽阳县</span></li></ul><ul><li><span>灯塔市</span></li></ul></li></ul><ul><li><span>盘锦市</span><ul><li><span>双台子区</span></li></ul><ul><li><span>兴隆台区</span></li></ul><ul><li><span>大洼县</span></li></ul><ul><li><span>盘山县</span></li></ul></li></ul><ul><li><span>铁岭市</span><ul><li><span>银州区</span></li></ul><ul><li><span>清河区</span></li></ul><ul><li><span>铁岭县</span></li></ul><ul><li><span>西丰县</span></li></ul><ul><li><span>昌图县</span></li></ul><ul><li><span>调兵山市</span></li></ul><ul><li><span>开原市</span></li></ul></li></ul><ul><li><span>朝阳市</span><ul><li><span>双塔区</span></li></ul><ul><li><span>龙城区</span></li></ul><ul><li><span>朝阳县</span></li></ul><ul><li><span>建平县</span></li></ul><ul><li><span>喀喇沁左翼蒙古族自治县</span></li></ul><ul><li><span>北票市</span></li></ul><ul><li><span>凌源市</span></li></ul></li></ul><ul><li><span>葫芦岛市</span><ul><li><span>连山区</span></li></ul><ul><li><span>龙港区</span></li></ul><ul><li><span>南票区</span></li></ul><ul><li><span>绥中县</span></li></ul><ul><li><span>建昌县</span></li></ul><ul><li><span>兴城市</span></li></ul></li></ul></li><li><span>吉林省</span><ul><li><span>长春市</span><ul><li><span>南关区</span></li></ul><ul><li><span>宽城区</span></li></ul><ul><li><span>朝阳区</span></li></ul><ul><li><span>二道区</span></li></ul><ul><li><span>绿园区</span></li></ul><ul><li><span>双阳区</span></li></ul><ul><li><span>农安县</span></li></ul><ul><li><span>九台市</span></li></ul><ul><li><span>榆树市</span></li></ul><ul><li><span>德惠市</span></li></ul></li></ul><ul><li><span>吉林市</span><ul><li><span>昌邑区</span></li></ul><ul><li><span>龙潭区</span></li></ul><ul><li><span>船营区</span></li></ul><ul><li><span>丰满区</span></li></ul><ul><li><span>永吉县</span></li></ul><ul><li><span>蛟河市</span></li></ul><ul><li><span>桦甸市</span></li></ul><ul><li><span>舒兰市</span></li></ul><ul><li><span>磐石市</span></li></ul></li></ul><ul><li><span>四平市</span><ul><li><span>铁西区</span></li></ul><ul><li><span>铁东区</span></li></ul><ul><li><span>梨树县</span></li></ul><ul><li><span>伊通满族自治县</span></li></ul><ul><li><span>公主岭市</span></li></ul><ul><li><span>双辽市</span></li></ul></li></ul><ul><li><span>辽源市</span><ul><li><span>龙山区</span></li></ul><ul><li><span>西安区</span></li></ul><ul><li><span>东丰县</span></li></ul><ul><li><span>东辽县</span></li></ul></li></ul><ul><li><span>通化市</span><ul><li><span>东昌区</span></li></ul><ul><li><span>二道江区</span></li></ul><ul><li><span>通化县</span></li></ul><ul><li><span>辉南县</span></li></ul><ul><li><span>柳河县</span></li></ul><ul><li><span>梅河口市</span></li></ul><ul><li><span>集安市</span></li></ul></li></ul><ul><li><span>白山市</span><ul><li><span>八道江区</span></li></ul><ul><li><span>抚松县</span></li></ul><ul><li><span>靖宇县</span></li></ul><ul><li><span>长白朝鲜族自治县</span></li></ul><ul><li><span>江源县</span></li></ul><ul><li><span>临江市</span></li></ul></li></ul><ul><li><span>松原市</span><ul><li><span>宁江区</span></li></ul><ul><li><span>前郭尔罗斯蒙古族自治县</span></li></ul><ul><li><span>长岭县</span></li></ul><ul><li><span>乾安县</span></li></ul><ul><li><span>扶余县</span></li></ul></li></ul><ul><li><span>白城市</span><ul><li><span>洮北区</span></li></ul><ul><li><span>镇赉县</span></li></ul><ul><li><span>通榆县</span></li></ul><ul><li><span>洮南市</span></li></ul><ul><li><span>大安市</span></li></ul></li></ul><ul><li><span>延边朝鲜族自治州</span><ul><li><span>延吉市</span></li></ul><ul><li><span>图们市</span></li></ul><ul><li><span>敦化市</span></li></ul><ul><li><span>珲春市</span></li></ul><ul><li><span>龙井市</span></li></ul><ul><li><span>和龙市</span></li></ul><ul><li><span>汪清县</span></li></ul><ul><li><span>安图县</span></li></ul></li></ul></li><li><span>黑龙江省</span><ul><li><span>哈尔滨市</span><ul><li><span>道里区</span></li></ul><ul><li><span>南岗区</span></li></ul><ul><li><span>道外区</span></li></ul><ul><li><span>香坊区</span></li></ul><ul><li><span>动力区</span></li></ul><ul><li><span>平房区</span></li></ul><ul><li><span>松北区</span></li></ul><ul><li><span>呼兰区</span></li></ul><ul><li><span>依兰县</span></li></ul><ul><li><span>方正县</span></li></ul><ul><li><span>宾县</span></li></ul><ul><li><span>巴彦县</span></li></ul><ul><li><span>木兰县</span></li></ul><ul><li><span>通河县</span></li></ul><ul><li><span>延寿县</span></li></ul><ul><li><span>阿城市</span></li></ul><ul><li><span>双城市</span></li></ul><ul><li><span>尚志市</span></li></ul><ul><li><span>五常市</span></li></ul></li></ul><ul><li><span>齐齐哈尔市</span><ul><li><span>龙沙区</span></li></ul><ul><li><span>建华区</span></li></ul><ul><li><span>铁锋区</span></li></ul><ul><li><span>昂昂溪区</span></li></ul><ul><li><span>富拉尔基区</span></li></ul><ul><li><span>碾子山区</span></li></ul><ul><li><span>梅里斯达斡尔族区</span></li></ul><ul><li><span>龙江县</span></li></ul><ul><li><span>依安县</span></li></ul><ul><li><span>泰来县</span></li></ul><ul><li><span>甘南县</span></li></ul><ul><li><span>富裕县</span></li></ul><ul><li><span>克山县</span></li></ul><ul><li><span>克东县</span></li></ul><ul><li><span>拜泉县</span></li></ul><ul><li><span>讷河市</span></li></ul></li></ul><ul><li><span>鸡西市</span><ul><li><span>鸡冠区</span></li></ul><ul><li><span>恒山区</span></li></ul><ul><li><span>滴道区</span></li></ul><ul><li><span>梨树区</span></li></ul><ul><li><span>城子河区</span></li></ul><ul><li><span>麻山区</span></li></ul><ul><li><span>鸡东县</span></li></ul><ul><li><span>虎林市</span></li></ul><ul><li><span>密山市</span></li></ul></li></ul><ul><li><span>鹤岗市</span><ul><li><span>向阳区</span></li></ul><ul><li><span>工农区</span></li></ul><ul><li><span>南山区</span></li></ul><ul><li><span>兴安区</span></li></ul><ul><li><span>东山区</span></li></ul><ul><li><span>兴山区</span></li></ul><ul><li><span>萝北县</span></li></ul><ul><li><span>绥滨县</span></li></ul></li></ul><ul><li><span>双鸭山市</span><ul><li><span>尖山区</span></li></ul><ul><li><span>岭东区</span></li></ul><ul><li><span>四方台区</span></li></ul><ul><li><span>宝山区</span></li></ul><ul><li><span>集贤县</span></li></ul><ul><li><span>友谊县</span></li></ul><ul><li><span>宝清县</span></li></ul><ul><li><span>饶河县</span></li></ul></li></ul><ul><li><span>大庆市</span><ul><li><span>萨尔图区</span></li></ul><ul><li><span>龙凤区</span></li></ul><ul><li><span>让胡路区</span></li></ul><ul><li><span>红岗区</span></li></ul><ul><li><span>大同区</span></li></ul><ul><li><span>肇州县</span></li></ul><ul><li><span>肇源县</span></li></ul><ul><li><span>林甸县</span></li></ul><ul><li><span>杜尔伯特蒙古族自治县</span></li></ul></li></ul><ul><li><span>伊春市</span><ul><li><span>伊春区</span></li></ul><ul><li><span>南岔区</span></li></ul><ul><li><span>友好区</span></li></ul><ul><li><span>西林区</span></li></ul><ul><li><span>翠峦区</span></li></ul><ul><li><span>新青区</span></li></ul><ul><li><span>美溪区</span></li></ul><ul><li><span>金山屯区</span></li></ul><ul><li><span>五营区</span></li></ul><ul><li><span>乌马河区</span></li></ul><ul><li><span>汤旺河区</span></li></ul><ul><li><span>带岭区</span></li></ul><ul><li><span>乌伊岭区</span></li></ul><ul><li><span>红星区</span></li></ul><ul><li><span>上甘岭区</span></li></ul><ul><li><span>嘉荫县</span></li></ul><ul><li><span>铁力市</span></li></ul></li></ul><ul><li><span>佳木斯市</span><ul><li><span>永红区</span></li></ul><ul><li><span>向阳区</span></li></ul><ul><li><span>前进区</span></li></ul><ul><li><span>东风区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>桦南县</span></li></ul><ul><li><span>桦川县</span></li></ul><ul><li><span>汤原县</span></li></ul><ul><li><span>抚远县</span></li></ul><ul><li><span>同江市</span></li></ul><ul><li><span>富锦市</span></li></ul></li></ul><ul><li><span>七台河市</span><ul><li><span>新兴区</span></li></ul><ul><li><span>桃山区</span></li></ul><ul><li><span>茄子河区</span></li></ul><ul><li><span>勃利县</span></li></ul></li></ul><ul><li><span>牡丹江市</span><ul><li><span>东安区</span></li></ul><ul><li><span>阳明区</span></li></ul><ul><li><span>爱民区</span></li></ul><ul><li><span>西安区</span></li></ul><ul><li><span>东宁县</span></li></ul><ul><li><span>林口县</span></li></ul><ul><li><span>绥芬河市</span></li></ul><ul><li><span>海林市</span></li></ul><ul><li><span>宁安市</span></li></ul><ul><li><span>穆棱市</span></li></ul></li></ul><ul><li><span>黑河市</span><ul><li><span>爱辉区</span></li></ul><ul><li><span>嫩江县</span></li></ul><ul><li><span>逊克县</span></li></ul><ul><li><span>孙吴县</span></li></ul><ul><li><span>北安市</span></li></ul><ul><li><span>五大连池市</span></li></ul></li></ul><ul><li><span>绥化市</span><ul><li><span>北林区</span></li></ul><ul><li><span>望奎县</span></li></ul><ul><li><span>兰西县</span></li></ul><ul><li><span>青冈县</span></li></ul><ul><li><span>庆安县</span></li></ul><ul><li><span>明水县</span></li></ul><ul><li><span>绥棱县</span></li></ul><ul><li><span>安达市</span></li></ul><ul><li><span>肇东市</span></li></ul><ul><li><span>海伦市</span></li></ul></li></ul><ul><li><span>大兴安岭地区</span><ul><li><span>呼玛县</span></li></ul><ul><li><span>塔河县</span></li></ul><ul><li><span>漠河县</span></li></ul></li></ul></li><li><span>上海市</span><ul><li><span>上海市</span><ul><li><span>黄浦区</span></li></ul><ul><li><span>卢湾区</span></li></ul><ul><li><span>徐汇区</span></li></ul><ul><li><span>长宁区</span></li></ul><ul><li><span>静安区</span></li></ul><ul><li><span>普陀区</span></li></ul><ul><li><span>闸北区</span></li></ul><ul><li><span>虹口区</span></li></ul><ul><li><span>杨浦区</span></li></ul><ul><li><span>闵行区</span></li></ul><ul><li><span>宝山区</span></li></ul><ul><li><span>嘉定区</span></li></ul><ul><li><span>浦东新区</span></li></ul><ul><li><span>金山区</span></li></ul><ul><li><span>松江区</span></li></ul><ul><li><span>青浦区</span></li></ul><ul><li><span>南汇区</span></li></ul><ul><li><span>奉贤区</span></li></ul><ul><li><span>崇明县</span></li></ul></li></ul></li><li><span>江苏省</span><ul><li><span>南京市</span><ul><li><span>玄武区</span></li></ul><ul><li><span>白下区</span></li></ul><ul><li><span>秦淮区</span></li></ul><ul><li><span>建邺区</span></li></ul><ul><li><span>鼓楼区</span></li></ul><ul><li><span>下关区</span></li></ul><ul><li><span>浦口区</span></li></ul><ul><li><span>栖霞区</span></li></ul><ul><li><span>雨花台区</span></li></ul><ul><li><span>江宁区</span></li></ul><ul><li><span>六合区</span></li></ul><ul><li><span>溧水县</span></li></ul><ul><li><span>高淳县</span></li></ul></li></ul><ul><li><span>无锡市</span><ul><li><span>崇安区</span></li></ul><ul><li><span>南长区</span></li></ul><ul><li><span>北塘区</span></li></ul><ul><li><span>锡山区</span></li></ul><ul><li><span>惠山区</span></li></ul><ul><li><span>滨湖区</span></li></ul><ul><li><span>江阴市</span></li></ul><ul><li><span>宜兴市</span></li></ul></li></ul><ul><li><span>徐州市</span><ul><li><span>鼓楼区</span></li></ul><ul><li><span>云龙区</span></li></ul><ul><li><span>九里区</span></li></ul><ul><li><span>贾汪区</span></li></ul><ul><li><span>泉山区</span></li></ul><ul><li><span>丰县</span></li></ul><ul><li><span>沛县</span></li></ul><ul><li><span>铜山县</span></li></ul><ul><li><span>睢宁县</span></li></ul><ul><li><span>新沂市</span></li></ul><ul><li><span>邳州市</span></li></ul></li></ul><ul><li><span>常州市</span><ul><li><span>天宁区</span></li></ul><ul><li><span>钟楼区</span></li></ul><ul><li><span>戚墅堰区</span></li></ul><ul><li><span>新北区</span></li></ul><ul><li><span>武进区</span></li></ul><ul><li><span>溧阳市</span></li></ul><ul><li><span>金坛市</span></li></ul></li></ul><ul><li><span>苏州市</span><ul><li><span>沧浪区</span></li></ul><ul><li><span>平江区</span></li></ul><ul><li><span>金阊区</span></li></ul><ul><li><span>虎丘区</span></li></ul><ul><li><span>吴中区</span></li></ul><ul><li><span>相城区</span></li></ul><ul><li><span>常熟市</span></li></ul><ul><li><span>张家港市</span></li></ul><ul><li><span>昆山市</span></li></ul><ul><li><span>吴江市</span></li></ul><ul><li><span>太仓市</span></li></ul></li></ul><ul><li><span>南通市</span><ul><li><span>崇川区</span></li></ul><ul><li><span>港闸区</span></li></ul><ul><li><span>海安县</span></li></ul><ul><li><span>如东县</span></li></ul><ul><li><span>启东市</span></li></ul><ul><li><span>如皋市</span></li></ul><ul><li><span>通州市</span></li></ul><ul><li><span>海门市</span></li></ul></li></ul><ul><li><span>连云港市</span><ul><li><span>连云区</span></li></ul><ul><li><span>新浦区</span></li></ul><ul><li><span>海州区</span></li></ul><ul><li><span>赣榆县</span></li></ul><ul><li><span>东海县</span></li></ul><ul><li><span>灌云县</span></li></ul><ul><li><span>灌南县</span></li></ul></li></ul><ul><li><span>淮安市</span><ul><li><span>清河区</span></li></ul><ul><li><span>楚州区</span></li></ul><ul><li><span>淮阴区</span></li></ul><ul><li><span>清浦区</span></li></ul><ul><li><span>涟水县</span></li></ul><ul><li><span>洪泽县</span></li></ul><ul><li><span>盱眙县</span></li></ul><ul><li><span>金湖县</span></li></ul></li></ul><ul><li><span>盐城市</span><ul><li><span>亭湖区</span></li></ul><ul><li><span>盐都区</span></li></ul><ul><li><span>响水县</span></li></ul><ul><li><span>滨海县</span></li></ul><ul><li><span>阜宁县</span></li></ul><ul><li><span>射阳县</span></li></ul><ul><li><span>建湖县</span></li></ul><ul><li><span>东台市</span></li></ul><ul><li><span>大丰市</span></li></ul></li></ul><ul><li><span>扬州市</span><ul><li><span>广陵区</span></li></ul><ul><li><span>邗江区</span></li></ul><ul><li><span>维扬区</span></li></ul><ul><li><span>宝应县</span></li></ul><ul><li><span>仪征市</span></li></ul><ul><li><span>高邮市</span></li></ul><ul><li><span>江都市</span></li></ul></li></ul><ul><li><span>镇江市</span><ul><li><span>京口区</span></li></ul><ul><li><span>润州区</span></li></ul><ul><li><span>丹徒区</span></li></ul><ul><li><span>丹阳市</span></li></ul><ul><li><span>扬中市</span></li></ul><ul><li><span>句容市</span></li></ul></li></ul><ul><li><span>泰州市</span><ul><li><span>海陵区</span></li></ul><ul><li><span>高港区</span></li></ul><ul><li><span>兴化市</span></li></ul><ul><li><span>靖江市</span></li></ul><ul><li><span>泰兴市</span></li></ul><ul><li><span>姜堰市</span></li></ul></li></ul><ul><li><span>宿迁市</span><ul><li><span>宿城区</span></li></ul><ul><li><span>宿豫区</span></li></ul><ul><li><span>沭阳县</span></li></ul><ul><li><span>泗阳县</span></li></ul><ul><li><span>泗洪县</span></li></ul></li></ul></li><li><span>浙江省</span><ul><li><span>杭州市</span><ul><li><span>上城区</span></li></ul><ul><li><span>下城区</span></li></ul><ul><li><span>江干区</span></li></ul><ul><li><span>拱墅区</span></li></ul><ul><li><span>西湖区</span></li></ul><ul><li><span>滨江区</span></li></ul><ul><li><span>萧山区</span></li></ul><ul><li><span>余杭区</span></li></ul><ul><li><span>桐庐县</span></li></ul><ul><li><span>淳安县</span></li></ul><ul><li><span>建德市</span></li></ul><ul><li><span>富阳市</span></li></ul><ul><li><span>临安市</span></li></ul></li></ul><ul><li><span>宁波市</span><ul><li><span>海曙区</span></li></ul><ul><li><span>江东区</span></li></ul><ul><li><span>江北区</span></li></ul><ul><li><span>北仑区</span></li></ul><ul><li><span>镇海区</span></li></ul><ul><li><span>鄞州区</span></li></ul><ul><li><span>象山县</span></li></ul><ul><li><span>宁海县</span></li></ul><ul><li><span>余姚市</span></li></ul><ul><li><span>慈溪市</span></li></ul><ul><li><span>奉化市</span></li></ul></li></ul><ul><li><span>温州市</span><ul><li><span>鹿城区</span></li></ul><ul><li><span>龙湾区</span></li></ul><ul><li><span>瓯海区</span></li></ul><ul><li><span>洞头县</span></li></ul><ul><li><span>永嘉县</span></li></ul><ul><li><span>平阳县</span></li></ul><ul><li><span>苍南县</span></li></ul><ul><li><span>文成县</span></li></ul><ul><li><span>泰顺县</span></li></ul><ul><li><span>瑞安市</span></li></ul><ul><li><span>乐清市</span></li></ul></li></ul><ul><li><span>嘉兴市</span><ul><li><span>秀城区</span></li></ul><ul><li><span>秀洲区</span></li></ul><ul><li><span>嘉善县</span></li></ul><ul><li><span>海盐县</span></li></ul><ul><li><span>海宁市</span></li></ul><ul><li><span>平湖市</span></li></ul><ul><li><span>桐乡市</span></li></ul></li></ul><ul><li><span>湖州市</span><ul><li><span>吴兴区</span></li></ul><ul><li><span>南浔区</span></li></ul><ul><li><span>德清县</span></li></ul><ul><li><span>长兴县</span></li></ul><ul><li><span>安吉县</span></li></ul></li></ul><ul><li><span>绍兴市</span><ul><li><span>越城区</span></li></ul><ul><li><span>绍兴县</span></li></ul><ul><li><span>新昌县</span></li></ul><ul><li><span>诸暨市</span></li></ul><ul><li><span>上虞市</span></li></ul><ul><li><span>嵊州市</span></li></ul></li></ul><ul><li><span>金华市</span><ul><li><span>婺城区</span></li></ul><ul><li><span>金东区</span></li></ul><ul><li><span>武义县</span></li></ul><ul><li><span>浦江县</span></li></ul><ul><li><span>磐安县</span></li></ul><ul><li><span>兰溪市</span></li></ul><ul><li><span>义乌市</span></li></ul><ul><li><span>东阳市</span></li></ul><ul><li><span>永康市</span></li></ul></li></ul><ul><li><span>衢州市</span><ul><li><span>柯城区</span></li></ul><ul><li><span>衢江区</span></li></ul><ul><li><span>常山县</span></li></ul><ul><li><span>开化县</span></li></ul><ul><li><span>龙游县</span></li></ul><ul><li><span>江山市</span></li></ul></li></ul><ul><li><span>舟山市</span><ul><li><span>定海区</span></li></ul><ul><li><span>普陀区</span></li></ul><ul><li><span>岱山县</span></li></ul><ul><li><span>嵊泗县</span></li></ul></li></ul><ul><li><span>台州市</span><ul><li><span>椒江区</span></li></ul><ul><li><span>黄岩区</span></li></ul><ul><li><span>路桥区</span></li></ul><ul><li><span>玉环县</span></li></ul><ul><li><span>三门县</span></li></ul><ul><li><span>天台县</span></li></ul><ul><li><span>仙居县</span></li></ul><ul><li><span>温岭市</span></li></ul><ul><li><span>临海市</span></li></ul></li></ul><ul><li><span>丽水市</span><ul><li><span>莲都区</span></li></ul><ul><li><span>青田县</span></li></ul><ul><li><span>缙云县</span></li></ul><ul><li><span>遂昌县</span></li></ul><ul><li><span>松阳县</span></li></ul><ul><li><span>云和县</span></li></ul><ul><li><span>庆元县</span></li></ul><ul><li><span>景宁畲族自治县</span></li></ul><ul><li><span>龙泉市</span></li></ul></li></ul></li><li><span>安徽省</span><ul><li><span>合肥市</span><ul><li><span>瑶海区</span></li></ul><ul><li><span>庐阳区</span></li></ul><ul><li><span>蜀山区</span></li></ul><ul><li><span>包河区</span></li></ul><ul><li><span>长丰县</span></li></ul><ul><li><span>肥东县</span></li></ul><ul><li><span>肥西县</span></li></ul></li></ul><ul><li><span>芜湖市</span><ul><li><span>镜湖区</span></li></ul><ul><li><span>马塘区</span></li></ul><ul><li><span>新芜区</span></li></ul><ul><li><span>鸠江区</span></li></ul><ul><li><span>芜湖县</span></li></ul><ul><li><span>繁昌县</span></li></ul><ul><li><span>南陵县</span></li></ul></li></ul><ul><li><span>蚌埠市</span><ul><li><span>龙子湖区</span></li></ul><ul><li><span>蚌山区</span></li></ul><ul><li><span>禹会区</span></li></ul><ul><li><span>淮上区</span></li></ul><ul><li><span>怀远县</span></li></ul><ul><li><span>五河县</span></li></ul><ul><li><span>固镇县</span></li></ul></li></ul><ul><li><span>淮南市</span><ul><li><span>大通区</span></li></ul><ul><li><span>田家庵区</span></li></ul><ul><li><span>谢家集区</span></li></ul><ul><li><span>八公山区</span></li></ul><ul><li><span>潘集区</span></li></ul><ul><li><span>凤台县</span></li></ul></li></ul><ul><li><span>马鞍山市</span><ul><li><span>金家庄区</span></li></ul><ul><li><span>花山区</span></li></ul><ul><li><span>雨山区</span></li></ul><ul><li><span>当涂县</span></li></ul></li></ul><ul><li><span>淮北市</span><ul><li><span>杜集区</span></li></ul><ul><li><span>相山区</span></li></ul><ul><li><span>烈山区</span></li></ul><ul><li><span>濉溪县</span></li></ul></li></ul><ul><li><span>铜陵市</span><ul><li><span>铜官山区</span></li></ul><ul><li><span>狮子山区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>铜陵县</span></li></ul></li></ul><ul><li><span>安庆市</span><ul><li><span>迎江区</span></li></ul><ul><li><span>大观区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>怀宁县</span></li></ul><ul><li><span>枞阳县</span></li></ul><ul><li><span>潜山县</span></li></ul><ul><li><span>太湖县</span></li></ul><ul><li><span>宿松县</span></li></ul><ul><li><span>望江县</span></li></ul><ul><li><span>岳西县</span></li></ul><ul><li><span>桐城市</span></li></ul></li></ul><ul><li><span>黄山市</span><ul><li><span>屯溪区</span></li></ul><ul><li><span>黄山区</span></li></ul><ul><li><span>徽州区</span></li></ul><ul><li><span>歙县</span></li></ul><ul><li><span>休宁县</span></li></ul><ul><li><span>黟县</span></li></ul><ul><li><span>祁门县</span></li></ul></li></ul><ul><li><span>滁州市</span><ul><li><span>琅琊区</span></li></ul><ul><li><span>南谯区</span></li></ul><ul><li><span>来安县</span></li></ul><ul><li><span>全椒县</span></li></ul><ul><li><span>定远县</span></li></ul><ul><li><span>凤阳县</span></li></ul><ul><li><span>天长市</span></li></ul><ul><li><span>明光市</span></li></ul></li></ul><ul><li><span>阜阳市</span><ul><li><span>颍州区</span></li></ul><ul><li><span>颍东区</span></li></ul><ul><li><span>颍泉区</span></li></ul><ul><li><span>临泉县</span></li></ul><ul><li><span>太和县</span></li></ul><ul><li><span>阜南县</span></li></ul><ul><li><span>颍上县</span></li></ul><ul><li><span>界首市</span></li></ul></li></ul><ul><li><span>宿州市</span><ul><li><span>埇桥区</span></li></ul><ul><li><span>砀山县</span></li></ul><ul><li><span>萧县</span></li></ul><ul><li><span>灵璧县</span></li></ul><ul><li><span>泗县</span></li></ul></li></ul><ul><li><span>巢湖市</span><ul><li><span>居巢区</span></li></ul><ul><li><span>庐江县</span></li></ul><ul><li><span>无为县</span></li></ul><ul><li><span>含山县</span></li></ul><ul><li><span>和县</span></li></ul></li></ul><ul><li><span>六安市</span><ul><li><span>金安区</span></li></ul><ul><li><span>裕安区</span></li></ul><ul><li><span>寿县</span></li></ul><ul><li><span>霍邱县</span></li></ul><ul><li><span>舒城县</span></li></ul><ul><li><span>金寨县</span></li></ul><ul><li><span>霍山县</span></li></ul></li></ul><ul><li><span>亳州市</span><ul><li><span>谯城区</span></li></ul><ul><li><span>涡阳县</span></li></ul><ul><li><span>蒙城县</span></li></ul><ul><li><span>利辛县</span></li></ul></li></ul><ul><li><span>池州市</span><ul><li><span>贵池区</span></li></ul><ul><li><span>东至县</span></li></ul><ul><li><span>石台县</span></li></ul><ul><li><span>青阳县</span></li></ul></li></ul><ul><li><span>宣城市</span><ul><li><span>宣州区</span></li></ul><ul><li><span>郎溪县</span></li></ul><ul><li><span>广德县</span></li></ul><ul><li><span>泾县</span></li></ul><ul><li><span>绩溪县</span></li></ul><ul><li><span>旌德县</span></li></ul><ul><li><span>宁国市</span></li></ul></li></ul></li><li><span>福建省</span><ul><li><span>福州市</span><ul><li><span>鼓楼区</span></li></ul><ul><li><span>台江区</span></li></ul><ul><li><span>仓山区</span></li></ul><ul><li><span>马尾区</span></li></ul><ul><li><span>晋安区</span></li></ul><ul><li><span>闽侯县</span></li></ul><ul><li><span>连江县</span></li></ul><ul><li><span>罗源县</span></li></ul><ul><li><span>闽清县</span></li></ul><ul><li><span>永泰县</span></li></ul><ul><li><span>平潭县</span></li></ul><ul><li><span>福清市</span></li></ul><ul><li><span>长乐市</span></li></ul></li></ul><ul><li><span>厦门市</span><ul><li><span>思明区</span></li></ul><ul><li><span>海沧区</span></li></ul><ul><li><span>湖里区</span></li></ul><ul><li><span>集美区</span></li></ul><ul><li><span>同安区</span></li></ul><ul><li><span>翔安区</span></li></ul></li></ul><ul><li><span>莆田市</span><ul><li><span>城厢区</span></li></ul><ul><li><span>涵江区</span></li></ul><ul><li><span>荔城区</span></li></ul><ul><li><span>秀屿区</span></li></ul><ul><li><span>仙游县</span></li></ul></li></ul><ul><li><span>三明市</span><ul><li><span>梅列区</span></li></ul><ul><li><span>三元区</span></li></ul><ul><li><span>明溪县</span></li></ul><ul><li><span>清流县</span></li></ul><ul><li><span>宁化县</span></li></ul><ul><li><span>大田县</span></li></ul><ul><li><span>尤溪县</span></li></ul><ul><li><span>沙县</span></li></ul><ul><li><span>将乐县</span></li></ul><ul><li><span>泰宁县</span></li></ul><ul><li><span>建宁县</span></li></ul><ul><li><span>永安市</span></li></ul></li></ul><ul><li><span>泉州市</span><ul><li><span>鲤城区</span></li></ul><ul><li><span>丰泽区</span></li></ul><ul><li><span>洛江区</span></li></ul><ul><li><span>泉港区</span></li></ul><ul><li><span>惠安县</span></li></ul><ul><li><span>安溪县</span></li></ul><ul><li><span>永春县</span></li></ul><ul><li><span>德化县</span></li></ul><ul><li><span>金门县</span></li></ul><ul><li><span>石狮市</span></li></ul><ul><li><span>晋江市</span></li></ul><ul><li><span>南安市</span></li></ul></li></ul><ul><li><span>漳州市</span><ul><li><span>芗城区</span></li></ul><ul><li><span>龙文区</span></li></ul><ul><li><span>云霄县</span></li></ul><ul><li><span>漳浦县</span></li></ul><ul><li><span>诏安县</span></li></ul><ul><li><span>长泰县</span></li></ul><ul><li><span>东山县</span></li></ul><ul><li><span>南靖县</span></li></ul><ul><li><span>平和县</span></li></ul><ul><li><span>华安县</span></li></ul><ul><li><span>龙海市</span></li></ul></li></ul><ul><li><span>南平市</span><ul><li><span>延平区</span></li></ul><ul><li><span>顺昌县</span></li></ul><ul><li><span>浦城县</span></li></ul><ul><li><span>光泽县</span></li></ul><ul><li><span>松溪县</span></li></ul><ul><li><span>政和县</span></li></ul><ul><li><span>邵武市</span></li></ul><ul><li><span>武夷山市</span></li></ul><ul><li><span>建瓯市</span></li></ul><ul><li><span>建阳市</span></li></ul></li></ul><ul><li><span>龙岩市</span><ul><li><span>新罗区</span></li></ul><ul><li><span>长汀县</span></li></ul><ul><li><span>永定县</span></li></ul><ul><li><span>上杭县</span></li></ul><ul><li><span>武平县</span></li></ul><ul><li><span>连城县</span></li></ul><ul><li><span>漳平市</span></li></ul></li></ul><ul><li><span>宁德市</span><ul><li><span>蕉城区</span></li></ul><ul><li><span>霞浦县</span></li></ul><ul><li><span>古田县</span></li></ul><ul><li><span>屏南县</span></li></ul><ul><li><span>寿宁县</span></li></ul><ul><li><span>周宁县</span></li></ul><ul><li><span>柘荣县</span></li></ul><ul><li><span>福安市</span></li></ul><ul><li><span>福鼎市</span></li></ul></li></ul></li><li><span>江西省</span><ul><li><span>南昌市</span><ul><li><span>东湖区</span></li></ul><ul><li><span>西湖区</span></li></ul><ul><li><span>青云谱区</span></li></ul><ul><li><span>湾里区</span></li></ul><ul><li><span>青山湖区</span></li></ul><ul><li><span>南昌县</span></li></ul><ul><li><span>新建县</span></li></ul><ul><li><span>安义县</span></li></ul><ul><li><span>进贤县</span></li></ul></li></ul><ul><li><span>景德镇市</span><ul><li><span>昌江区</span></li></ul><ul><li><span>珠山区</span></li></ul><ul><li><span>浮梁县</span></li></ul><ul><li><span>乐平市</span></li></ul></li></ul><ul><li><span>萍乡市</span><ul><li><span>安源区</span></li></ul><ul><li><span>湘东区</span></li></ul><ul><li><span>莲花县</span></li></ul><ul><li><span>上栗县</span></li></ul><ul><li><span>芦溪县</span></li></ul></li></ul><ul><li><span>九江市</span><ul><li><span>庐山区</span></li></ul><ul><li><span>浔阳区</span></li></ul><ul><li><span>九江县</span></li></ul><ul><li><span>武宁县</span></li></ul><ul><li><span>修水县</span></li></ul><ul><li><span>永修县</span></li></ul><ul><li><span>德安县</span></li></ul><ul><li><span>星子县</span></li></ul><ul><li><span>都昌县</span></li></ul><ul><li><span>湖口县</span></li></ul><ul><li><span>彭泽县</span></li></ul><ul><li><span>瑞昌市</span></li></ul></li></ul><ul><li><span>新余市</span><ul><li><span>渝水区</span></li></ul><ul><li><span>分宜县</span></li></ul></li></ul><ul><li><span>鹰潭市</span><ul><li><span>月湖区</span></li></ul><ul><li><span>余江县</span></li></ul><ul><li><span>贵溪市</span></li></ul></li></ul><ul><li><span>赣州市</span><ul><li><span>章贡区</span></li></ul><ul><li><span>赣县</span></li></ul><ul><li><span>信丰县</span></li></ul><ul><li><span>大余县</span></li></ul><ul><li><span>上犹县</span></li></ul><ul><li><span>崇义县</span></li></ul><ul><li><span>安远县</span></li></ul><ul><li><span>龙南县</span></li></ul><ul><li><span>定南县</span></li></ul><ul><li><span>全南县</span></li></ul><ul><li><span>宁都县</span></li></ul><ul><li><span>于都县</span></li></ul><ul><li><span>兴国县</span></li></ul><ul><li><span>会昌县</span></li></ul><ul><li><span>寻乌县</span></li></ul><ul><li><span>石城县</span></li></ul><ul><li><span>瑞金市</span></li></ul><ul><li><span>南康市</span></li></ul></li></ul><ul><li><span>吉安市</span><ul><li><span>吉州区</span></li></ul><ul><li><span>青原区</span></li></ul><ul><li><span>吉安县</span></li></ul><ul><li><span>吉水县</span></li></ul><ul><li><span>峡江县</span></li></ul><ul><li><span>新干县</span></li></ul><ul><li><span>永丰县</span></li></ul><ul><li><span>泰和县</span></li></ul><ul><li><span>遂川县</span></li></ul><ul><li><span>万安县</span></li></ul><ul><li><span>安福县</span></li></ul><ul><li><span>永新县</span></li></ul><ul><li><span>井冈山市</span></li></ul></li></ul><ul><li><span>宜春市</span><ul><li><span>袁州区</span></li></ul><ul><li><span>奉新县</span></li></ul><ul><li><span>万载县</span></li></ul><ul><li><span>上高县</span></li></ul><ul><li><span>宜丰县</span></li></ul><ul><li><span>靖安县</span></li></ul><ul><li><span>铜鼓县</span></li></ul><ul><li><span>丰城市</span></li></ul><ul><li><span>樟树市</span></li></ul><ul><li><span>高安市</span></li></ul></li></ul><ul><li><span>抚州市</span><ul><li><span>临川区</span></li></ul><ul><li><span>南城县</span></li></ul><ul><li><span>黎川县</span></li></ul><ul><li><span>南丰县</span></li></ul><ul><li><span>崇仁县</span></li></ul><ul><li><span>乐安县</span></li></ul><ul><li><span>宜黄县</span></li></ul><ul><li><span>金溪县</span></li></ul><ul><li><span>资溪县</span></li></ul><ul><li><span>东乡县</span></li></ul><ul><li><span>广昌县</span></li></ul></li></ul><ul><li><span>上饶市</span><ul><li><span>信州区</span></li></ul><ul><li><span>上饶县</span></li></ul><ul><li><span>广丰县</span></li></ul><ul><li><span>玉山县</span></li></ul><ul><li><span>铅山县</span></li></ul><ul><li><span>横峰县</span></li></ul><ul><li><span>弋阳县</span></li></ul><ul><li><span>余干县</span></li></ul><ul><li><span>鄱阳县</span></li></ul><ul><li><span>万年县</span></li></ul><ul><li><span>婺源县</span></li></ul><ul><li><span>德兴市</span></li></ul></li></ul></li><li><span>山东省</span><ul><li><span>济南市</span><ul><li><span>历下区</span></li></ul><ul><li><span>市中区</span></li></ul><ul><li><span>槐荫区</span></li></ul><ul><li><span>天桥区</span></li></ul><ul><li><span>历城区</span></li></ul><ul><li><span>长清区</span></li></ul><ul><li><span>平阴县</span></li></ul><ul><li><span>济阳县</span></li></ul><ul><li><span>商河县</span></li></ul><ul><li><span>章丘市</span></li></ul></li></ul><ul><li><span>青岛市</span><ul><li><span>市南区</span></li></ul><ul><li><span>市北区</span></li></ul><ul><li><span>四方区</span></li></ul><ul><li><span>黄岛区</span></li></ul><ul><li><span>崂山区</span></li></ul><ul><li><span>李沧区</span></li></ul><ul><li><span>城阳区</span></li></ul><ul><li><span>胶州市</span></li></ul><ul><li><span>即墨市</span></li></ul><ul><li><span>平度市</span></li></ul><ul><li><span>胶南市</span></li></ul><ul><li><span>莱西市</span></li></ul></li></ul><ul><li><span>淄博市</span><ul><li><span>淄川区</span></li></ul><ul><li><span>张店区</span></li></ul><ul><li><span>博山区</span></li></ul><ul><li><span>临淄区</span></li></ul><ul><li><span>周村区</span></li></ul><ul><li><span>桓台县</span></li></ul><ul><li><span>高青县</span></li></ul><ul><li><span>沂源县</span></li></ul></li></ul><ul><li><span>枣庄市</span><ul><li><span>市中区</span></li></ul><ul><li><span>薛城区</span></li></ul><ul><li><span>峄城区</span></li></ul><ul><li><span>台儿庄区</span></li></ul><ul><li><span>山亭区</span></li></ul><ul><li><span>滕州市</span></li></ul></li></ul><ul><li><span>东营市</span><ul><li><span>东营区</span></li></ul><ul><li><span>河口区</span></li></ul><ul><li><span>垦利县</span></li></ul><ul><li><span>利津县</span></li></ul><ul><li><span>广饶县</span></li></ul></li></ul><ul><li><span>烟台市</span><ul><li><span>芝罘区</span></li></ul><ul><li><span>福山区</span></li></ul><ul><li><span>牟平区</span></li></ul><ul><li><span>莱山区</span></li></ul><ul><li><span>长岛县</span></li></ul><ul><li><span>龙口市</span></li></ul><ul><li><span>莱阳市</span></li></ul><ul><li><span>莱州市</span></li></ul><ul><li><span>蓬莱市</span></li></ul><ul><li><span>招远市</span></li></ul><ul><li><span>栖霞市</span></li></ul><ul><li><span>海阳市</span></li></ul></li></ul><ul><li><span>潍坊市</span><ul><li><span>潍城区</span></li></ul><ul><li><span>寒亭区</span></li></ul><ul><li><span>坊子区</span></li></ul><ul><li><span>奎文区</span></li></ul><ul><li><span>临朐县</span></li></ul><ul><li><span>昌乐县</span></li></ul><ul><li><span>青州市</span></li></ul><ul><li><span>诸城市</span></li></ul><ul><li><span>寿光市</span></li></ul><ul><li><span>安丘市</span></li></ul><ul><li><span>高密市</span></li></ul><ul><li><span>昌邑市</span></li></ul></li></ul><ul><li><span>济宁市</span><ul><li><span>市中区</span></li></ul><ul><li><span>任城区</span></li></ul><ul><li><span>微山县</span></li></ul><ul><li><span>鱼台县</span></li></ul><ul><li><span>金乡县</span></li></ul><ul><li><span>嘉祥县</span></li></ul><ul><li><span>汶上县</span></li></ul><ul><li><span>泗水县</span></li></ul><ul><li><span>梁山县</span></li></ul><ul><li><span>曲阜市</span></li></ul><ul><li><span>兖州市</span></li></ul><ul><li><span>邹城市</span></li></ul></li></ul><ul><li><span>泰安市</span><ul><li><span>泰山区</span></li></ul><ul><li><span>岱岳区</span></li></ul><ul><li><span>宁阳县</span></li></ul><ul><li><span>东平县</span></li></ul><ul><li><span>新泰市</span></li></ul><ul><li><span>肥城市</span></li></ul></li></ul><ul><li><span>威海市</span><ul><li><span>环翠区</span></li></ul><ul><li><span>文登市</span></li></ul><ul><li><span>荣成市</span></li></ul><ul><li><span>乳山市</span></li></ul></li></ul><ul><li><span>日照市</span><ul><li><span>东港区</span></li></ul><ul><li><span>岚山区</span></li></ul><ul><li><span>五莲县</span></li></ul><ul><li><span>莒县</span></li></ul></li></ul><ul><li><span>莱芜市</span><ul><li><span>莱城区</span></li></ul><ul><li><span>钢城区</span></li></ul></li></ul><ul><li><span>临沂市</span><ul><li><span>兰山区</span></li></ul><ul><li><span>罗庄区</span></li></ul><ul><li><span>河东区</span></li></ul><ul><li><span>沂南县</span></li></ul><ul><li><span>郯城县</span></li></ul><ul><li><span>沂水县</span></li></ul><ul><li><span>苍山县</span></li></ul><ul><li><span>费县</span></li></ul><ul><li><span>平邑县</span></li></ul><ul><li><span>莒南县</span></li></ul><ul><li><span>蒙阴县</span></li></ul><ul><li><span>临沭县</span></li></ul></li></ul><ul><li><span>德州市</span><ul><li><span>德城区</span></li></ul><ul><li><span>陵县</span></li></ul><ul><li><span>宁津县</span></li></ul><ul><li><span>庆云县</span></li></ul><ul><li><span>临邑县</span></li></ul><ul><li><span>齐河县</span></li></ul><ul><li><span>平原县</span></li></ul><ul><li><span>夏津县</span></li></ul><ul><li><span>武城县</span></li></ul><ul><li><span>乐陵市</span></li></ul><ul><li><span>禹城市</span></li></ul></li></ul><ul><li><span>聊城市</span><ul><li><span>东昌府区</span></li></ul><ul><li><span>阳谷县</span></li></ul><ul><li><span>莘县</span></li></ul><ul><li><span>茌平县</span></li></ul><ul><li><span>东阿县</span></li></ul><ul><li><span>冠县</span></li></ul><ul><li><span>高唐县</span></li></ul><ul><li><span>临清市</span></li></ul></li></ul><ul><li><span>滨州市</span><ul><li><span>滨城区</span></li></ul><ul><li><span>惠民县</span></li></ul><ul><li><span>阳信县</span></li></ul><ul><li><span>无棣县</span></li></ul><ul><li><span>沾化县</span></li></ul><ul><li><span>博兴县</span></li></ul><ul><li><span>邹平县</span></li></ul></li></ul><ul><li><span>荷泽市</span><ul><li><span>牡丹区</span></li></ul><ul><li><span>曹县</span></li></ul><ul><li><span>单县</span></li></ul><ul><li><span>成武县</span></li></ul><ul><li><span>巨野县</span></li></ul><ul><li><span>郓城县</span></li></ul><ul><li><span>鄄城县</span></li></ul><ul><li><span>定陶县</span></li></ul><ul><li><span>东明县</span></li></ul></li></ul></li><li><span>河南省</span><ul><li><span>郑州市</span><ul><li><span>中原区</span></li></ul><ul><li><span>二七区</span></li></ul><ul><li><span>管城回族区</span></li></ul><ul><li><span>金水区</span></li></ul><ul><li><span>上街区</span></li></ul><ul><li><span>惠济区</span></li></ul><ul><li><span>中牟县</span></li></ul><ul><li><span>巩义市</span></li></ul><ul><li><span>荥阳市</span></li></ul><ul><li><span>新密市</span></li></ul><ul><li><span>新郑市</span></li></ul><ul><li><span>登封市</span></li></ul></li></ul><ul><li><span>开封市</span><ul><li><span>龙亭区</span></li></ul><ul><li><span>顺河回族区</span></li></ul><ul><li><span>鼓楼区</span></li></ul><ul><li><span>南关区</span></li></ul><ul><li><span>郊区</span></li></ul><ul><li><span>杞县</span></li></ul><ul><li><span>通许县</span></li></ul><ul><li><span>尉氏县</span></li></ul><ul><li><span>开封县</span></li></ul><ul><li><span>兰考县</span></li></ul></li></ul><ul><li><span>洛阳市</span><ul><li><span>老城区</span></li></ul><ul><li><span>西工区</span></li></ul><ul><li><span>廛河回族区</span></li></ul><ul><li><span>涧西区</span></li></ul><ul><li><span>吉利区</span></li></ul><ul><li><span>洛龙区</span></li></ul><ul><li><span>孟津县</span></li></ul><ul><li><span>新安县</span></li></ul><ul><li><span>栾川县</span></li></ul><ul><li><span>嵩县</span></li></ul><ul><li><span>汝阳县</span></li></ul><ul><li><span>宜阳县</span></li></ul><ul><li><span>洛宁县</span></li></ul><ul><li><span>伊川县</span></li></ul><ul><li><span>偃师市</span></li></ul></li></ul><ul><li><span>平顶山市</span><ul><li><span>新华区</span></li></ul><ul><li><span>卫东区</span></li></ul><ul><li><span>石龙区</span></li></ul><ul><li><span>湛河区</span></li></ul><ul><li><span>宝丰县</span></li></ul><ul><li><span>叶县</span></li></ul><ul><li><span>鲁山县</span></li></ul><ul><li><span>郏县</span></li></ul><ul><li><span>舞钢市</span></li></ul><ul><li><span>汝州市</span></li></ul></li></ul><ul><li><span>安阳市</span><ul><li><span>文峰区</span></li></ul><ul><li><span>北关区</span></li></ul><ul><li><span>殷都区</span></li></ul><ul><li><span>龙安区</span></li></ul><ul><li><span>安阳县</span></li></ul><ul><li><span>汤阴县</span></li></ul><ul><li><span>滑县</span></li></ul><ul><li><span>内黄县</span></li></ul><ul><li><span>林州市</span></li></ul></li></ul><ul><li><span>鹤壁市</span><ul><li><span>鹤山区</span></li></ul><ul><li><span>山城区</span></li></ul><ul><li><span>淇滨区</span></li></ul><ul><li><span>浚县</span></li></ul><ul><li><span>淇县</span></li></ul></li></ul><ul><li><span>新乡市</span><ul><li><span>红旗区</span></li></ul><ul><li><span>卫滨区</span></li></ul><ul><li><span>凤泉区</span></li></ul><ul><li><span>牧野区</span></li></ul><ul><li><span>新乡县</span></li></ul><ul><li><span>获嘉县</span></li></ul><ul><li><span>原阳县</span></li></ul><ul><li><span>延津县</span></li></ul><ul><li><span>封丘县</span></li></ul><ul><li><span>长垣县</span></li></ul><ul><li><span>卫辉市</span></li></ul><ul><li><span>辉县市</span></li></ul></li></ul><ul><li><span>焦作市</span><ul><li><span>解放区</span></li></ul><ul><li><span>中站区</span></li></ul><ul><li><span>马村区</span></li></ul><ul><li><span>山阳区</span></li></ul><ul><li><span>修武县</span></li></ul><ul><li><span>博爱县</span></li></ul><ul><li><span>武陟县</span></li></ul><ul><li><span>温县</span></li></ul><ul><li><span>济源市</span></li></ul><ul><li><span>沁阳市</span></li></ul><ul><li><span>孟州市</span></li></ul></li></ul><ul><li><span>濮阳市</span><ul><li><span>华龙区</span></li></ul><ul><li><span>清丰县</span></li></ul><ul><li><span>南乐县</span></li></ul><ul><li><span>范县</span></li></ul><ul><li><span>台前县</span></li></ul><ul><li><span>濮阳县</span></li></ul></li></ul><ul><li><span>许昌市</span><ul><li><span>魏都区</span></li></ul><ul><li><span>许昌县</span></li></ul><ul><li><span>鄢陵县</span></li></ul><ul><li><span>襄城县</span></li></ul><ul><li><span>禹州市</span></li></ul><ul><li><span>长葛市</span></li></ul></li></ul><ul><li><span>漯河市</span><ul><li><span>源汇区</span></li></ul><ul><li><span>郾城区</span></li></ul><ul><li><span>召陵区</span></li></ul><ul><li><span>舞阳县</span></li></ul><ul><li><span>临颍县</span></li></ul></li></ul><ul><li><span>三门峡市</span><ul><li><span>市辖区</span></li></ul><ul><li><span>湖滨区</span></li></ul><ul><li><span>渑池县</span></li></ul><ul><li><span>陕县</span></li></ul><ul><li><span>卢氏县</span></li></ul><ul><li><span>义马市</span></li></ul><ul><li><span>灵宝市</span></li></ul></li></ul><ul><li><span>南阳市</span><ul><li><span>宛城区</span></li></ul><ul><li><span>卧龙区</span></li></ul><ul><li><span>南召县</span></li></ul><ul><li><span>方城县</span></li></ul><ul><li><span>西峡县</span></li></ul><ul><li><span>镇平县</span></li></ul><ul><li><span>内乡县</span></li></ul><ul><li><span>淅川县</span></li></ul><ul><li><span>社旗县</span></li></ul><ul><li><span>唐河县</span></li></ul><ul><li><span>新野县</span></li></ul><ul><li><span>桐柏县</span></li></ul><ul><li><span>邓州市</span></li></ul></li></ul><ul><li><span>商丘市</span><ul><li><span>梁园区</span></li></ul><ul><li><span>睢阳区</span></li></ul><ul><li><span>民权县</span></li></ul><ul><li><span>睢县</span></li></ul><ul><li><span>宁陵县</span></li></ul><ul><li><span>柘城县</span></li></ul><ul><li><span>虞城县</span></li></ul><ul><li><span>夏邑县</span></li></ul><ul><li><span>永城市</span></li></ul></li></ul><ul><li><span>信阳市</span><ul><li><span>浉河区</span></li></ul><ul><li><span>平桥区</span></li></ul><ul><li><span>罗山县</span></li></ul><ul><li><span>光山县</span></li></ul><ul><li><span>新县</span></li></ul><ul><li><span>商城县</span></li></ul><ul><li><span>固始县</span></li></ul><ul><li><span>潢川县</span></li></ul><ul><li><span>淮滨县</span></li></ul><ul><li><span>息县</span></li></ul></li></ul><ul><li><span>周口市</span><ul><li><span>川汇区</span></li></ul><ul><li><span>扶沟县</span></li></ul><ul><li><span>西华县</span></li></ul><ul><li><span>商水县</span></li></ul><ul><li><span>沈丘县</span></li></ul><ul><li><span>郸城县</span></li></ul><ul><li><span>淮阳县</span></li></ul><ul><li><span>太康县</span></li></ul><ul><li><span>鹿邑县</span></li></ul><ul><li><span>项城市</span></li></ul></li></ul><ul><li><span>驻马店市</span><ul><li><span>驿城区</span></li></ul><ul><li><span>西平县</span></li></ul><ul><li><span>上蔡县</span></li></ul><ul><li><span>平舆县</span></li></ul><ul><li><span>正阳县</span></li></ul><ul><li><span>确山县</span></li></ul><ul><li><span>泌阳县</span></li></ul><ul><li><span>汝南县</span></li></ul><ul><li><span>遂平县</span></li></ul><ul><li><span>新蔡县</span></li></ul></li></ul></li><li><span>湖北省</span><ul><li><span>武汉市</span><ul><li><span>江岸区</span></li></ul><ul><li><span>江汉区</span></li></ul><ul><li><span>硚口区</span></li></ul><ul><li><span>汉阳区</span></li></ul><ul><li><span>武昌区</span></li></ul><ul><li><span>青山区</span></li></ul><ul><li><span>洪山区</span></li></ul><ul><li><span>东西湖区</span></li></ul><ul><li><span>汉南区</span></li></ul><ul><li><span>蔡甸区</span></li></ul><ul><li><span>江夏区</span></li></ul><ul><li><span>黄陂区</span></li></ul><ul><li><span>新洲区</span></li></ul></li></ul><ul><li><span>黄石市</span><ul><li><span>黄石港区</span></li></ul><ul><li><span>西塞山区</span></li></ul><ul><li><span>下陆区</span></li></ul><ul><li><span>铁山区</span></li></ul><ul><li><span>阳新县</span></li></ul><ul><li><span>大冶市</span></li></ul></li></ul><ul><li><span>十堰市</span><ul><li><span>茅箭区</span></li></ul><ul><li><span>张湾区</span></li></ul><ul><li><span>郧县</span></li></ul><ul><li><span>郧西县</span></li></ul><ul><li><span>竹山县</span></li></ul><ul><li><span>竹溪县</span></li></ul><ul><li><span>房县</span></li></ul><ul><li><span>丹江口市</span></li></ul></li></ul><ul><li><span>宜昌市</span><ul><li><span>西陵区</span></li></ul><ul><li><span>伍家岗区</span></li></ul><ul><li><span>点军区</span></li></ul><ul><li><span>猇亭区</span></li></ul><ul><li><span>夷陵区</span></li></ul><ul><li><span>远安县</span></li></ul><ul><li><span>兴山县</span></li></ul><ul><li><span>秭归县</span></li></ul><ul><li><span>长阳土家族自治县</span></li></ul><ul><li><span>五峰土家族自治县</span></li></ul><ul><li><span>宜都市</span></li></ul><ul><li><span>当阳市</span></li></ul><ul><li><span>枝江市</span></li></ul></li></ul><ul><li><span>襄樊市</span><ul><li><span>襄城区</span></li></ul><ul><li><span>樊城区</span></li></ul><ul><li><span>襄阳区</span></li></ul><ul><li><span>南漳县</span></li></ul><ul><li><span>谷城县</span></li></ul><ul><li><span>保康县</span></li></ul><ul><li><span>老河口市</span></li></ul><ul><li><span>枣阳市</span></li></ul><ul><li><span>宜城市</span></li></ul></li></ul><ul><li><span>鄂州市</span><ul><li><span>梁子湖区</span></li></ul><ul><li><span>华容区</span></li></ul><ul><li><span>鄂城区</span></li></ul></li></ul><ul><li><span>荆门市</span><ul><li><span>东宝区</span></li></ul><ul><li><span>掇刀区</span></li></ul><ul><li><span>京山县</span></li></ul><ul><li><span>沙洋县</span></li></ul><ul><li><span>钟祥市</span></li></ul></li></ul><ul><li><span>孝感市</span><ul><li><span>孝南区</span></li></ul><ul><li><span>孝昌县</span></li></ul><ul><li><span>大悟县</span></li></ul><ul><li><span>云梦县</span></li></ul><ul><li><span>应城市</span></li></ul><ul><li><span>安陆市</span></li></ul><ul><li><span>汉川市</span></li></ul></li></ul><ul><li><span>荆州市</span><ul><li><span>沙市区</span></li></ul><ul><li><span>荆州区</span></li></ul><ul><li><span>公安县</span></li></ul><ul><li><span>监利县</span></li></ul><ul><li><span>江陵县</span></li></ul><ul><li><span>石首市</span></li></ul><ul><li><span>洪湖市</span></li></ul><ul><li><span>松滋市</span></li></ul></li></ul><ul><li><span>黄冈市</span><ul><li><span>黄州区</span></li></ul><ul><li><span>团风县</span></li></ul><ul><li><span>红安县</span></li></ul><ul><li><span>罗田县</span></li></ul><ul><li><span>英山县</span></li></ul><ul><li><span>浠水县</span></li></ul><ul><li><span>蕲春县</span></li></ul><ul><li><span>黄梅县</span></li></ul><ul><li><span>麻城市</span></li></ul><ul><li><span>武穴市</span></li></ul></li></ul><ul><li><span>咸宁市</span><ul><li><span>咸安区</span></li></ul><ul><li><span>嘉鱼县</span></li></ul><ul><li><span>通城县</span></li></ul><ul><li><span>崇阳县</span></li></ul><ul><li><span>通山县</span></li></ul><ul><li><span>赤壁市</span></li></ul></li></ul><ul><li><span>随州市</span><ul><li><span>曾都区</span></li></ul><ul><li><span>广水市</span></li></ul></li></ul><ul><li><span>恩施土家族苗族自治州</span><ul><li><span>恩施市</span></li></ul><ul><li><span>利川市</span></li></ul><ul><li><span>建始县</span></li></ul><ul><li><span>巴东县</span></li></ul><ul><li><span>宣恩县</span></li></ul><ul><li><span>咸丰县</span></li></ul><ul><li><span>来凤县</span></li></ul><ul><li><span>鹤峰县</span></li></ul></li></ul><ul><li><span>神农架</span><ul><li><span>仙桃市</span></li></ul><ul><li><span>潜江市</span></li></ul><ul><li><span>天门市</span></li></ul><ul><li><span>神农架林区</span></li></ul></li></ul></li><li><span>湖南省</span><ul><li><span>长沙市</span><ul><li><span>芙蓉区</span></li></ul><ul><li><span>天心区</span></li></ul><ul><li><span>岳麓区</span></li></ul><ul><li><span>开福区</span></li></ul><ul><li><span>雨花区</span></li></ul><ul><li><span>长沙县</span></li></ul><ul><li><span>望城县</span></li></ul><ul><li><span>宁乡县</span></li></ul><ul><li><span>浏阳市</span></li></ul></li></ul><ul><li><span>株洲市</span><ul><li><span>荷塘区</span></li></ul><ul><li><span>芦淞区</span></li></ul><ul><li><span>石峰区</span></li></ul><ul><li><span>天元区</span></li></ul><ul><li><span>株洲县</span></li></ul><ul><li><span>攸县</span></li></ul><ul><li><span>茶陵县</span></li></ul><ul><li><span>炎陵县</span></li></ul><ul><li><span>醴陵市</span></li></ul></li></ul><ul><li><span>湘潭市</span><ul><li><span>雨湖区</span></li></ul><ul><li><span>岳塘区</span></li></ul><ul><li><span>湘潭县</span></li></ul><ul><li><span>湘乡市</span></li></ul><ul><li><span>韶山市</span></li></ul></li></ul><ul><li><span>衡阳市</span><ul><li><span>珠晖区</span></li></ul><ul><li><span>雁峰区</span></li></ul><ul><li><span>石鼓区</span></li></ul><ul><li><span>蒸湘区</span></li></ul><ul><li><span>南岳区</span></li></ul><ul><li><span>衡阳县</span></li></ul><ul><li><span>衡南县</span></li></ul><ul><li><span>衡山县</span></li></ul><ul><li><span>衡东县</span></li></ul><ul><li><span>祁东县</span></li></ul><ul><li><span>耒阳市</span></li></ul><ul><li><span>常宁市</span></li></ul></li></ul><ul><li><span>邵阳市</span><ul><li><span>双清区</span></li></ul><ul><li><span>大祥区</span></li></ul><ul><li><span>北塔区</span></li></ul><ul><li><span>邵东县</span></li></ul><ul><li><span>新邵县</span></li></ul><ul><li><span>邵阳县</span></li></ul><ul><li><span>隆回县</span></li></ul><ul><li><span>洞口县</span></li></ul><ul><li><span>绥宁县</span></li></ul><ul><li><span>新宁县</span></li></ul><ul><li><span>城步苗族自治县</span></li></ul><ul><li><span>武冈市</span></li></ul></li></ul><ul><li><span>岳阳市</span><ul><li><span>岳阳楼区</span></li></ul><ul><li><span>云溪区</span></li></ul><ul><li><span>君山区</span></li></ul><ul><li><span>岳阳县</span></li></ul><ul><li><span>华容县</span></li></ul><ul><li><span>湘阴县</span></li></ul><ul><li><span>平江县</span></li></ul><ul><li><span>汨罗市</span></li></ul><ul><li><span>临湘市</span></li></ul></li></ul><ul><li><span>常德市</span><ul><li><span>武陵区</span></li></ul><ul><li><span>鼎城区</span></li></ul><ul><li><span>安乡县</span></li></ul><ul><li><span>汉寿县</span></li></ul><ul><li><span>澧县</span></li></ul><ul><li><span>临澧县</span></li></ul><ul><li><span>桃源县</span></li></ul><ul><li><span>石门县</span></li></ul><ul><li><span>津市市</span></li></ul></li></ul><ul><li><span>张家界市</span><ul><li><span>永定区</span></li></ul><ul><li><span>武陵源区</span></li></ul><ul><li><span>慈利县</span></li></ul><ul><li><span>桑植县</span></li></ul></li></ul><ul><li><span>益阳市</span><ul><li><span>资阳区</span></li></ul><ul><li><span>赫山区</span></li></ul><ul><li><span>南县</span></li></ul><ul><li><span>桃江县</span></li></ul><ul><li><span>安化县</span></li></ul><ul><li><span>沅江市</span></li></ul></li></ul><ul><li><span>郴州市</span><ul><li><span>北湖区</span></li></ul><ul><li><span>苏仙区</span></li></ul><ul><li><span>桂阳县</span></li></ul><ul><li><span>宜章县</span></li></ul><ul><li><span>永兴县</span></li></ul><ul><li><span>嘉禾县</span></li></ul><ul><li><span>临武县</span></li></ul><ul><li><span>汝城县</span></li></ul><ul><li><span>桂东县</span></li></ul><ul><li><span>安仁县</span></li></ul><ul><li><span>资兴市</span></li></ul></li></ul><ul><li><span>永州市</span><ul><li><span>芝山区</span></li></ul><ul><li><span>冷水滩区</span></li></ul><ul><li><span>祁阳县</span></li></ul><ul><li><span>东安县</span></li></ul><ul><li><span>双牌县</span></li></ul><ul><li><span>道县</span></li></ul><ul><li><span>江永县</span></li></ul><ul><li><span>宁远县</span></li></ul><ul><li><span>蓝山县</span></li></ul><ul><li><span>新田县</span></li></ul><ul><li><span>江华瑶族自治县</span></li></ul></li></ul><ul><li><span>怀化市</span><ul><li><span>鹤城区</span></li></ul><ul><li><span>中方县</span></li></ul><ul><li><span>沅陵县</span></li></ul><ul><li><span>辰溪县</span></li></ul><ul><li><span>溆浦县</span></li></ul><ul><li><span>会同县</span></li></ul><ul><li><span>麻阳苗族自治县</span></li></ul><ul><li><span>新晃侗族自治县</span></li></ul><ul><li><span>芷江侗族自治县</span></li></ul><ul><li><span>靖州苗族侗族自治县</span></li></ul><ul><li><span>通道侗族自治县</span></li></ul><ul><li><span>洪江市</span></li></ul></li></ul><ul><li><span>娄底市</span><ul><li><span>娄星区</span></li></ul><ul><li><span>双峰县</span></li></ul><ul><li><span>新化县</span></li></ul><ul><li><span>冷水江市</span></li></ul><ul><li><span>涟源市</span></li></ul></li></ul><ul><li><span>湘西土家族苗族自治州</span><ul><li><span>吉首市</span></li></ul><ul><li><span>泸溪县</span></li></ul><ul><li><span>凤凰县</span></li></ul><ul><li><span>花垣县</span></li></ul><ul><li><span>保靖县</span></li></ul><ul><li><span>古丈县</span></li></ul><ul><li><span>永顺县</span></li></ul><ul><li><span>龙山县</span></li></ul></li></ul></li><li><span>广东省</span><ul><li><span>广州市</span><ul><li><span>东山区</span></li></ul><ul><li><span>荔湾区</span></li></ul><ul><li><span>越秀区</span></li></ul><ul><li><span>海珠区</span></li></ul><ul><li><span>天河区</span></li></ul><ul><li><span>芳村区</span></li></ul><ul><li><span>白云区</span></li></ul><ul><li><span>黄埔区</span></li></ul><ul><li><span>番禺区</span></li></ul><ul><li><span>花都区</span></li></ul><ul><li><span>增城市</span></li></ul><ul><li><span>从化市</span></li></ul></li></ul><ul><li><span>韶关市</span><ul><li><span>武江区</span></li></ul><ul><li><span>浈江区</span></li></ul><ul><li><span>曲江区</span></li></ul><ul><li><span>始兴县</span></li></ul><ul><li><span>仁化县</span></li></ul><ul><li><span>翁源县</span></li></ul><ul><li><span>乳源瑶族自治县</span></li></ul><ul><li><span>新丰县</span></li></ul><ul><li><span>乐昌市</span></li></ul><ul><li><span>南雄市</span></li></ul></li></ul><ul><li><span>深圳市</span><ul><li><span>罗湖区</span></li></ul><ul><li><span>福田区</span></li></ul><ul><li><span>南山区</span></li></ul><ul><li><span>宝安区</span></li></ul><ul><li><span>龙岗区</span></li></ul><ul><li><span>盐田区</span></li></ul></li></ul><ul><li><span>珠海市</span><ul><li><span>香洲区</span></li></ul><ul><li><span>斗门区</span></li></ul><ul><li><span>金湾区</span></li></ul></li></ul><ul><li><span>汕头市</span><ul><li><span>龙湖区</span></li></ul><ul><li><span>金平区</span></li></ul><ul><li><span>濠江区</span></li></ul><ul><li><span>潮阳区</span></li></ul><ul><li><span>潮南区</span></li></ul><ul><li><span>澄海区</span></li></ul><ul><li><span>南澳县</span></li></ul></li></ul><ul><li><span>佛山市</span><ul><li><span>禅城区</span></li></ul><ul><li><span>南海区</span></li></ul><ul><li><span>顺德区</span></li></ul><ul><li><span>三水区</span></li></ul><ul><li><span>高明区</span></li></ul></li></ul><ul><li><span>江门市</span><ul><li><span>蓬江区</span></li></ul><ul><li><span>江海区</span></li></ul><ul><li><span>新会区</span></li></ul><ul><li><span>台山市</span></li></ul><ul><li><span>开平市</span></li></ul><ul><li><span>鹤山市</span></li></ul><ul><li><span>恩平市</span></li></ul></li></ul><ul><li><span>湛江市</span><ul><li><span>赤坎区</span></li></ul><ul><li><span>霞山区</span></li></ul><ul><li><span>坡头区</span></li></ul><ul><li><span>麻章区</span></li></ul><ul><li><span>遂溪县</span></li></ul><ul><li><span>徐闻县</span></li></ul><ul><li><span>廉江市</span></li></ul><ul><li><span>雷州市</span></li></ul><ul><li><span>吴川市</span></li></ul></li></ul><ul><li><span>茂名市</span><ul><li><span>茂南区</span></li></ul><ul><li><span>茂港区</span></li></ul><ul><li><span>电白县</span></li></ul><ul><li><span>高州市</span></li></ul><ul><li><span>化州市</span></li></ul><ul><li><span>信宜市</span></li></ul></li></ul><ul><li><span>肇庆市</span><ul><li><span>端州区</span></li></ul><ul><li><span>鼎湖区</span></li></ul><ul><li><span>广宁县</span></li></ul><ul><li><span>怀集县</span></li></ul><ul><li><span>封开县</span></li></ul><ul><li><span>德庆县</span></li></ul><ul><li><span>高要市</span></li></ul><ul><li><span>四会市</span></li></ul></li></ul><ul><li><span>惠州市</span><ul><li><span>惠城区</span></li></ul><ul><li><span>惠阳区</span></li></ul><ul><li><span>博罗县</span></li></ul><ul><li><span>惠东县</span></li></ul><ul><li><span>龙门县</span></li></ul></li></ul><ul><li><span>梅州市</span><ul><li><span>梅江区</span></li></ul><ul><li><span>梅县</span></li></ul><ul><li><span>大埔县</span></li></ul><ul><li><span>丰顺县</span></li></ul><ul><li><span>五华县</span></li></ul><ul><li><span>平远县</span></li></ul><ul><li><span>蕉岭县</span></li></ul><ul><li><span>兴宁市</span></li></ul></li></ul><ul><li><span>汕尾市</span><ul><li><span>城区</span></li></ul><ul><li><span>海丰县</span></li></ul><ul><li><span>陆河县</span></li></ul><ul><li><span>陆丰市</span></li></ul></li></ul><ul><li><span>河源市</span><ul><li><span>源城区</span></li></ul><ul><li><span>紫金县</span></li></ul><ul><li><span>龙川县</span></li></ul><ul><li><span>连平县</span></li></ul><ul><li><span>和平县</span></li></ul><ul><li><span>东源县</span></li></ul></li></ul><ul><li><span>阳江市</span><ul><li><span>江城区</span></li></ul><ul><li><span>阳西县</span></li></ul><ul><li><span>阳东县</span></li></ul><ul><li><span>阳春市</span></li></ul></li></ul><ul><li><span>清远市</span><ul><li><span>清城区</span></li></ul><ul><li><span>佛冈县</span></li></ul><ul><li><span>阳山县</span></li></ul><ul><li><span>连山壮族瑶族自治县</span></li></ul><ul><li><span>连南瑶族自治县</span></li></ul><ul><li><span>清新县</span></li></ul><ul><li><span>英德市</span></li></ul><ul><li><span>连州市</span></li></ul></li></ul><ul><li><span>东莞市</span></li></ul><ul><li><span>中山市</span></li></ul><ul><li><span>潮州市</span><ul><li><span>湘桥区</span></li></ul><ul><li><span>潮安县</span></li></ul><ul><li><span>饶平县</span></li></ul></li></ul><ul><li><span>揭阳市</span><ul><li><span>榕城区</span></li></ul><ul><li><span>揭东县</span></li></ul><ul><li><span>揭西县</span></li></ul><ul><li><span>惠来县</span></li></ul><ul><li><span>普宁市</span></li></ul></li></ul><ul><li><span>云浮市</span><ul><li><span>云城区</span></li></ul><ul><li><span>新兴县</span></li></ul><ul><li><span>郁南县</span></li></ul><ul><li><span>云安县</span></li></ul><ul><li><span>罗定市</span></li></ul></li></ul></li><li><span>广西壮族自治区</span><ul><li><span>南宁市</span><ul><li><span>兴宁区</span></li></ul><ul><li><span>青秀区</span></li></ul><ul><li><span>江南区</span></li></ul><ul><li><span>西乡塘区</span></li></ul><ul><li><span>良庆区</span></li></ul><ul><li><span>邕宁区</span></li></ul><ul><li><span>武鸣县</span></li></ul><ul><li><span>隆安县</span></li></ul><ul><li><span>马山县</span></li></ul><ul><li><span>上林县</span></li></ul><ul><li><span>宾阳县</span></li></ul><ul><li><span>横县</span></li></ul></li></ul><ul><li><span>柳州市</span><ul><li><span>城中区</span></li></ul><ul><li><span>鱼峰区</span></li></ul><ul><li><span>柳南区</span></li></ul><ul><li><span>柳北区</span></li></ul><ul><li><span>柳江县</span></li></ul><ul><li><span>柳城县</span></li></ul><ul><li><span>鹿寨县</span></li></ul><ul><li><span>融安县</span></li></ul><ul><li><span>融水苗族自治县</span></li></ul><ul><li><span>三江侗族自治县</span></li></ul></li></ul><ul><li><span>桂林市</span><ul><li><span>秀峰区</span></li></ul><ul><li><span>叠彩区</span></li></ul><ul><li><span>象山区</span></li></ul><ul><li><span>七星区</span></li></ul><ul><li><span>雁山区</span></li></ul><ul><li><span>阳朔县</span></li></ul><ul><li><span>临桂县</span></li></ul><ul><li><span>灵川县</span></li></ul><ul><li><span>全州县</span></li></ul><ul><li><span>兴安县</span></li></ul><ul><li><span>永福县</span></li></ul><ul><li><span>灌阳县</span></li></ul><ul><li><span>龙胜各族自治县</span></li></ul><ul><li><span>资源县</span></li></ul><ul><li><span>平乐县</span></li></ul><ul><li><span>荔蒲县</span></li></ul><ul><li><span>恭城瑶族自治县</span></li></ul></li></ul><ul><li><span>梧州市</span><ul><li><span>万秀区</span></li></ul><ul><li><span>蝶山区</span></li></ul><ul><li><span>长洲区</span></li></ul><ul><li><span>苍梧县</span></li></ul><ul><li><span>藤县</span></li></ul><ul><li><span>蒙山县</span></li></ul><ul><li><span>岑溪市</span></li></ul></li></ul><ul><li><span>北海市</span><ul><li><span>海城区</span></li></ul><ul><li><span>银海区</span></li></ul><ul><li><span>铁山港区</span></li></ul><ul><li><span>合浦县</span></li></ul></li></ul><ul><li><span>防城港市</span><ul><li><span>港口区</span></li></ul><ul><li><span>防城区</span></li></ul><ul><li><span>上思县</span></li></ul><ul><li><span>东兴市</span></li></ul></li></ul><ul><li><span>钦州市</span><ul><li><span>钦南区</span></li></ul><ul><li><span>钦北区</span></li></ul><ul><li><span>灵山县</span></li></ul><ul><li><span>浦北县</span></li></ul></li></ul><ul><li><span>贵港市</span><ul><li><span>港北区</span></li></ul><ul><li><span>港南区</span></li></ul><ul><li><span>覃塘区</span></li></ul><ul><li><span>平南县</span></li></ul><ul><li><span>桂平市</span></li></ul></li></ul><ul><li><span>玉林市</span><ul><li><span>玉州区</span></li></ul><ul><li><span>容县</span></li></ul><ul><li><span>陆川县</span></li></ul><ul><li><span>博白县</span></li></ul><ul><li><span>兴业县</span></li></ul><ul><li><span>北流市</span></li></ul></li></ul><ul><li><span>百色市</span><ul><li><span>右江区</span></li></ul><ul><li><span>田阳县</span></li></ul><ul><li><span>田东县</span></li></ul><ul><li><span>平果县</span></li></ul><ul><li><span>德保县</span></li></ul><ul><li><span>靖西县</span></li></ul><ul><li><span>那坡县</span></li></ul><ul><li><span>凌云县</span></li></ul><ul><li><span>乐业县</span></li></ul><ul><li><span>田林县</span></li></ul><ul><li><span>西林县</span></li></ul><ul><li><span>隆林各族自治县</span></li></ul></li></ul><ul><li><span>贺州市</span><ul><li><span>八步区</span></li></ul><ul><li><span>昭平县</span></li></ul><ul><li><span>钟山县</span></li></ul><ul><li><span>富川瑶族自治县</span></li></ul></li></ul><ul><li><span>河池市</span><ul><li><span>金城江区</span></li></ul><ul><li><span>南丹县</span></li></ul><ul><li><span>天峨县</span></li></ul><ul><li><span>凤山县</span></li></ul><ul><li><span>东兰县</span></li></ul><ul><li><span>罗城仫佬族自治县</span></li></ul><ul><li><span>环江毛南族自治县</span></li></ul><ul><li><span>巴马瑶族自治县</span></li></ul><ul><li><span>都安瑶族自治县</span></li></ul><ul><li><span>大化瑶族自治县</span></li></ul><ul><li><span>宜州市</span></li></ul></li></ul><ul><li><span>来宾市</span><ul><li><span>兴宾区</span></li></ul><ul><li><span>忻城县</span></li></ul><ul><li><span>象州县</span></li></ul><ul><li><span>武宣县</span></li></ul><ul><li><span>金秀瑶族自治县</span></li></ul><ul><li><span>合山市</span></li></ul></li></ul><ul><li><span>崇左市</span><ul><li><span>江洲区</span></li></ul><ul><li><span>扶绥县</span></li></ul><ul><li><span>宁明县</span></li></ul><ul><li><span>龙州县</span></li></ul><ul><li><span>大新县</span></li></ul><ul><li><span>天等县</span></li></ul><ul><li><span>凭祥市</span></li></ul></li></ul></li><li><span>海南省</span><ul><li><span>海口市</span><ul><li><span>秀英区</span></li></ul><ul><li><span>龙华区</span></li></ul><ul><li><span>琼山区</span></li></ul><ul><li><span>美兰区</span></li></ul></li></ul><ul><li><span>三亚市</span><ul><li><span>五指山市</span></li></ul><ul><li><span>琼海市</span></li></ul><ul><li><span>儋州市</span></li></ul><ul><li><span>文昌市</span></li></ul><ul><li><span>万宁市</span></li></ul><ul><li><span>东方市</span></li></ul><ul><li><span>定安县</span></li></ul><ul><li><span>屯昌县</span></li></ul><ul><li><span>澄迈县</span></li></ul><ul><li><span>临高县</span></li></ul><ul><li><span>白沙黎族自治县</span></li></ul><ul><li><span>昌江黎族自治县</span></li></ul><ul><li><span>乐东黎族自治县</span></li></ul><ul><li><span>陵水黎族自治县</span></li></ul><ul><li><span>保亭黎族苗族自治县</span></li></ul><ul><li><span>琼中黎族苗族自治县</span></li></ul><ul><li><span>西沙群岛</span></li></ul><ul><li><span>南沙群岛</span></li></ul><ul><li><span>中沙群岛的岛礁及其海域</span></li></ul></li></ul></li><li><span>重庆市</span><ul><li><span>重庆市</span><ul><li><span>万州区</span></li></ul><ul><li><span>涪陵区</span></li></ul><ul><li><span>渝中区</span></li></ul><ul><li><span>大渡口区</span></li></ul><ul><li><span>江北区</span></li></ul><ul><li><span>沙坪坝区</span></li></ul><ul><li><span>九龙坡区</span></li></ul><ul><li><span>南岸区</span></li></ul><ul><li><span>北碚区</span></li></ul><ul><li><span>万盛区</span></li></ul><ul><li><span>双桥区</span></li></ul><ul><li><span>渝北区</span></li></ul><ul><li><span>巴南区</span></li></ul><ul><li><span>黔江区</span></li></ul><ul><li><span>长寿区</span></li></ul><ul><li><span>綦江县</span></li></ul><ul><li><span>潼南县</span></li></ul><ul><li><span>铜梁县</span></li></ul><ul><li><span>大足县</span></li></ul><ul><li><span>荣昌县</span></li></ul><ul><li><span>璧山县</span></li></ul><ul><li><span>梁平县</span></li></ul><ul><li><span>城口县</span></li></ul><ul><li><span>丰都县</span></li></ul><ul><li><span>垫江县</span></li></ul><ul><li><span>武隆县</span></li></ul><ul><li><span>忠县</span></li></ul><ul><li><span>开县</span></li></ul><ul><li><span>云阳县</span></li></ul><ul><li><span>奉节县</span></li></ul><ul><li><span>巫山县</span></li></ul><ul><li><span>巫溪县</span></li></ul><ul><li><span>石柱土家族自治县</span></li></ul><ul><li><span>秀山土家族苗族自治县</span></li></ul><ul><li><span>酉阳土家族苗族自治县</span></li></ul><ul><li><span>彭水苗族土家族自治县</span></li></ul><ul><li><span>江津市</span></li></ul><ul><li><span>合川市</span></li></ul><ul><li><span>永川市</span></li></ul><ul><li><span>南川市</span></li></ul></li></ul></li><li><span>四川省</span><ul><li><span>成都市</span><ul><li><span>锦江区</span></li></ul><ul><li><span>青羊区</span></li></ul><ul><li><span>金牛区</span></li></ul><ul><li><span>武侯区</span></li></ul><ul><li><span>成华区</span></li></ul><ul><li><span>龙泉驿区</span></li></ul><ul><li><span>青白江区</span></li></ul><ul><li><span>新都区</span></li></ul><ul><li><span>温江区</span></li></ul><ul><li><span>金堂县</span></li></ul><ul><li><span>双流县</span></li></ul><ul><li><span>郫县</span></li></ul><ul><li><span>大邑县</span></li></ul><ul><li><span>蒲江县</span></li></ul><ul><li><span>新津县</span></li></ul><ul><li><span>都江堰市</span></li></ul><ul><li><span>彭州市</span></li></ul><ul><li><span>邛崃市</span></li></ul><ul><li><span>崇州市</span></li></ul></li></ul><ul><li><span>自贡市</span><ul><li><span>自流井区</span></li></ul><ul><li><span>贡井区</span></li></ul><ul><li><span>大安区</span></li></ul><ul><li><span>沿滩区</span></li></ul><ul><li><span>荣县</span></li></ul><ul><li><span>富顺县</span></li></ul></li></ul><ul><li><span>攀枝花市</span><ul><li><span>东区</span></li></ul><ul><li><span>西区</span></li></ul><ul><li><span>仁和区</span></li></ul><ul><li><span>米易县</span></li></ul><ul><li><span>盐边县</span></li></ul></li></ul><ul><li><span>泸州市</span><ul><li><span>江阳区</span></li></ul><ul><li><span>纳溪区</span></li></ul><ul><li><span>龙马潭区</span></li></ul><ul><li><span>泸县</span></li></ul><ul><li><span>合江县</span></li></ul><ul><li><span>叙永县</span></li></ul><ul><li><span>古蔺县</span></li></ul></li></ul><ul><li><span>德阳市</span><ul><li><span>旌阳区</span></li></ul><ul><li><span>中江县</span></li></ul><ul><li><span>罗江县</span></li></ul><ul><li><span>广汉市</span></li></ul><ul><li><span>什邡市</span></li></ul><ul><li><span>绵竹市</span></li></ul></li></ul><ul><li><span>绵阳市</span><ul><li><span>涪城区</span></li></ul><ul><li><span>游仙区</span></li></ul><ul><li><span>三台县</span></li></ul><ul><li><span>盐亭县</span></li></ul><ul><li><span>安县</span></li></ul><ul><li><span>梓潼县</span></li></ul><ul><li><span>北川羌族自治县</span></li></ul><ul><li><span>平武县</span></li></ul><ul><li><span>江油市</span></li></ul></li></ul><ul><li><span>广元市</span><ul><li><span>市中区</span></li></ul><ul><li><span>元坝区</span></li></ul><ul><li><span>朝天区</span></li></ul><ul><li><span>旺苍县</span></li></ul><ul><li><span>青川县</span></li></ul><ul><li><span>剑阁县</span></li></ul><ul><li><span>苍溪县</span></li></ul></li></ul><ul><li><span>遂宁市</span><ul><li><span>船山区</span></li></ul><ul><li><span>安居区</span></li></ul><ul><li><span>蓬溪县</span></li></ul><ul><li><span>射洪县</span></li></ul><ul><li><span>大英县</span></li></ul></li></ul><ul><li><span>内江市</span><ul><li><span>市中区</span></li></ul><ul><li><span>东兴区</span></li></ul><ul><li><span>威远县</span></li></ul><ul><li><span>资中县</span></li></ul><ul><li><span>隆昌县</span></li></ul></li></ul><ul><li><span>乐山市</span><ul><li><span>市中区</span></li></ul><ul><li><span>沙湾区</span></li></ul><ul><li><span>五通桥区</span></li></ul><ul><li><span>金口河区</span></li></ul><ul><li><span>犍为县</span></li></ul><ul><li><span>井研县</span></li></ul><ul><li><span>夹江县</span></li></ul><ul><li><span>沐川县</span></li></ul><ul><li><span>峨边彝族自治县</span></li></ul><ul><li><span>马边彝族自治县</span></li></ul><ul><li><span>峨眉山市</span></li></ul></li></ul><ul><li><span>南充市</span><ul><li><span>顺庆区</span></li></ul><ul><li><span>高坪区</span></li></ul><ul><li><span>嘉陵区</span></li></ul><ul><li><span>南部县</span></li></ul><ul><li><span>营山县</span></li></ul><ul><li><span>蓬安县</span></li></ul><ul><li><span>仪陇县</span></li></ul><ul><li><span>西充县</span></li></ul><ul><li><span>阆中市</span></li></ul></li></ul><ul><li><span>眉山市</span><ul><li><span>东坡区</span></li></ul><ul><li><span>仁寿县</span></li></ul><ul><li><span>彭山县</span></li></ul><ul><li><span>洪雅县</span></li></ul><ul><li><span>丹棱县</span></li></ul><ul><li><span>青神县</span></li></ul></li></ul><ul><li><span>宜宾市</span><ul><li><span>翠屏区</span></li></ul><ul><li><span>宜宾县</span></li></ul><ul><li><span>南溪县</span></li></ul><ul><li><span>江安县</span></li></ul><ul><li><span>长宁县</span></li></ul><ul><li><span>高县</span></li></ul><ul><li><span>珙县</span></li></ul><ul><li><span>筠连县</span></li></ul><ul><li><span>兴文县</span></li></ul><ul><li><span>屏山县</span></li></ul></li></ul><ul><li><span>广安市</span><ul><li><span>广安区</span></li></ul><ul><li><span>岳池县</span></li></ul><ul><li><span>武胜县</span></li></ul><ul><li><span>邻水县</span></li></ul><ul><li><span>华蓥市</span></li></ul></li></ul><ul><li><span>达州市</span><ul><li><span>通川区</span></li></ul><ul><li><span>达县</span></li></ul><ul><li><span>宣汉县</span></li></ul><ul><li><span>开江县</span></li></ul><ul><li><span>大竹县</span></li></ul><ul><li><span>渠县</span></li></ul><ul><li><span>万源市</span></li></ul></li></ul><ul><li><span>雅安市</span><ul><li><span>雨城区</span></li></ul><ul><li><span>名山县</span></li></ul><ul><li><span>荥经县</span></li></ul><ul><li><span>汉源县</span></li></ul><ul><li><span>石棉县</span></li></ul><ul><li><span>天全县</span></li></ul><ul><li><span>芦山县</span></li></ul><ul><li><span>宝兴县</span></li></ul></li></ul><ul><li><span>巴中市</span><ul><li><span>巴州区</span></li></ul><ul><li><span>通江县</span></li></ul><ul><li><span>南江县</span></li></ul><ul><li><span>平昌县</span></li></ul></li></ul><ul><li><span>资阳市</span><ul><li><span>雁江区</span></li></ul><ul><li><span>安岳县</span></li></ul><ul><li><span>乐至县</span></li></ul><ul><li><span>简阳市</span></li></ul></li></ul><ul><li><span>阿坝藏族羌族自治州</span><ul><li><span>汶川县</span></li></ul><ul><li><span>理县</span></li></ul><ul><li><span>茂县</span></li></ul><ul><li><span>松潘县</span></li></ul><ul><li><span>九寨沟县</span></li></ul><ul><li><span>金川县</span></li></ul><ul><li><span>小金县</span></li></ul><ul><li><span>黑水县</span></li></ul><ul><li><span>马尔康县</span></li></ul><ul><li><span>壤塘县</span></li></ul><ul><li><span>阿坝县</span></li></ul><ul><li><span>若尔盖县</span></li></ul><ul><li><span>红原县</span></li></ul></li></ul><ul><li><span>甘孜藏族自治州</span><ul><li><span>康定县</span></li></ul><ul><li><span>泸定县</span></li></ul><ul><li><span>丹巴县</span></li></ul><ul><li><span>九龙县</span></li></ul><ul><li><span>雅江县</span></li></ul><ul><li><span>道孚县</span></li></ul><ul><li><span>炉霍县</span></li></ul><ul><li><span>甘孜县</span></li></ul><ul><li><span>新龙县</span></li></ul><ul><li><span>德格县</span></li></ul><ul><li><span>白玉县</span></li></ul><ul><li><span>石渠县</span></li></ul><ul><li><span>色达县</span></li></ul><ul><li><span>理塘县</span></li></ul><ul><li><span>巴塘县</span></li></ul><ul><li><span>乡城县</span></li></ul><ul><li><span>稻城县</span></li></ul><ul><li><span>得荣县</span></li></ul></li></ul><ul><li><span>凉山彝族自治州</span><ul><li><span>西昌市</span></li></ul><ul><li><span>木里藏族自治县</span></li></ul><ul><li><span>盐源县</span></li></ul><ul><li><span>德昌县</span></li></ul><ul><li><span>会理县</span></li></ul><ul><li><span>会东县</span></li></ul><ul><li><span>宁南县</span></li></ul><ul><li><span>普格县</span></li></ul><ul><li><span>布拖县</span></li></ul><ul><li><span>金阳县</span></li></ul><ul><li><span>昭觉县</span></li></ul><ul><li><span>喜德县</span></li></ul><ul><li><span>冕宁县</span></li></ul><ul><li><span>越西县</span></li></ul><ul><li><span>甘洛县</span></li></ul><ul><li><span>美姑县</span></li></ul><ul><li><span>雷波县</span></li></ul></li></ul></li><li><span>贵州省</span><ul><li><span>贵阳市</span><ul><li><span>南明区</span></li></ul><ul><li><span>云岩区</span></li></ul><ul><li><span>花溪区</span></li></ul><ul><li><span>乌当区</span></li></ul><ul><li><span>白云区</span></li></ul><ul><li><span>小河区</span></li></ul><ul><li><span>开阳县</span></li></ul><ul><li><span>息烽县</span></li></ul><ul><li><span>修文县</span></li></ul><ul><li><span>清镇市</span></li></ul></li></ul><ul><li><span>六盘水市</span><ul><li><span>钟山区</span></li></ul><ul><li><span>六枝特区</span></li></ul><ul><li><span>水城县</span></li></ul><ul><li><span>盘县</span></li></ul></li></ul><ul><li><span>遵义市</span><ul><li><span>红花岗区</span></li></ul><ul><li><span>汇川区</span></li></ul><ul><li><span>遵义县</span></li></ul><ul><li><span>桐梓县</span></li></ul><ul><li><span>绥阳县</span></li></ul><ul><li><span>正安县</span></li></ul><ul><li><span>道真仡佬族苗族自治县</span></li></ul><ul><li><span>务川仡佬族苗族自治县</span></li></ul><ul><li><span>凤冈县</span></li></ul><ul><li><span>湄潭县</span></li></ul><ul><li><span>余庆县</span></li></ul><ul><li><span>习水县</span></li></ul><ul><li><span>赤水市</span></li></ul><ul><li><span>仁怀市</span></li></ul></li></ul><ul><li><span>安顺市</span><ul><li><span>西秀区</span></li></ul><ul><li><span>平坝县</span></li></ul><ul><li><span>普定县</span></li></ul><ul><li><span>镇宁布依族苗族自治县</span></li></ul><ul><li><span>关岭布依族苗族自治县</span></li></ul><ul><li><span>紫云苗族布依族自治县</span></li></ul></li></ul><ul><li><span>铜仁地区</span><ul><li><span>铜仁市</span></li></ul><ul><li><span>江口县</span></li></ul><ul><li><span>玉屏侗族自治县</span></li></ul><ul><li><span>石阡县</span></li></ul><ul><li><span>思南县</span></li></ul><ul><li><span>印江土家族苗族自治县</span></li></ul><ul><li><span>德江县</span></li></ul><ul><li><span>沿河土家族自治县</span></li></ul><ul><li><span>松桃苗族自治县</span></li></ul><ul><li><span>万山特区</span></li></ul></li></ul><ul><li><span>黔西南布依族苗族自治州</span><ul><li><span>兴义市</span></li></ul><ul><li><span>兴仁县</span></li></ul><ul><li><span>普安县</span></li></ul><ul><li><span>晴隆县</span></li></ul><ul><li><span>贞丰县</span></li></ul><ul><li><span>望谟县</span></li></ul><ul><li><span>册亨县</span></li></ul><ul><li><span>安龙县</span></li></ul></li></ul><ul><li><span>毕节地区</span><ul><li><span>毕节市</span></li></ul><ul><li><span>大方县</span></li></ul><ul><li><span>黔西县</span></li></ul><ul><li><span>金沙县</span></li></ul><ul><li><span>织金县</span></li></ul><ul><li><span>纳雍县</span></li></ul><ul><li><span>威宁彝族回族苗族自治县</span></li></ul><ul><li><span>赫章县</span></li></ul></li></ul><ul><li><span>黔东南苗族侗族自治州</span><ul><li><span>凯里市</span></li></ul><ul><li><span>黄平县</span></li></ul><ul><li><span>施秉县</span></li></ul><ul><li><span>三穗县</span></li></ul><ul><li><span>镇远县</span></li></ul><ul><li><span>岑巩县</span></li></ul><ul><li><span>天柱县</span></li></ul><ul><li><span>锦屏县</span></li></ul><ul><li><span>剑河县</span></li></ul><ul><li><span>台江县</span></li></ul><ul><li><span>黎平县</span></li></ul><ul><li><span>榕江县</span></li></ul><ul><li><span>从江县</span></li></ul><ul><li><span>雷山县</span></li></ul><ul><li><span>麻江县</span></li></ul><ul><li><span>丹寨县</span></li></ul></li></ul><ul><li><span>黔南布依族苗族自治州</span><ul><li><span>都匀市</span></li></ul><ul><li><span>福泉市</span></li></ul><ul><li><span>荔波县</span></li></ul><ul><li><span>贵定县</span></li></ul><ul><li><span>瓮安县</span></li></ul><ul><li><span>独山县</span></li></ul><ul><li><span>平塘县</span></li></ul><ul><li><span>罗甸县</span></li></ul><ul><li><span>长顺县</span></li></ul><ul><li><span>龙里县</span></li></ul><ul><li><span>惠水县</span></li></ul><ul><li><span>三都水族自治县</span></li></ul></li></ul></li><li><span>云南省</span><ul><li><span>昆明市</span><ul><li><span>五华区</span></li></ul><ul><li><span>盘龙区</span></li></ul><ul><li><span>官渡区</span></li></ul><ul><li><span>西山区</span></li></ul><ul><li><span>东川区</span></li></ul><ul><li><span>呈贡县</span></li></ul><ul><li><span>晋宁县</span></li></ul><ul><li><span>富民县</span></li></ul><ul><li><span>宜良县</span></li></ul><ul><li><span>石林彝族自治县</span></li></ul><ul><li><span>嵩明县</span></li></ul><ul><li><span>禄劝彝族苗族自治县</span></li></ul><ul><li><span>寻甸回族彝族自治县</span></li></ul><ul><li><span>安宁市</span></li></ul></li></ul><ul><li><span>曲靖市</span><ul><li><span>麒麟区</span></li></ul><ul><li><span>马龙县</span></li></ul><ul><li><span>陆良县</span></li></ul><ul><li><span>师宗县</span></li></ul><ul><li><span>罗平县</span></li></ul><ul><li><span>富源县</span></li></ul><ul><li><span>会泽县</span></li></ul><ul><li><span>沾益县</span></li></ul><ul><li><span>宣威市</span></li></ul></li></ul><ul><li><span>玉溪市</span><ul><li><span>红塔区</span></li></ul><ul><li><span>江川县</span></li></ul><ul><li><span>澄江县</span></li></ul><ul><li><span>通海县</span></li></ul><ul><li><span>华宁县</span></li></ul><ul><li><span>易门县</span></li></ul><ul><li><span>峨山彝族自治县</span></li></ul><ul><li><span>新平彝族傣族自治县</span></li></ul><ul><li><span>元江哈尼族彝族傣族自治县</span></li></ul></li></ul><ul><li><span>保山市</span><ul><li><span>隆阳区</span></li></ul><ul><li><span>施甸县</span></li></ul><ul><li><span>腾冲县</span></li></ul><ul><li><span>龙陵县</span></li></ul><ul><li><span>昌宁县</span></li></ul></li></ul><ul><li><span>昭通市</span><ul><li><span>昭阳区</span></li></ul><ul><li><span>鲁甸县</span></li></ul><ul><li><span>巧家县</span></li></ul><ul><li><span>盐津县</span></li></ul><ul><li><span>大关县</span></li></ul><ul><li><span>永善县</span></li></ul><ul><li><span>绥江县</span></li></ul><ul><li><span>镇雄县</span></li></ul><ul><li><span>彝良县</span></li></ul><ul><li><span>威信县</span></li></ul><ul><li><span>水富县</span></li></ul></li></ul><ul><li><span>丽江市</span><ul><li><span>古城区</span></li></ul><ul><li><span>玉龙纳西族自治县</span></li></ul><ul><li><span>永胜县</span></li></ul><ul><li><span>华坪县</span></li></ul><ul><li><span>宁蒗彝族自治县</span></li></ul></li></ul><ul><li><span>思茅市</span><ul><li><span>翠云区</span></li></ul><ul><li><span>普洱哈尼族彝族自治县</span></li></ul><ul><li><span>墨江哈尼族自治县</span></li></ul><ul><li><span>景东彝族自治县</span></li></ul><ul><li><span>景谷傣族彝族自治县</span></li></ul><ul><li><span>镇沅彝族哈尼族拉祜族自治县</span></li></ul><ul><li><span>江城哈尼族彝族自治县</span></li></ul><ul><li><span>孟连傣族拉祜族佤族自治县</span></li></ul><ul><li><span>澜沧拉祜族自治县</span></li></ul><ul><li><span>西盟佤族自治县</span></li></ul></li></ul><ul><li><span>临沧市</span><ul><li><span>临翔区</span></li></ul><ul><li><span>凤庆县</span></li></ul><ul><li><span>云县</span></li></ul><ul><li><span>永德县</span></li></ul><ul><li><span>镇康县</span></li></ul><ul><li><span>双江拉祜族佤族布朗族傣族自治县</span></li></ul><ul><li><span>耿马傣族佤族自治县</span></li></ul><ul><li><span>沧源佤族自治县</span></li></ul></li></ul><ul><li><span>楚雄彝族自治州</span><ul><li><span>楚雄市</span></li></ul><ul><li><span>双柏县</span></li></ul><ul><li><span>牟定县</span></li></ul><ul><li><span>南华县</span></li></ul><ul><li><span>姚安县</span></li></ul><ul><li><span>大姚县</span></li></ul><ul><li><span>永仁县</span></li></ul><ul><li><span>元谋县</span></li></ul><ul><li><span>武定县</span></li></ul><ul><li><span>禄丰县</span></li></ul></li></ul><ul><li><span>红河哈尼族彝族自治州</span><ul><li><span>个旧市</span></li></ul><ul><li><span>开远市</span></li></ul><ul><li><span>蒙自县</span></li></ul><ul><li><span>屏边苗族自治县</span></li></ul><ul><li><span>建水县</span></li></ul><ul><li><span>石屏县</span></li></ul><ul><li><span>弥勒县</span></li></ul><ul><li><span>泸西县</span></li></ul><ul><li><span>元阳县</span></li></ul><ul><li><span>红河县</span></li></ul><ul><li><span>金平苗族瑶族傣族自治县</span></li></ul><ul><li><span>绿春县</span></li></ul><ul><li><span>河口瑶族自治县</span></li></ul></li></ul><ul><li><span>文山壮族苗族自治州</span><ul><li><span>文山县</span></li></ul><ul><li><span>砚山县</span></li></ul><ul><li><span>西畴县</span></li></ul><ul><li><span>麻栗坡县</span></li></ul><ul><li><span>马关县</span></li></ul><ul><li><span>丘北县</span></li></ul><ul><li><span>广南县</span></li></ul><ul><li><span>富宁县</span></li></ul></li></ul><ul><li><span>西双版纳傣族自治州</span><ul><li><span>景洪市</span></li></ul><ul><li><span>勐海县</span></li></ul><ul><li><span>勐腊县</span></li></ul></li></ul><ul><li><span>大理白族自治州</span><ul><li><span>大理市</span></li></ul><ul><li><span>漾濞彝族自治县</span></li></ul><ul><li><span>祥云县</span></li></ul><ul><li><span>宾川县</span></li></ul><ul><li><span>弥渡县</span></li></ul><ul><li><span>南涧彝族自治县</span></li></ul><ul><li><span>巍山彝族回族自治县</span></li></ul><ul><li><span>永平县</span></li></ul><ul><li><span>云龙县</span></li></ul><ul><li><span>洱源县</span></li></ul><ul><li><span>剑川县</span></li></ul><ul><li><span>鹤庆县</span></li></ul></li></ul><ul><li><span>德宏傣族景颇族自治州</span><ul><li><span>瑞丽市</span></li></ul><ul><li><span>潞西市</span></li></ul><ul><li><span>梁河县</span></li></ul><ul><li><span>盈江县</span></li></ul><ul><li><span>陇川县</span></li></ul></li></ul><ul><li><span>怒江傈僳族自治州</span><ul><li><span>泸水县</span></li></ul><ul><li><span>福贡县</span></li></ul><ul><li><span>贡山独龙族怒族自治县</span></li></ul><ul><li><span>兰坪白族普米族自治县</span></li></ul></li></ul><ul><li><span>迪庆藏族自治州</span><ul><li><span>香格里拉县</span></li></ul><ul><li><span>德钦县</span></li></ul><ul><li><span>维西傈僳族自治县</span></li></ul></li></ul></li><li><span>西藏自治区</span><ul><li><span>拉萨市</span><ul><li><span>城关区</span></li></ul><ul><li><span>林周县</span></li></ul><ul><li><span>当雄县</span></li></ul><ul><li><span>尼木县</span></li></ul><ul><li><span>曲水县</span></li></ul><ul><li><span>堆龙德庆县</span></li></ul><ul><li><span>达孜县</span></li></ul><ul><li><span>墨竹工卡县</span></li></ul></li></ul><ul><li><span>昌都地区</span><ul><li><span>昌都县</span></li></ul><ul><li><span>江达县</span></li></ul><ul><li><span>贡觉县</span></li></ul><ul><li><span>类乌齐县</span></li></ul><ul><li><span>丁青县</span></li></ul><ul><li><span>察雅县</span></li></ul><ul><li><span>八宿县</span></li></ul><ul><li><span>左贡县</span></li></ul><ul><li><span>芒康县</span></li></ul><ul><li><span>洛隆县</span></li></ul><ul><li><span>边坝县</span></li></ul></li></ul><ul><li><span>山南地区</span><ul><li><span>乃东县</span></li></ul><ul><li><span>扎囊县</span></li></ul><ul><li><span>贡嘎县</span></li></ul><ul><li><span>桑日县</span></li></ul><ul><li><span>琼结县</span></li></ul><ul><li><span>曲松县</span></li></ul><ul><li><span>措美县</span></li></ul><ul><li><span>洛扎县</span></li></ul><ul><li><span>加查县</span></li></ul><ul><li><span>隆子县</span></li></ul><ul><li><span>错那县</span></li></ul><ul><li><span>浪卡子县</span></li></ul></li></ul><ul><li><span>日喀则地区</span><ul><li><span>日喀则市</span></li></ul><ul><li><span>南木林县</span></li></ul><ul><li><span>江孜县</span></li></ul><ul><li><span>定日县</span></li></ul><ul><li><span>萨迦县</span></li></ul><ul><li><span>拉孜县</span></li></ul><ul><li><span>昂仁县</span></li></ul><ul><li><span>谢通门县</span></li></ul><ul><li><span>白朗县</span></li></ul><ul><li><span>仁布县</span></li></ul><ul><li><span>康马县</span></li></ul><ul><li><span>定结县</span></li></ul><ul><li><span>仲巴县</span></li></ul><ul><li><span>亚东县</span></li></ul><ul><li><span>吉隆县</span></li></ul><ul><li><span>聂拉木县</span></li></ul><ul><li><span>萨嘎县</span></li></ul><ul><li><span>岗巴县</span></li></ul></li></ul><ul><li><span>那曲地区</span><ul><li><span>那曲县</span></li></ul><ul><li><span>嘉黎县</span></li></ul><ul><li><span>比如县</span></li></ul><ul><li><span>聂荣县</span></li></ul><ul><li><span>安多县</span></li></ul><ul><li><span>申扎县</span></li></ul><ul><li><span>索县</span></li></ul><ul><li><span>班戈县</span></li></ul><ul><li><span>巴青县</span></li></ul><ul><li><span>尼玛县</span></li></ul></li></ul><ul><li><span>阿里地区</span><ul><li><span>普兰县</span></li></ul><ul><li><span>札达县</span></li></ul><ul><li><span>噶尔县</span></li></ul><ul><li><span>日土县</span></li></ul><ul><li><span>革吉县</span></li></ul><ul><li><span>改则县</span></li></ul><ul><li><span>措勤县</span></li></ul></li></ul><ul><li><span>林芝地区</span><ul><li><span>林芝县</span></li></ul><ul><li><span>工布江达县</span></li></ul><ul><li><span>米林县</span></li></ul><ul><li><span>墨脱县</span></li></ul><ul><li><span>波密县</span></li></ul><ul><li><span>察隅县</span></li></ul><ul><li><span>朗县</span></li></ul></li></ul></li><li><span>陕西省</span><ul><li><span>西安市</span><ul><li><span>新城区</span></li></ul><ul><li><span>碑林区</span></li></ul><ul><li><span>莲湖区</span></li></ul><ul><li><span>灞桥区</span></li></ul><ul><li><span>未央区</span></li></ul><ul><li><span>雁塔区</span></li></ul><ul><li><span>阎良区</span></li></ul><ul><li><span>临潼区</span></li></ul><ul><li><span>长安区</span></li></ul><ul><li><span>蓝田县</span></li></ul><ul><li><span>周至县</span></li></ul><ul><li><span>户县</span></li></ul><ul><li><span>高陵县</span></li></ul></li></ul><ul><li><span>铜川市</span><ul><li><span>王益区</span></li></ul><ul><li><span>印台区</span></li></ul><ul><li><span>耀州区</span></li></ul><ul><li><span>宜君县</span></li></ul></li></ul><ul><li><span>宝鸡市</span><ul><li><span>渭滨区</span></li></ul><ul><li><span>金台区</span></li></ul><ul><li><span>陈仓区</span></li></ul><ul><li><span>凤翔县</span></li></ul><ul><li><span>岐山县</span></li></ul><ul><li><span>扶风县</span></li></ul><ul><li><span>眉县</span></li></ul><ul><li><span>陇县</span></li></ul><ul><li><span>千阳县</span></li></ul><ul><li><span>麟游县</span></li></ul><ul><li><span>凤县</span></li></ul><ul><li><span>太白县</span></li></ul></li></ul><ul><li><span>咸阳市</span><ul><li><span>秦都区</span></li></ul><ul><li><span>杨凌区</span></li></ul><ul><li><span>渭城区</span></li></ul><ul><li><span>三原县</span></li></ul><ul><li><span>泾阳县</span></li></ul><ul><li><span>乾县</span></li></ul><ul><li><span>礼泉县</span></li></ul><ul><li><span>永寿县</span></li></ul><ul><li><span>彬县</span></li></ul><ul><li><span>长武县</span></li></ul><ul><li><span>旬邑县</span></li></ul><ul><li><span>淳化县</span></li></ul><ul><li><span>武功县</span></li></ul><ul><li><span>兴平市</span></li></ul></li></ul><ul><li><span>渭南市</span><ul><li><span>临渭区</span></li></ul><ul><li><span>华县</span></li></ul><ul><li><span>潼关县</span></li></ul><ul><li><span>大荔县</span></li></ul><ul><li><span>合阳县</span></li></ul><ul><li><span>澄城县</span></li></ul><ul><li><span>蒲城县</span></li></ul><ul><li><span>白水县</span></li></ul><ul><li><span>富平县</span></li></ul><ul><li><span>韩城市</span></li></ul><ul><li><span>华阴市</span></li></ul></li></ul><ul><li><span>延安市</span><ul><li><span>宝塔区</span></li></ul><ul><li><span>延长县</span></li></ul><ul><li><span>延川县</span></li></ul><ul><li><span>子长县</span></li></ul><ul><li><span>安塞县</span></li></ul><ul><li><span>志丹县</span></li></ul><ul><li><span>吴旗县</span></li></ul><ul><li><span>甘泉县</span></li></ul><ul><li><span>富县</span></li></ul><ul><li><span>洛川县</span></li></ul><ul><li><span>宜川县</span></li></ul><ul><li><span>黄龙县</span></li></ul><ul><li><span>黄陵县</span></li></ul></li></ul><ul><li><span>汉中市</span><ul><li><span>汉台区</span></li></ul><ul><li><span>南郑县</span></li></ul><ul><li><span>城固县</span></li></ul><ul><li><span>洋县</span></li></ul><ul><li><span>西乡县</span></li></ul><ul><li><span>勉县</span></li></ul><ul><li><span>宁强县</span></li></ul><ul><li><span>略阳县</span></li></ul><ul><li><span>镇巴县</span></li></ul><ul><li><span>留坝县</span></li></ul><ul><li><span>佛坪县</span></li></ul></li></ul><ul><li><span>榆林市</span><ul><li><span>榆阳区</span></li></ul><ul><li><span>神木县</span></li></ul><ul><li><span>府谷县</span></li></ul><ul><li><span>横山县</span></li></ul><ul><li><span>靖边县</span></li></ul><ul><li><span>定边县</span></li></ul><ul><li><span>绥德县</span></li></ul><ul><li><span>米脂县</span></li></ul><ul><li><span>佳县</span></li></ul><ul><li><span>吴堡县</span></li></ul><ul><li><span>清涧县</span></li></ul><ul><li><span>子洲县</span></li></ul></li></ul><ul><li><span>安康市</span><ul><li><span>汉滨区</span></li></ul><ul><li><span>汉阴县</span></li></ul><ul><li><span>石泉县</span></li></ul><ul><li><span>宁陕县</span></li></ul><ul><li><span>紫阳县</span></li></ul><ul><li><span>岚皋县</span></li></ul><ul><li><span>平利县</span></li></ul><ul><li><span>镇坪县</span></li></ul><ul><li><span>旬阳县</span></li></ul><ul><li><span>白河县</span></li></ul></li></ul><ul><li><span>商洛市</span><ul><li><span>商州区</span></li></ul><ul><li><span>洛南县</span></li></ul><ul><li><span>丹凤县</span></li></ul><ul><li><span>商南县</span></li></ul><ul><li><span>山阳县</span></li></ul><ul><li><span>镇安县</span></li></ul><ul><li><span>柞水县</span></li></ul></li></ul></li><li><span>甘肃省</span><ul><li><span>兰州市</span><ul><li><span>城关区</span></li></ul><ul><li><span>七里河区</span></li></ul><ul><li><span>西固区</span></li></ul><ul><li><span>安宁区</span></li></ul><ul><li><span>红古区</span></li></ul><ul><li><span>永登县</span></li></ul><ul><li><span>皋兰县</span></li></ul><ul><li><span>榆中县</span></li></ul></li></ul><ul><li><span>嘉峪关市</span></li></ul><ul><li><span>金昌市</span><ul><li><span>金川区</span></li></ul><ul><li><span>永昌县</span></li></ul></li></ul><ul><li><span>白银市</span><ul><li><span>白银区</span></li></ul><ul><li><span>平川区</span></li></ul><ul><li><span>靖远县</span></li></ul><ul><li><span>会宁县</span></li></ul><ul><li><span>景泰县</span></li></ul></li></ul><ul><li><span>天水市</span><ul><li><span>秦城区</span></li></ul><ul><li><span>北道区</span></li></ul><ul><li><span>清水县</span></li></ul><ul><li><span>秦安县</span></li></ul><ul><li><span>甘谷县</span></li></ul><ul><li><span>武山县</span></li></ul><ul><li><span>张家川回族自治县</span></li></ul></li></ul><ul><li><span>武威市</span><ul><li><span>凉州区</span></li></ul><ul><li><span>民勤县</span></li></ul><ul><li><span>古浪县</span></li></ul><ul><li><span>天祝藏族自治县</span></li></ul></li></ul><ul><li><span>张掖市</span><ul><li><span>甘州区</span></li></ul><ul><li><span>肃南裕固族自治县</span></li></ul><ul><li><span>民乐县</span></li></ul><ul><li><span>临泽县</span></li></ul><ul><li><span>高台县</span></li></ul><ul><li><span>山丹县</span></li></ul></li></ul><ul><li><span>平凉市</span><ul><li><span>崆峒区</span></li></ul><ul><li><span>泾川县</span></li></ul><ul><li><span>灵台县</span></li></ul><ul><li><span>崇信县</span></li></ul><ul><li><span>华亭县</span></li></ul><ul><li><span>庄浪县</span></li></ul><ul><li><span>静宁县</span></li></ul></li></ul><ul><li><span>酒泉市</span><ul><li><span>肃州区</span></li></ul><ul><li><span>金塔县</span></li></ul><ul><li><span>安西县</span></li></ul><ul><li><span>肃北蒙古族自治县</span></li></ul><ul><li><span>阿克塞哈萨克族自治县</span></li></ul><ul><li><span>玉门市</span></li></ul><ul><li><span>敦煌市</span></li></ul></li></ul><ul><li><span>庆阳市</span><ul><li><span>西峰区</span></li></ul><ul><li><span>庆城县</span></li></ul><ul><li><span>环县</span></li></ul><ul><li><span>华池县</span></li></ul><ul><li><span>合水县</span></li></ul><ul><li><span>正宁县</span></li></ul><ul><li><span>宁县</span></li></ul><ul><li><span>镇原县</span></li></ul></li></ul><ul><li><span>定西市</span><ul><li><span>安定区</span></li></ul><ul><li><span>通渭县</span></li></ul><ul><li><span>陇西县</span></li></ul><ul><li><span>渭源县</span></li></ul><ul><li><span>临洮县</span></li></ul><ul><li><span>漳县</span></li></ul><ul><li><span>岷县</span></li></ul></li></ul><ul><li><span>陇南市</span><ul><li><span>武都区</span></li></ul><ul><li><span>成县</span></li></ul><ul><li><span>文县</span></li></ul><ul><li><span>宕昌县</span></li></ul><ul><li><span>康县</span></li></ul><ul><li><span>西和县</span></li></ul><ul><li><span>礼县</span></li></ul><ul><li><span>徽县</span></li></ul><ul><li><span>两当县</span></li></ul></li></ul><ul><li><span>临夏回族自治州</span><ul><li><span>临夏市</span></li></ul><ul><li><span>临夏县</span></li></ul><ul><li><span>康乐县</span></li></ul><ul><li><span>永靖县</span></li></ul><ul><li><span>广河县</span></li></ul><ul><li><span>和政县</span></li></ul><ul><li><span>东乡族自治县</span></li></ul><ul><li><span>积石山保安族东乡族撒拉族自治县</span></li></ul></li></ul><ul><li><span>甘南藏族自治州</span><ul><li><span>合作市</span></li></ul><ul><li><span>临潭县</span></li></ul><ul><li><span>卓尼县</span></li></ul><ul><li><span>舟曲县</span></li></ul><ul><li><span>迭部县</span></li></ul><ul><li><span>玛曲县</span></li></ul><ul><li><span>碌曲县</span></li></ul><ul><li><span>夏河县</span></li></ul></li></ul></li><li><span>青海省</span><ul><li><span>西宁市</span><ul><li><span>城东区</span></li></ul><ul><li><span>城中区</span></li></ul><ul><li><span>城西区</span></li></ul><ul><li><span>城北区</span></li></ul><ul><li><span>大通回族土族自治县</span></li></ul><ul><li><span>湟中县</span></li></ul><ul><li><span>湟源县</span></li></ul></li></ul><ul><li><span>海东地区</span><ul><li><span>平安县</span></li></ul><ul><li><span>民和回族土族自治县</span></li></ul><ul><li><span>乐都县</span></li></ul><ul><li><span>互助土族自治县</span></li></ul><ul><li><span>化隆回族自治县</span></li></ul><ul><li><span>循化撒拉族自治县</span></li></ul></li></ul><ul><li><span>海北藏族自治州</span><ul><li><span>门源回族自治县</span></li></ul><ul><li><span>祁连县</span></li></ul><ul><li><span>海晏县</span></li></ul><ul><li><span>刚察县</span></li></ul></li></ul><ul><li><span>黄南藏族自治州</span><ul><li><span>同仁县</span></li></ul><ul><li><span>尖扎县</span></li></ul><ul><li><span>泽库县</span></li></ul><ul><li><span>河南蒙古族自治县</span></li></ul></li></ul><ul><li><span>海南藏族自治州</span><ul><li><span>共和县</span></li></ul><ul><li><span>同德县</span></li></ul><ul><li><span>贵德县</span></li></ul><ul><li><span>兴海县</span></li></ul><ul><li><span>贵南县</span></li></ul></li></ul><ul><li><span>果洛藏族自治州</span><ul><li><span>玛沁县</span></li></ul><ul><li><span>班玛县</span></li></ul><ul><li><span>甘德县</span></li></ul><ul><li><span>达日县</span></li></ul><ul><li><span>久治县</span></li></ul><ul><li><span>玛多县</span></li></ul></li></ul><ul><li><span>玉树藏族自治州</span><ul><li><span>玉树县</span></li></ul><ul><li><span>杂多县</span></li></ul><ul><li><span>称多县</span></li></ul><ul><li><span>治多县</span></li></ul><ul><li><span>囊谦县</span></li></ul><ul><li><span>曲麻莱县</span></li></ul></li></ul><ul><li><span>海西蒙古族藏族自治州</span><ul><li><span>格尔木市</span></li></ul><ul><li><span>德令哈市</span></li></ul><ul><li><span>乌兰县</span></li></ul><ul><li><span>都兰县</span></li></ul><ul><li><span>天峻县</span></li></ul></li></ul></li><li><span>宁夏回族自治区</span><ul><li><span>银川市</span><ul><li><span>兴庆区</span></li></ul><ul><li><span>西夏区</span></li></ul><ul><li><span>金凤区</span></li></ul><ul><li><span>永宁县</span></li></ul><ul><li><span>贺兰县</span></li></ul><ul><li><span>灵武市</span></li></ul></li></ul><ul><li><span>石嘴山市</span><ul><li><span>大武口区</span></li></ul><ul><li><span>惠农区</span></li></ul><ul><li><span>平罗县</span></li></ul></li></ul><ul><li><span>吴忠市</span><ul><li><span>利通区</span></li></ul><ul><li><span>盐池县</span></li></ul><ul><li><span>同心县</span></li></ul><ul><li><span>青铜峡市</span></li></ul></li></ul><ul><li><span>固原市</span><ul><li><span>原州区</span></li></ul><ul><li><span>西吉县</span></li></ul><ul><li><span>隆德县</span></li></ul><ul><li><span>泾源县</span></li></ul><ul><li><span>彭阳县</span></li></ul></li></ul><ul><li><span>中卫市</span><ul><li><span>沙坡头区</span></li></ul><ul><li><span>中宁县</span></li></ul><ul><li><span>海原县</span></li></ul></li></ul></li><li><span>新疆维吾尔自治区</span><ul><li><span>乌鲁木齐市</span><ul><li><span>天山区</span></li></ul><ul><li><span>沙依巴克区</span></li></ul><ul><li><span>新市区</span></li></ul><ul><li><span>水磨沟区</span></li></ul><ul><li><span>头屯河区</span></li></ul><ul><li><span>达坂城区</span></li></ul><ul><li><span>东山区</span></li></ul><ul><li><span>乌鲁木齐县</span></li></ul></li></ul><ul><li><span>克拉玛依市</span><ul><li><span>独山子区</span></li></ul><ul><li><span>克拉玛依区</span></li></ul><ul><li><span>白碱滩区</span></li></ul><ul><li><span>乌尔禾区</span></li></ul></li></ul><ul><li><span>吐鲁番地区</span><ul><li><span>吐鲁番市</span></li></ul><ul><li><span>鄯善县</span></li></ul><ul><li><span>托克逊县</span></li></ul></li></ul><ul><li><span>哈密地区</span><ul><li><span>哈密市</span></li></ul><ul><li><span>巴里坤哈萨克自治县</span></li></ul><ul><li><span>伊吾县</span></li></ul></li></ul><ul><li><span>昌吉回族自治州</span><ul><li><span>昌吉市</span></li></ul><ul><li><span>阜康市</span></li></ul><ul><li><span>米泉市</span></li></ul><ul><li><span>呼图壁县</span></li></ul><ul><li><span>玛纳斯县</span></li></ul><ul><li><span>奇台县</span></li></ul><ul><li><span>吉木萨尔县</span></li></ul><ul><li><span>木垒哈萨克自治县</span></li></ul></li></ul><ul><li><span>博尔塔拉蒙古自治州</span><ul><li><span>博乐市</span></li></ul><ul><li><span>精河县</span></li></ul><ul><li><span>温泉县</span></li></ul></li></ul><ul><li><span>巴音郭楞蒙古自治州</span><ul><li><span>库尔勒市</span></li></ul><ul><li><span>轮台县</span></li></ul><ul><li><span>尉犁县</span></li></ul><ul><li><span>若羌县</span></li></ul><ul><li><span>且末县</span></li></ul><ul><li><span>焉耆回族自治县</span></li></ul><ul><li><span>和静县</span></li></ul><ul><li><span>和硕县</span></li></ul><ul><li><span>博湖县</span></li></ul></li></ul><ul><li><span>阿克苏地区</span><ul><li><span>阿克苏市</span></li></ul><ul><li><span>温宿县</span></li></ul><ul><li><span>库车县</span></li></ul><ul><li><span>沙雅县</span></li></ul><ul><li><span>新和县</span></li></ul><ul><li><span>拜城县</span></li></ul><ul><li><span>乌什县</span></li></ul><ul><li><span>阿瓦提县</span></li></ul><ul><li><span>柯坪县</span></li></ul></li></ul><ul><li><span>克孜勒苏柯尔克孜自治州</span><ul><li><span>阿图什市</span></li></ul><ul><li><span>阿克陶县</span></li></ul><ul><li><span>阿合奇县</span></li></ul><ul><li><span>乌恰县</span></li></ul></li></ul><ul><li><span>喀什地区</span><ul><li><span>喀什市</span></li></ul><ul><li><span>疏附县</span></li></ul><ul><li><span>疏勒县</span></li></ul><ul><li><span>英吉沙县</span></li></ul><ul><li><span>泽普县</span></li></ul><ul><li><span>莎车县</span></li></ul><ul><li><span>叶城县</span></li></ul><ul><li><span>麦盖提县</span></li></ul><ul><li><span>岳普湖县</span></li></ul><ul><li><span>伽师县</span></li></ul><ul><li><span>巴楚县</span></li></ul><ul><li><span>塔什库尔干塔吉克自治县</span></li></ul></li></ul><ul><li><span>和田地区</span><ul><li><span>和田市</span></li></ul><ul><li><span>和田县</span></li></ul><ul><li><span>墨玉县</span></li></ul><ul><li><span>皮山县</span></li></ul><ul><li><span>洛浦县</span></li></ul><ul><li><span>策勒县</span></li></ul><ul><li><span>于田县</span></li></ul><ul><li><span>民丰县</span></li></ul></li></ul><ul><li><span>伊犁哈萨克自治州</span><ul><li><span>伊宁市</span></li></ul><ul><li><span>奎屯市</span></li></ul><ul><li><span>伊宁县</span></li></ul><ul><li><span>察布查尔锡伯自治县</span></li></ul><ul><li><span>霍城县</span></li></ul><ul><li><span>巩留县</span></li></ul><ul><li><span>新源县</span></li></ul><ul><li><span>昭苏县</span></li></ul><ul><li><span>特克斯县</span></li></ul><ul><li><span>尼勒克县</span></li></ul></li></ul><ul><li><span>塔城地区</span><ul><li><span>塔城市</span></li></ul><ul><li><span>乌苏市</span></li></ul><ul><li><span>额敏县</span></li></ul><ul><li><span>沙湾县</span></li></ul><ul><li><span>托里县</span></li></ul><ul><li><span>裕民县</span></li></ul><ul><li><span>和布克赛尔蒙古自治县</span></li></ul></li></ul><ul><li><span>阿勒泰地区</span><ul><li><span>阿勒泰市</span></li></ul><ul><li><span>布尔津县</span></li></ul><ul><li><span>富蕴县</span></li></ul><ul><li><span>福海县</span></li></ul><ul><li><span>哈巴河县</span></li></ul><ul><li><span>青河县</span></li></ul><ul><li><span>吉木乃县</span></li></ul></li></ul><ul><li><span>石河子市</span></li></ul><ul><li><span>阿拉尔市</span></li></ul><ul><li><span>图木舒克市</span></li></ul><ul><li><span>五家渠市</span></li></ul></li><li><span>香港特别行政区</span><ul><li><span>香港特别行政区</span></li></ul></li><li><span>澳门特别行政区</span><ul><li><span>澳门特别行政区</span></li></ul></li><li><span>台湾省</span><ul><li><span>台湾省</span></li></ul></li>
</div>
    <div data-role="page" id="pageone" style="width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entry.png');background-size: 100% 100%;">
        <div data-role="content" style='text-align:center;margin-left:auto;margin-right:auto;overflow:hidden;'></div>
    </div> 
    <div start="on" class="musicButton musicStartClass" style="position:absolute;z-index:2;top:10%;right:1%;">
        <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/music.png" style="width:30px;height:auto;"/>
    </div>
    <div class="notificationDoor" style="display:none;position:absolute;z-index:100;left:0px;top:0px;width:100%;height:100%;background-color:#fdd739;">
        <img class="notificationDoor1" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/startMenuCirclesvg.svg" style="width:50px;height:50px;position:absolute;left:0px;top:50%;z-index:101;display:none;">
        <!-- <img class="notificationDoor1" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/xps-1.png" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:101;display:none;">
        <img class="notificationDoor2" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/xps-2.png" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:102;display:none;">
        <img class="notificationDoor3" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/xps-3.png" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:103;display:none;"> -->
    </div>
    <div id="generalInformation" style="display:none;position:absolute;z-index:10;width:100%;height:100%;left:0px;top:0px;background-color:yellow;">
        <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/introInfomation.png" style="position:absolute;left:0px;top:0px;height:100%;width:100%;">
        <div style="z-index:12;position:absolute;right:4%;top:7%;height:35px;width:35px;" onclick="$('#generalInformation').hide();">
            <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/closeButton.png" style="width:100%;height:100%;">
        </div>
        
        <div style="z-index:11;position:absolute;top:8%;right:5%;width:58%;float:right;text-align:left;">
            <div style="margin-top:0px;margin-left:10px;margin-right:0px;">
                <div style="font-weight:bold;font-size:20px;color:#ffd200;text-shadow:1px 0px 0px black, 0px 1px 0px black, -1px 0px 0px black;0px -1px 0px black;">
                    欢迎来到辛普森一家
                </div>
                <div style="font-size:12px;">
                    这里有满满的福利和惊喜，你可千万不能错过！
                </div>
                <div style="margin-top:10px;font-size:12px;">
                    <p><b>福利</b><br/>
                    每天可以抽奖，有现金红包、门店优惠券、以及可以兑换奖品的积分。每天都来试试手气吧！</p>
                    <p><b>商城</b><br/>
                    在线购买辛普森一家的独特礼包和福袋，微信支付，简单方便！购买商品还有额外积分奖励！</p>
                    <p><b>换礼</b><br/>
                    使用积分就可兑换哟~不用花一分钱~而且包邮~一定要多攒积分~</p>
                    <p><b>消息</b><br/>
                    随时关注我们的动态，不错过任何一件新鲜事儿。</p>
                </div>
            </div>
        </div>
        <div style="width:48%;float:right;">
        </div>
    </div>
    <div style="position:absolute;z-index:9;right:2%;bottom:6%;width:30px;height:30px" onclick="$('#generalInformation').show();">
        <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/info.png" style="width:100%;height:100%;">
    </div>
</body>
</html>