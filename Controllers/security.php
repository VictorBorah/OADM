<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$timeAlloted = 60 * 60 + time();
$webRoot = getData($connAdmApp, "tbl_app_settings", "web_root", " WHERE id='1'   " );
$inst_Abb = getData($connAdmApp, "tbl_app_settings", "inst_Abb", " WHERE id='1'   " );
$appAbbvn = getData($connAdmApp, "tbl_app_settings", "inst_Abb", " WHERE  id='1'  " );
$financialYr = getData($connAdmApp, "tbl_app_settings", "finYear", " WHERE  id='1'  " );
$razprPayLogo = getData($connAdmApp, "tbl_app_settings", "razorPayLogo", " WHERE  id='1'  " );
$appName = getData($connAdmApp, "tbl_app_settings", "app_Name", " WHERE  id='1'  " );
$clgName = getData($connAdmApp, "tbl_app_settings", "inst_name", " WHERE  id='1'  " );
$addLine1 = getData($connAdmApp, "tbl_app_settings", "add_Line1", " WHERE  id='1'  " );
$addLine2 = getData($connAdmApp, "tbl_app_settings", "add_Line2", " WHERE  id='1'  " );
$footerTitle = getData($connAdmApp, "tbl_app_settings", "foot_Title", " WHERE  id='1'  " );
$footerLine1 = getData($connAdmApp, "tbl_app_settings", "foot_Line1", " WHERE  id='1'  " );
$footerLine2 = getData($connAdmApp, "tbl_app_settings", "foot_Line2", " WHERE  id='1'  " );
$logoFile = getData($connAdmApp, "tbl_app_settings", "logoFile", " WHERE  id='1'  " );
$formReceiptTitle = getData($connAdmApp, "tbl_app_settings", "formReceiptName", " WHERE  id='1'  " );
$admReceiptTitle = getData($connAdmApp, "tbl_app_settings", "admReceiptName", " WHERE  id='1'  " );
$academicSession = getData($connAdmApp, "tbl_app_settings", "session", " WHERE  id='1'  " );

$rzrPay_WinName = getData($connAdmApp, "tbl_app_settings", "razorPay_Win_Name", " WHERE id='1'   " );
$rzrPay_keyID = trim(getData($connAdmApp, "tbl_app_settings", "razorPay_KeyID", " WHERE id='1'   " ));
$rzrPay_SecretKey = trim(getData($connAdmApp, "tbl_app_settings", "razorPay_Secret_Key", " WHERE id='1'   " ));
$rzrPay_WindowColor = trim(getData($connAdmApp, "tbl_app_settings", "razorPayWinColor", " WHERE id='1'   " ));
$formreceiptAbb = trim(getData($connAdmApp, "tbl_app_settings", "formSubmissionReceiptAbb", " WHERE id='1'   " ));
	
$today = date('Y-m-d');
$admLastDate = '2021-08-30';
$definedDate  = date('Y-m-d', strtotime($admLastDate));
$admnFeeAmount = getData($connAdmApp, "tbl_Adm_Courses", "admFeeAmount", " WHERE id='1'   " );	//Pulling Arts fee, as both Arts & Commerce has same fee
$_SESSION['form_fee_amt'] = $admnFeeAmount;


?>