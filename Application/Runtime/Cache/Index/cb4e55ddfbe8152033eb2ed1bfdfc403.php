<?php if (!defined('THINK_PATH')) exit();?><div style="width:450px;height:260px;padding-bottom:20px;padding-top:20px;background-repeat:no-repeat;background-image:url(/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/userlogin_background.png);background-size: 450px 260px;" id="personalInfoPopupMain">
    <table style="margin-left:50px;width:100%;height:80%;" align="center">
        <tr style="height:20px;" valign="middle">
            <td style="text-align:left;width:50px;">
                 姓名:
            </td>
            <td style="text-align:left;height:40px;" valign="middle">
                <div style="display:inline-block; width:290px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="personalInfoPopupNameInput" value="<?php echo ($userInfo["nickname"]); ?>" readonly style="width:240px; border:0px; display:inline-block;" data-enhanced="true">
                </div>
                <a class="personalInfoPopupNameEditButton" style="position:relative;left:-50px;display:inline-block;">编辑</a>
            </td>
        </tr>
        <tr style="height:40px;" valign="middle">
            <td style="text-align:left;">
                生日:
            </td>
            <td style="text-align:left;">
                <div style="display:inline-block; width:290px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="personalInfoPopupDOBInput" value="<?php echo ($userInfo["birthday"]); ?>" readonly style="width:240px; border:0px; display:inline-block;" data-enhanced="true">
                </div>
                <a class="personalInfoPopupDOBEditButton" style="position:relative;left:-50px;display:inline-block;">编辑</a>
            </td>
        </tr>
        <tr style="height:40px;" valign="middle">
            <td style="text-align:left;">
                 地址:
            </td>
            <td style="text-align:left;">
                <div style="display:inline-block; width:290px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="personalInfoPopupADDRInput" value="<?php echo ($userInfo["address"]); ?>" readonly style="width:240px; border:0px; display:inline-block;" data-enhanced="true">
                </div>
                <a class="personalInfoPopupADDREditButton" style="position:relative;left:-50px;display:inline-block;">编辑</a>
            </td>
        </tr>
        <tr style="height:40px;" valign="middle">
            <td style="text-align:left;">
                 积分:
            </td>
            <td style="text-align:left;">
                 <div style="display:inline-block; width:290px;" class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                 <input value="<?php echo ($userInfo["score"]); ?>" readonly style="width:80px; border:0px; display:inline-block;" data-enhanced="true">
                 &nbsp;&nbsp;<a>（如何获得积分？）</a>
                 </div>
                 <a style="position:relative;left:-50px;display:inline-block;">兑换</a>
        </tr>
    </table>
    <div style="text-align:center;">
        <div style="margin:auto;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/BenefitBoxButton.png');background-size:243px 35px;width:243px;height:35px;" class="personalInfoPopup_BenefitBox_Button">&nbsp;</div>
    </div>
    <script>
        $(document).ready(function(){
            $("#personalInfoPopupMain .personalInfoPopup_BenefitBox_Button").click(function(){
                dynamicPopupGroup.addNewPopup("benefitBoxPopup","<?php echo U('WScreen/benefitBox');?>",{}, {
                    forceReload:true,
                    afterclose: function(){
                            dynamicPopupGroup.
                                addNewPopup("personalInfoPopup","<?php echo U('WScreen/personalInfoPopup');?>",{}, {forceReload:false});
                        }
                    },DivDialog
                );
            });
            $("#personalInfoPopupMain .personalInfoPopupNameEditButton").click(function(){
                $("#personalInfoPopupMain .personalInfoPopupNameInput").removeAttr("readonly").focus();
            });
            $("#personalInfoPopupMain .personalInfoPopupDOBEditButton").click(function(){
                $("#personalInfoPopupMain .personalInfoPopupDOBInput").removeAttr("readonly").focus();
            });
            $("#personalInfoPopupMain .personalInfoPopupADDREditButton").click(function(){
                $("#personalInfoPopupMain .personalInfoPopupADDRInput").removeAttr("readonly").focus();
            });
            $("#personalInfoPopupMain .personalInfoPopup_exchangeNow_Button").click(function(){
                dynamicPopupGroup.addNewPopup("howToGetScorePopup","./howToGetScorePopup.html",{}, {
                    forceReload:true,
                    afterclose: function(){
                            dynamicPopupGroup.
                                addNewPopup("personalInfoPopup","./personalInfoPopup.html",{}, {forceReload:true});
                        }
                    }
                );
            });
            $('#personalInfoPopupMain .personalInfoPopupNameInput').blur(function(){
                $.ajax({url: './updatePersonalInfo', data: {'key': 'nickname', 'value': $('#personalInfoPopupMain .personalInfoPopupNameInput').val()},async: true});
            });
            $('#personalInfoPopupMain .personalInfoPopupDOBInput').blur(function(){
                $.ajax({url: './updatePersonalInfo', data: {'key': 'birthday', 'value': $('#personalInfoPopupMain .personalInfoPopupDOBInput').val()},async: true});
            });
            $('#personalInfoPopupMain .personalInfoPopupADDRInput').blur(function(){
                $.ajax({url: './updatePersonalInfo', data: {'key': 'address', 'value': $('#personalInfoPopupMain .personalInfoPopupADDRInput').val()},async: true});
            });

        });
    </script>
</div>