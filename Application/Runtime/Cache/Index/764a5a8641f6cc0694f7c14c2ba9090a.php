<?php if (!defined('THINK_PATH')) exit();?><div id="personalInfoTabPopupMain" style="font-size:16px;z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/PersonalInfoBackground22.png');background-size: 100% 100%;">
<style>
.personalInfoTabPopupMain_contentTR{

}
</style>
<script>
    function oritationOpenMyFunction(){
        try{
            if(dynamicPopupGroup.getCurrentPopupID()=="personalInfoPopup"){
               $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName").blur();
               $("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").blur();
               $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR").blur();
            }
        }catch(e){

        }
    }
    /*var mainHeight = $("#personalInfoTabPopupMain").height();
    var innerHeight = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").height();
    var marginTop = (mainHeight-innerHeight)/2;
    $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").css("margin-top",marginTop+"px");*/

    /*
    var mainWidth = $("#personalInfoTabPopupMain").width();
    var innerWidth = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").width();
    var marginLeft = (mainWidth-innerWidth)/2;


    $("#personalInfoTabPopupMain").parent().parent().find(".popupCloseButton").css("left",(marginLeft+innerWidth-40)+"px").css("top",(marginTop+10)+"px");*/
    var template =  '<?php echo ($contentTemplate); ?>';/*'<table style="width:100%;">'+
                    '    <tr>'+
                    '        <td colspan="2" style="text-align:center;">'+
                    '            会员编号: xxxxxx'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr class="personalInfoTabPopupMain_contentTR">'+
                    '        <td style="width:44%">'+
                    '            <div style="padding-top:11px;float:left;">姓名：</div>'+
                    '            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" style="display:inline-block;width:70%"><input data-enhanced="true" readonly style="float:left;width:70%;"><span style="float:right;padding-top:5px;padding-right:2px;">编辑</span></div>'+
                    '        </td>'+
                    '        <td style="width:55%">'+
                    '            <div style="padding-top:11px;float:left;">生日：</div>'+
                    '            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" style="display:inline-block;width:70%"><input data-enhanced="true" readonly style="float:left;width:70%;"><span style="float:right;padding-top:5px;padding-right:2px;">编辑</span></div>'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr class="personalInfoTabPopupMain_contentTR">'+
                    '        <td colspan="2">'+
                    '            <div style="padding-top:11px;float:left;">地址：</div>'+
                    '            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" style="display:inline-block;width:auto;"><input data-enhanced="true" readonly style="float:left;width:70%;"><span style="float:right;padding-top:5px;padding-right:2px;">编辑</span></div>'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr class="personalInfoTabPopupMain_contentTR personalInfoTabPopupMain_score">'+
                    '        <td colspan="2">'+
                    '            <div style="padding-top:11px;float:left;">积分：</div>'+
                    '            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" style="display:inline-block;width:70%"><input data-enhanced="true" readonly style="float:left;width:70%;"><span style="float:right;padding-top:5px;padding-right:2px;">编辑</span></div>'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr>'+
                    '        <td colspan="2">'+
                    '            <div class="personalInfoTabPopupMain_ScoreButton" style="background-image:url(\'/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/inviteFriendButton.png\');background-size: 100% 100%;">'+
                    '            </div>'+
                    '        </td>'+
                    '    </tr>'+
                    '</table>';*/
    var textAreaPersonalPopup = new ActionArea(actionAreaList, $("#personalInfoTabPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 943,
        areaWidth : 1233,
        areaHeight: 671,
        areaLeft : 400,
        areaTop : 170,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    $(textAreaPersonalPopup.theElement).append($(template));
    setTimeout(function(){
        var contentTRs = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_contentTR td");
        for(var i=0;i<contentTRs.length;i++){
            var contentTR = contentTRs[i];
            var mainWidth = $(contentTR).width();
            var firstEle = $(contentTR).find("div:eq(0)");
            var secondEle = $(contentTR).find("div:eq(1)");
            var firstWidth = $(firstEle).width();
            $(secondEle).width(mainWidth-firstWidth-10);
        }
        var cw1 = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_score div:eq(0)").width();
        var cw2 = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_score div:eq(1)").width();
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ScoreButton").css("margin-left",cw1+"px").width(cw2).height(Math.floor(cw2/7));

        //actions
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName_editButton").click(function(){
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName").removeAttr("readonly");
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName").focus();
        });
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName").change(function(){
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_userName").attr("readonly",true);
            $.ajax({url: "<?php echo U('WScreen/updatePersonalInfo');?>", data: {'key': 'nickname', 'value': $('#personalInfoTabPopupMain .personalInfoTabPopupMain_userName').val()},async: true});
        });

        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB_editButton").click(function(){
            //$("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").removeAttr("readonly");
            //$("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").focus();
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").trigger("click");
        });
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").change(function(){
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB").attr("readonly",true);
            $.ajax({url: "<?php echo U('WScreen/updatePersonalInfo');?>", data: {'key': 'birthday', 'value': $('#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB').val()},async: true});
        });

        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR_editButton").click(function(){
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR").removeAttr("readonly");
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR").focus();
        });
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR").change(function(){
            $("#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR").attr("readonly",true);
            $.ajax({url: "<?php echo U('WScreen/updatePersonalInfo');?>", data: {'key': 'address', 'value': $('#personalInfoTabPopupMain .personalInfoTabPopupMain_ADDR').val()},async: true});
        });

        $("#personalInfoTabPopupMain .personalInfoPopup_exchangeNow_Button").click(function(){
            dynamicPopupGroup.addNewPopup("exchangeCenterPopup","<?php echo U('WScreen/exchangeCenter');?>",{}, {
                forceReload:true,
                afterclose: function(){
                       dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
                    }
                }, DivDialog
            );
        });
        $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inviteFriendButton").click(function(){
            dynamicPopupGroup.addNewPopup("inviteFriendPopup","<?php echo U('WScreen/inviteFriend');?>",{}, {
                forceReload:true,
                afterclose: function(){
                        setupMainShareWX();
                        dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
                    }
                }, DivDialog
            );
        });



        var opt = {
            preset: 'date', //日期
            display: 'modal', //显示方式 
            dateFormat: 'yy-mm-dd', // 日期格式
            setText: '确定', //确认按钮名称
            cancelText: '取消',//取消按钮名籍我
            dateOrder: 'yymmdd', //面板中日期排列格式
            dayText: '日', monthText: '月', yearText: '年', //面板中年月日文字
            endYear:2020, //结束年份
            theme: 'ios', 
            display: 'bottom'
        };
        
        $('#personalInfoTabPopupMain .personalInfoTabPopupMain_DOB').mobiscroll(opt);
    },100);
    var onPersonalInfoButtonClick = function(){
        dynamicPopupGroup.addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
    }
    var onBenefitBoxButtonClick = function(){
        dynamicPopupGroup.addNewPopup("benefitBoxPopup","<?php echo U('WScreen/benefitBox');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
    }
    var onShoppingRecordButtonClick = function(){
        dynamicPopupGroup.addNewPopup("shoppingRecordBoxPopup","<?php echo U('WScreen/shoppingRecord');?>",{}, {forceReload:true,closeButton:true}, DivDialog);
    }
    var personalInfoPopupButtonPersonalinfoPopup = new ActionArea(actionAreaList, $("#personalInfoTabPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 943,
        areaWidth : 142,
        areaHeight: 283,
        areaLeft : 176,
        areaTop : 60,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    var personalInfoPopupButtonBenefitBoxPopup = new ActionArea(actionAreaList, $("#personalInfoTabPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 943,
        areaWidth : 142,
        areaHeight: 283,
        areaLeft : 176,
        areaTop : 340,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
          click : onBenefitBoxButtonClick
        }
    });
    var personalInfoPopupButtonShoppingRecordPopup = new ActionArea(actionAreaList, $("#personalInfoTabPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 943,
        areaWidth : 142,
        areaHeight: 283,
        areaLeft : 176,
        areaTop : 600,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
            click : onShoppingRecordButtonClick
        }
    });
</script>
</div>