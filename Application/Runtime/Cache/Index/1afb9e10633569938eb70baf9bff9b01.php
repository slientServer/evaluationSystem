<?php if (!defined('THINK_PATH')) exit();?><div id="loginUserPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-color:rgba(0,0,0,0.8);">
<script>
    /*var mainHeight = $("#personalInfoTabPopupMain").height();
    var innerHeight = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").height();
    var marginTop = (mainHeight-innerHeight)/2;
    $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").css("margin-top",marginTop+"px");*/

    /*
    var mainWidth = $("#personalInfoTabPopupMain").width();
    var innerWidth = $("#personalInfoTabPopupMain .personalInfoTabPopupMain_inner").width();
    var marginLeft = (mainWidth-innerWidth)/2;


    $("#personalInfoTabPopupMain").parent().parent().find(".popupCloseButton").css("left",(marginLeft+innerWidth-40)+"px").css("top",(marginTop+10)+"px");*/
    /*var template =  '<table style="width:100%;height:100%;" align="center">'+
                    '    <tr>'+
                    '        <td colspan="2" style="text-align:center;font-weight:bold">'+
                    '             hi~<?php echo ($nickname); ?>~欢迎光临~'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr>'+
                    '        <td colspan="2" style="text-align:center;font-weight:bold;">'+
                    '             请输入手机号，确认一下你的身份'+
                    '        </td>'+
                    '    </tr>;'+
                    '    <tr>'+
                    '        <td colspan="2">'+
                    '             <input name="confirmationSMSMobileNumber" style="height:35px;">'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr>'+
                    '        <td style="padding-right:10px;">'+
                    '             <input disabled name="confirmationSMSText" style="height:35px;">'+
                    '        </td>'+
                    '        <td>'+
                    '             <div id="timeCount" style="position: absolute; margin-top: 12px; margin-left:27px; font-weight:bolder; font-size:23px"></div>'+
                    '             <button disabled class="ui-btn ui-btn-inline" style="width:92px;height:38px;background-image:url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/SMSVerificationButton-xl.png);background-size: 90px 36px;" name="sendConfirmationSMS"></button>'+
                    '        </td>'+
                    '    </tr>'+
                    '    <tr>'+
                    '        <td colspan="2" style="text-align:center;">'+
                    '            <div id="verifyFailed" style="color:red;font-size:8px;display:none;">验证码错误！</div>'+
                    '            <button disabled name="confirmGoHome" class="ui-btn ui-btn-inline" style="width:245px;height:38px;background-image:url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/GoHomeButton-xl.png);background-size: 243px 36px;"></button>'+
                    '        </td>'+
                    '    </tr>'+
                    '</table>';
    var textAreaLoginUserPopup = new ActionArea(actionAreaList, $("#loginUserPopupMain"),{
        backgroundWidth : 1920,
        backgroundHeight : 1080,
        areaWidth : 1233,
        areaHeight: 871,
        areaLeft : 350,
        areaTop : 50,
        areaBackgroundImg : '',
        usingShortCalculate : true,
        events : {
        }
    });
    $(textAreaLoginUserPopup.theElement).append($(template));
    */
    function oritationOpenMyFunction(){
        try{
            if(dynamicPopupGroup.getCurrentPopupID()=="userLogin"){
                $("#loginUserPopupMain [name='confirmationSMSMobileNumber']").blur();
                $("#loginUserPopupMain [name='confirmationSMSText']").blur();
            }
        }catch(e){

        }
    }
    setTimeout(function(){
        $("#loginUserPopupMain .sendConfirmationSMSIMG").height(45);
        $("#loginUserPopupMain .sendConfirmationSMSIMG").css("width","auto");
        var countdown= 60;
        var placeholder= '';
        $("#loginUserPopupMain [name='confirmationSMSMobileNumber']").keyup(function(){
            if($(this).val().length>=11){
                $("#loginUserPopupMain [name='sendConfirmationSMS']").removeAttr("disabled");
                $("#loginUserPopupMain [name='sendConfirmationSMS'] img").show();
                $("#loginUserPopupMain [name='sendConfirmationSMS'] div").hide();
            }
        });
        $("#loginUserPopupMain [name='sendConfirmationSMS']").click(function(){
            $("#loginUserPopupMain [name='confirmationSMSText']").textinput( "enable" );
            $("#loginUserPopupMain [name='sendConfirmationSMS'] img").hide();
            $("#loginUserPopupMain [name='sendConfirmationSMS'] div").show();
            $("#loginUserPopupMain [name='confirmationSMSText']").focus();
            $.ajax({url: "<?php echo U('WScreen/sendSMS');?>", data: {'phonenumber': $("#loginUserPopupMain [name='confirmationSMSMobileNumber']").val()},  async: true, success: function(oResponse){
                }
            });
            setTime();
        });
        $("#loginUserPopupMain [name='confirmationSMSText']").keyup(function(){
            if($(this).val().length>=4){
                $("#loginUserPopupMain [name='confirmGoHome']").removeAttr("disabled");
                $('#verifyFailed').css('display', 'none');
            }
        });
        $("#loginUserPopupMain [name='confirmGoHome']").click(function(){
            $.ajax({url: "<?php echo U('WScreen/verifySMSCode');?>", data: {'phonenumber': $("#loginUserPopupMain [name='confirmationSMSMobileNumber']").val(), 'code': $("#loginUserPopupMain [name='confirmationSMSText']").val()},  async: true, success: function(oResponse){
                    if(oResponse== 'correct'){
                        $("#loginUserPopupMain").parent().trigger("mycloseaction");
                        //dynamicPopupGroup.closeCurrentPopup();
                    }else{
                        $('#verifyFailed').css('display', 'inline');
                        $('#verifyFailed').text(oResponse);
                    }
                }
            })                
        });
        function setTime(){
            if(countdown== 0){
                $("#loginUserPopupMain [name='sendConfirmationSMS']").attr('disabled', false);
                $("#loginUserPopupMain [name='sendConfirmationSMS'] img").show();
                $("#loginUserPopupMain [name='sendConfirmationSMS'] div").hide();
                $("#timeCount").text();
                countdown=60;
                placeholder='';
            }else{
                if(countdown<10){
                    placeholder= '0';
                }
                $("#loginUserPopupMain [name='sendConfirmationSMS']").attr('disabled', true);
                $("#loginUserPopupMain [name='sendConfirmationSMS'] img").hide();
                $("#loginUserPopupMain [name='sendConfirmationSMS'] div").show();
                $("#timeCount").text(placeholder+countdown+"s");
                countdown--;
                setTimeout(setTime, 1000);
            }
        }
    },100);
