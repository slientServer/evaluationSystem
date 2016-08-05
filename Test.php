<?php
$currentDateStr = date("Y-m-d H:i:s.000");
$uid = "nea@burgeon.com.cn";
$pwd = "QY123!@#.";
$pwdSecret = md5($pwd);
$signStringRaw = $uid.$currentDateStr.$pwdSecret;
echo "<br/>";
echo $signStringRaw;
echo "<br/>";
$signString = md5($signStringRaw);
echo $signString;
?>
<form method="post" action="http://portal.affluential.com.cn:9090/servlets/binserv/Rest">
<textarea name="transactions">
[{"id":112,"command":"Query","params":{"range":10000,"count":true,"start":1,"columns":["ID","CARDNO","MOBIL","VIPNAME","SEX","BIRTHDAY","C_VIPTYPE_ID;NAME","INTEGRAL"],"orderby":{"asc":true,"column":"INTEGRAL"},"table":"C_VIP","params":{"condition":"18600702652","column":"MOBIL"}}}]
</textarea>
<input name="sip_appkey" value="nea@burgeon.com.cn">
<input name="sip_timestamp" value="<?php echo $currentDateStr; ?>">
<input name="appSecret" value="<?php echo $pwdSecret; ?>">
<input name="sip_sign" value="<?php echo $signString ?>">
</form>
<script>
document.forms[0].submit();
</script>