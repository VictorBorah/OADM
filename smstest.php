<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("dbConn/dbConn.php");
include("Controllers/common.functions.php");

/* SMS Settings */
$apiKey = '25EC0E2E4D4829';
$templateID = "1207162445155843821";
$smsKeyWord = "ZEXASF";


$pName = "Aryan Borah";
$mobileNo = "9954817702";

if(send_OTP($connAdmApp, $pName,$mobileNo,$smsKeyWord,$templateID ))
	echo "SMS Sent !";



function send_OTP($dbConnn, $stdName, $mobile,  $sms_Keyword, $template_ID)
{
	$timeAlloted = 60 * 30 + time();
	//$msg="Your OTP for Registration is ".$code.", Thank you -".$shortName.".";	
	$msg = "Hello ".$stdName.", your admission to Orient flower Jr. College has been confirmed - Zexacode Technologies"; 
	
	$smsURL = getData($dbConnn, "tbl_app_settings", "sms_url", " WHERE id='1'   " );
	$smsText=rawurlencode ($msg);	
	$api_key = '25EC0E2E4D4829';	
		

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $smsURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "key=".$api_key."&campaign=0&routeid=23&type=unicode&contacts=".$mobile."&senderid=".$sms_Keyword."&msg=".$smsText."&template_id=".$template_ID);    
	$response = curl_exec($ch);	
	
	if(curl_errno($ch))
	{
		//echo 'Curl error: ' . curl_error($ch);
		return false;
	}
	else 		
	{
		curl_close($ch);		
		return true;
	}
	
	
}


?>