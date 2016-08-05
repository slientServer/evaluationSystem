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



$trx = '[{"id":112,"command":"Query","params":{"range":10000,"count":true,"start":1,"columns":["ID","CARDNO","MOBIL","VIPNAME","SEX","BIRTHDAY","C_VIPTYPE_ID;NAME","INTEGRAL"],"orderby":{"asc":true,"column":"INTEGRAL"},"table":"C_VIP","params":{"condition":"18600702652","column":"MOBIL"}}}]';
$url = "http://portal.affluential.com.cn:9090/servlets/binserv/Rest";
$dataSent = 'transactions='.$trx."&sip_appkey=nea@burgeon.com.cn&sip_timestamp=".
            $currentDateStr.'&appSecret='.$pwdSecret.'&sip_sign='.$signString;
$post_data = array ("transactions" => $trx,
					"sip_appkey" => "nea@burgeon.com.cn",
					"sip_timestamp" => $currentDateStr,
					"appSecret" => $pwdSecret,
					"sip_sign" => $signString);
/*$post_data = array("transactions"=>'test');*/



echo '<br/>';
echo $dataSent;
  

$header[0] ="Accept:application/json, text/javascript, */*; q=0.01";
$header[1] ="Accept-Encoding:gzip, deflate";
$header[2] ="Accept-Language:en-US,en;q=0.8";
$header[3] ="Connection:keep-alive";
$header[4] ="Content-Length:800";
$header[5] ="Content-Type:application/x-www-form-urlencoded; charset=UTF-8";
$header[6] ="Cookie:urladd=; Hm_lvt_18f18be6e58f13d87192835c8c15fdca=1464962728,1465311433,1465311639; Hm_lpvt_18f18be6e58f13d87192835c8c15fdca=1465311639";
$header[7] ="Host:coolaf.com";
$header[8] ="Origin:http://coolaf.com";
$header[9] ="Referer:http://coolaf.com/tool/gp";
$header[10] ="User-Agent:Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36";
$header[11] ="X-Requested-With:XMLHttpRequest";


echo $_SERVER['HTTP_USER_AGENT'];
$ch = curl_init();
/*curl_setopt($ch, CURLOPT_HTTPHEADER, $header); */
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据

curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_POST, true);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataSent);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120 );
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_REFERER, 'http://127.0.0.1:99/simpsons/testcurl.php');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
/*curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));*/
curl_setopt($ch, CURLOPT_COOKIESESSION, true);

$output = curl_exec($ch);
$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
curl_close($ch);
//打印获得的数据
echo '<br/><br/><br/><br/>Get Data as below<br/>';


$header = substr($output, 0, $headerSize);
$body = substr($output, $headerSize);
print_r($body);
?>