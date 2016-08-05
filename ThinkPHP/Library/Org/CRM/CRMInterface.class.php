<?php
namespace Org\CRM;
class CRMInterface{ 
	private static $processID=0;
	public static function getNextProcessID(){
		return ++CRMInterface::$processID;
	}
	public static function searchCustomer($mobileNumber){
		CRMInterface::logTempSection("Search:".$mobileNumber."\r\n");
		$custNo = "C".$mobileNumber;
		$theProcessID = CRMInterface::getNextProcessID();
		$transactionStr = '[{"id":"'.$theProcessID.'","command":"Query","params":{"range":10000,"count":true,"start":1,"columns":["ID","CARDNO","MOBIL","VIPNAME","SEX","BIRTHDAY","INTEGRAL"],"orderby":{"asc":true,"column":"INTEGRAL"},"table":"C_VIP","params":{"condition":"'.$custNo.'","column":"CARDNO"}}}]';
		return CRMInterface::callCRM('SearchCustomer',$transactionStr);
	}
	public static function createCustomer($customer){
		CRMInterface::logTempSection("CreateCustomer:".$customer["mobileNumber"]."\r\n");
		$theProcessID = CRMInterface::getNextProcessID();
		$custName = $customer["userName"];
		$custMobile = $customer["mobileNumber"];
		$custNo = "C".$custMobile;
		$custDOB = $customer["dob"];
		$custDOB = str_replace("-", "", $custDOB);
		$transactionStr = '[{"id":"'.$theProcessID.'","command":"ObjectCreate","params": {"C_CUSTOMER_ID__NAME":"集团公司","id":-1,"C_VIPTYPE_ID__NAME":"普卡","BIRTHDAY":"'.$custDOB.'","CARDNO":"'.$custNo.'","INTEGRAL":0,"C_STORE_ID__NAME":"总部店仓","MOBIL":"'.$custMobile.'","table":"C_VIP","VIPNAME":"'.$custName.'"}}]';
		return CRMInterface::callCRM('CreateCustomer',$transactionStr);
		/*return CRMInterface::logTempSection($transactionStr);*/
	}
	public static function updateCustomer($type, $mobileNumber, $changeValue){
		CRMInterface::logTempSection("UpdateCustomer:".$mobileNumber."\r\n");
		$theProcessID = CRMInterface::getNextProcessID();
		$custNo = "C".$mobileNumber;
		$changeType="";
		if($type=="MOBILE"){
			$changeType="MOBIL";
		}else if($type=="birthday"){
			$changeType="Birthday";
		}else if($type=="nickname"){
			$changeType="VIPNAME";
		}

		if($changeType==""){
			return;
		}
		$transactionStr = '[{"id":"'.$theProcessID.'","command":"ObjectModify","params":{"ak":"'.$custNo.'","partial_update":"true","'.$changeType.'":"'.$changeValue.'","table":"C_VIP"}}]';
		return CRMInterface::callCRM('UpdateCustomer',$transactionStr);
		/*return CRMInterface::logTempSection($transactionStr);*/
	}
	public static function searchScore($mobileNumber){
		CRMInterface::logTempSection("SearchScore:".$mobileNumber."\r\n");
		$theProcessID = CRMInterface::getNextProcessID();
		$custNo = "C".$mobileNumber;
		$transactionStr = '[{"id":"'.$theProcessID.'","command":"Query","params":{"range":10000,"count":true,"start":1,"columns":["ID","CARDNO","INTEGRAL"],"orderby":{"asc":true,"column":"INTEGRAL"},"table":"C_VIP","params":{"condition":"'.$custNo.'","column":"CARDNO"}}}]';
		return CRMInterface::callCRM('SearchScore',$transactionStr);
	}
	public static function addScore($mobileNumber, $score, $comment){
		CRMInterface::logTempSection("AddScore:".$mobileNumber."\r\n");
		return CRMInterface::updateScore($mobileNumber, $score, $comment);
	}
	public static function subScore($mobileNumber, $score, $comment){
		CRMInterface::logTempSection("SubScore:".$mobileNumber."\r\n");
		$score = 0-$score;
		return CRMInterface::updateScore($mobileNumber, $score, $comment);
	}
	private static function updateScore($mobileNumber, $score, $comment){
		$theProcessID = CRMInterface::getNextProcessID();
		$custNo = "C".$mobileNumber;
		$currentDateStr = date("Ymd");
		$transactionStr = '[{"id":"'.$theProcessID.'","command":"ProcessOrder","params":{"submit":"true","masterobj":{"ADJTYPE":1,"ID":"-1","table":"C_VIPINTEGRALADJ","C_INTEGRALMIN_ID__NAME":"","BILLDATE":"'.$currentDateStr.'"},"detailobjs":{"tables":["C_VIPINTEGRALADJITEM"],"refobjs":[{"table":"C_VIPINTEGRALADJITEM","addList":[{"INTEGRALADJ":'.$score.',"DESCRIPTION":"'.$comment.'","ISACTIVE":"Y","C_VIP_ID__CARDNO":"'.$custNo.'"}]}]}}}]';
		return CRMInterface::callCRM('UpdateScore',$transactionStr);
		/*return CRMInterface::logTempSection($transactionStr);*/
	}
	private static function createSection($type, $url, $requestStr){
		return $id;
	}