</script>
<div style="position:relative;top:5%;border-radius:10px;border:2px solid #fdd701;background-color:#f5f5f5;width:70%;height:90%;margin:auto;padding-left:15%;padding-right:15%;padding-top:2%;font-size:16px;">
<table style="" align="center">
    <tr>
        <td colspan="2" style="text-align:center;font-weight:bold">
             hi~&nbsp;<span style="color:#ffd500;text-shadow:1px 1px 1px black;font-size:20px;"><?php echo ($nickname); ?></span>&nbsp;~欢迎光临~
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align:center;font-weight:bold;">
             请输入手机号，确认一下你的身份
        </td>
    </tr>
    <tr style="padding-top:10px;">
        <td colspan="2" style="padding-top:10px;">
            <div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:100%;" class="ui-input-text textAreaOuter">
                <input name="confirmationSMSMobileNumber" class="" style="width:70%;border:0px; display:inline-block;background-color: transparent;" data-enhanced="true">
            </div>
        </td>
    </tr>
    <tr>
        <td style="padding-top:10px;padding-right:10px;width:70%;">
            <div style="box-shadow:2px 2px 2px 1px rgba(0,0,0,0.5) outset;display:inline-block;padding-left:15px;width:100%;" class="ui-input-text textAreaOuter">
                <input disabled name="confirmationSMSText" style="width:70%;border:0px; display:inline-block;background-color: transparent;" data-enhanced="true">
            </div>
        </td>
        <td class="loginUserPopupMainTD" style="padding-top:10px;">
             <button disabled class="" style="border:none;background-color:transparent;height:45px;margin:0px;padding:0px;float:right;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/SMSVerificationBlankButton-xl.png');background-size: 100% 100%;" name="sendConfirmationSMS">
                 <img class="sendConfirmationSMSIMG" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/SMSVerificationButton-xl.png" style="width:100%;height:100%;">
                 <div id="timeCount" style="margin:auto; font-weight:bolder; font-size:23px;display:block; display:none;"></div>
             </button>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="padding-top:10px;text-align:center;">
            <div id="verifyFailed" style="color:red;font-size:8px;display:none;">验证码错误！</div>
            <button disabled name="confirmGoHome" style="margin:0px;padding:0px;">
                <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/GoHomeButton-xl.png" style="width:100%;height:45px;">
            </button>
        </td>
    </tr>
</table>
</div>
</div>