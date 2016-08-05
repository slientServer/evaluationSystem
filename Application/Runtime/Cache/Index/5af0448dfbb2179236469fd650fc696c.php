<?php if (!defined('THINK_PATH')) exit();?><div style="width:100%;height:100%;left:0px;top:0px;" id="mainMenuPopupMain">
    <p></p>
    <script>
    function onPersonalInfoButtonClick(){
        /*dynamicPopupGroup.addNewPopup("personalInfoPopup","./personalInfoPopup.html",{openAfterLoad:true});*/

        dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true, afterclose:function(){dynamicPopupGroup.currentPopupID="";}});
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
        $("#mainMenuPopupMain").css("position","absolute").css("left","0px").css("top","0px")
        .css("background-image","url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/entryStartButton.png)")
        .css("background-repeat","no-repeat")
        .css("background-size","100% 100%");

        

        var actionArea1 = new ActionArea(actionAreaList, $("#mainMenuPopupMain"),{
            backgroundWidth : 1920,
            backgroundHeight : 1080,
            areaWidth : 270,
            areaHeight: 150,
            areaLeft : 330,
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
            areaHeight: 150,
            areaLeft : 720,
            areaTop : 700,
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
            areaHeight: 150,
            areaLeft : 1010,
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
            areaHeight: 150,
            areaLeft : 1320,
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
            areaHeight: 150,
            areaLeft : 1600,
            areaTop : 750,
            areaBackgroundImg : '',
            usingShortCalculate : true,
            events : {
                click : onExchangeCenterButtonClick
            }
        });
        $("#mainMenuPopupMain").click(function(){
            $("#mainMenuPopupMain").parent().trigger("mycloseaction");
        });
    });
    </script>
</div>