	//添加优惠券
	public static function addCoupon($coupon){
		if($coupon['coupontype']== 'cash'){
			$TICKET_TYPE= 'MONTIK';
		}else if($coupon['coupontype']== 'discount'){
			$TICKET_TYPE= 'DISTIK';
		}else if($coupon['coupontype']== 'coupon'){
			$TICKET_TYPE= 'REDTIK';
		}
		$theProcessID = CRMInterface::getNextProcessID();
		$transactionStr= '[{"id":112,"command":"ObjectCreate","params":{"IS_LIST_LIMIT":"Y","DATEBEG":'.$coupon['starttime'].',"M_DIM1_ID__ATTRIBNAME":"SP成人","ISVIPEXP":"Y","REMARK":'.$coupon['couponcomment'].',"CHECKNO":'.$coupon['couponcode'].',"table":"C_V_TDEFTICKET","TICKETNO":'.$coupon['couponnumber'].',"IS_VIPDIS":"Y","DATEEND":'.$coupon['endtime'].', "TICKET_TYPE": ';
		if($TICKET_TYPE== 'MONTIK'){
			$transactionStr= $transactionStr.$TICKET_TYPE.', "PARVALUE": '.$coupon['couponvalue'].'}}]';
		}else if($TICKET_TYPE== 'DISTIK'){
			$transactionStr= $transactionStr.$TICKET_TYPE.', "TICKET_DIS": '.$coupon['couponvalue'].'}}]';
		}
		return CRMInterface::callCRM('addCoupon',$transactionStr);
	}

	private static function getURL(){
		return "http://portal.affluential.com.cn:9090/servlets/binserv/Rest";
	}
	private static function getLogFile(){
		return $_SERVER['DOCUMENT_ROOT']."/CRMInterfaceLog.log";
	}
	private static function getCustomerLogFile(){
		return $_SERVER['DOCUMENT_ROOT']."/CRMInterfaceCustomerLog.log";
	}
	private static function getTempLogFile(){
		return $_SERVER['DOCUMENT_ROOT']."/CRMInterfaceTempLog.log";
	}
	private static function callCRM($type, $transactions){
		$dataSending = CRMInterface::prepareString($transactions);
		CRMInterface::logSection($type, $url, $dataSending, "", false);
		$url = CRMInterface::getURL();
		$responseStr = CRMInterface::callCRMInterface($dataSending);
		CRMInterface::logSection($type, $url, $dataSending, $responseStr["raw"], true);
		return $responseStr;
	}
	private static function logSection($type, $url, $requestStr, $responseStr, $isSuccess){
		$writeStr = "<CRMLog><type>".$type."</type><url>".$url."</url><request>".$requestStr."</request><response>".$responseStr."</response><success>".$isSuccess."</success></CRMLog>\r\n";
		file_put_contents(CRMInterface::getLogFile(),$writeStr,FILE_APPEND);
	}
	private static function logCustomerSection($phoneNum){
		$writeStr = $phoneNum."\r\n";
		file_put_contents(CRMInterface::getCustomerLogFile(),$writeStr,FILE_APPEND);
	}
	private static function logTempSection($str){
		$writeStr = $str."\r\n";
		file_put_contents(CRMInterface::getTempLogFile(),$writeStr,FILE_APPEND);
	}
	private static function prepareString($transactions){
		$currentDateStr = date("Y-m-d H:i:s.000");
		$uid = "nea@burgeon.com.cn";
		$pwd = "QY123!@#.";
		$pwdSecret = md5($pwd);
		$signStringRaw = $uid.$currentDateStr.$pwdSecret;
		$signString = md5($signStringRaw);
		$dataSent = 'transactions='.$transactions."&sip_appkey=nea@burgeon.com.cn&sip_timestamp=".
            $currentDateStr.'&appSecret='.$pwdSecret.'&sip_sign='.$signString;
        return $dataSent;
	}
	private static function callCRMInterface($formString){
		$url = CRMInterface::getURL();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		// post数据

		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_POST, true);
		// post的变量
		curl_setopt($ch, CURLOPT_POSTFIELDS, $formString);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120 );
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);

		$output = curl_exec($ch);
		$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		curl_close($ch);
		$header = substr($output, 0, $headerSize);
		$body = substr($output, $headerSize);
		return array("head"=>$header, "body"=>$body, "raw"=>$output);
	}
}