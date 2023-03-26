<?php session_start();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include("../dbConn/dbConn.php");
include("common.functions.php");

$timeAlloted = 60 * 2 + time();
$smsKeyWord = getData($connAdmApp, "tbl_app_settings", "SMS_Keyword", " WHERE id='1'   " );
$webRoot = getData($connAdmApp, "tbl_app_settings", "web_root", " WHERE id='1'   " );
$inst_Abb = getData($connAdmApp, "tbl_app_settings", "inst_Abb", " WHERE id='1'   " );
$inst_Short_Name = getData($connAdmApp, "tbl_app_settings", "inst_SMS_Name", " WHERE id='1'   " );
$curSessionKey = (int) getData($connAdmApp, "tbl_session", "id", " WHERE  isCurrent='1'  " );



$today = date('Y-m-d');

$ts = time();
$addSame = 0;
$honsApplied=0;
$fName  = trim($_POST['first_name']);
$mName  = trim($_POST['mid_name']);
$lName  = trim($_POST['last_name']);
$fatherName  = trim($_POST['fat_name']);
$motherName  = trim($_POST['mot_name']);
$mobileNo  = trim($_POST['mob_no']);
$stdEmail  = trim($_POST['std_email']);
$sex  = trim($_POST['stdGender']);
$admCourse  = trim($_POST['stdCourse']);
$stdntCaste  = trim($_POST['stdCaste']);
$religion  = trim($_POST['stdReligion']);
$dob  = trim($_POST['std_dob']);
$stdDOB = getUnixDate($dob);
$permAddress  = trim($_POST['stdPermAdd']);
$stdResiAddress  = trim($_POST['stdResiAdd']);
if( isset($_POST['eqExyK']) ) $addSame = 1;

$stdFullName = trim($fName." ".$mName." ".$lName);


$razorpay_orderID = $_POST['razorpay_OrderID'];
$razorpay_payment_id = $_POST['razorpay_payment_id'];
$razorpay_signature = $_POST['razorpay_signature'];
$feeAmt = $_POST['rzrPayFeeAmt'];
$receiptNo = $_POST['receiptNumber'];

$stdStreamID = trim(getData($connAdmApp, "tbl_Adm_Courses", "streamKey", " WHERE id='$admCourse'   " ));
$stdClassID = trim(getData($connAdmApp, "tbl_Adm_Courses", "classKey", " WHERE id='$admCourse'   " ));
$admScheduleID = trim(getData($connAdmApp, "tbl_admission_Schedule", "id", " WHERE active='1'   " ));

/* SMS Settings */
$apiKey = '25EC0E2E4D4829';
$templateID = "1207162445155843821";
$smsKeyWord = "ZEXASF";

$studentHash = md5($ts.$mobileNo);

define ("DocumentsDir","../StudentFiles/");

$PassportPhotoURL = "";
$BirthCertificateURL = "";
$CasteCertificateURL = "";
$AcademicFileURL = "";


//(1)UPLOAD PASSPORT PHOTO
	if(!file_exists($_FILES['passportPhotoFile']['tmp_name']) || !is_uploaded_file($_FILES['passportPhotoFile']['tmp_name']))
	{  
		$PassportPhotoURL = trim(getData($connAdmApp, "tbl_students", "photo_File", " WHERE std_mobile='$mobileNo'   " ));
	}
	else
	{
		$name = $_FILES["passportPhotoFile"]["name"];
		$ext = end((explode(".", $name)));
		$PassportPhotoURL=md5($name.$ts."ppFile").".".$ext;							
		$result1 = move_uploaded_file($_FILES['passportPhotoFile']['tmp_name'], DocumentsDir."/$PassportPhotoURL");
	}


//(2)UPLOAD BIRTH CERTIFICATE
	if(!file_exists($_FILES['birthCertFile']['tmp_name']) || !is_uploaded_file($_FILES['birthCertFile']['tmp_name'])) {    
		$BirthCertificateURL = trim(getData($connAdmApp, "tbl_students", "birth_Cert_File", " WHERE std_mobile='$mobileNo'   " ));
	}
	else
	{
		$name = $_FILES["birthCertFile"]["name"];
		$ext = end((explode(".", $name)));
		$BirthCertificateURL=md5($name.$ts."birthFile").".".$ext;				
		$result2 = move_uploaded_file($_FILES['birthCertFile']['tmp_name'], DocumentsDir."/$BirthCertificateURL");
	}


//(3)UPLOAD CASTE CERTIFICATE
	if(!file_exists($_FILES['casteCertFile']['tmp_name']) || !is_uploaded_file($_FILES['casteCertFile']['tmp_name'])) {    
		if( (int)$casteID==1 ) $CasteCertificateURL = "";
		else
		$CasteCertificateURL = trim(getData($connAdmApp, "tbl_students", "caste_Cert_File", " WHERE std_mobile='$mobileNo'   " ));
	}
	else
	{
		$name = $_FILES["casteCertFile"]["name"];
		$ext = end((explode(".", $name)));
		$CasteCertificateURL=md5($name.$ts."casteFile").".".$ext;				
		$result3 = move_uploaded_file($_FILES['casteCertFile']['tmp_name'], DocumentsDir."/$CasteCertificateURL");
	}



//(3)UPLOAD ACADEMIC PROOF CERTIFICATE
	if(!file_exists($_FILES['academicDoc']['tmp_name']) || !is_uploaded_file($_FILES['academicDoc']['tmp_name'])) {    
		if( (int)$stdntCaste==1 ) $AcademicFileURL = "";
		else
		$AcademicFileURL = trim(getData($connAdmApp, "tbl_students", "caste_Cert_File", " WHERE std_mobile='$mobileNo'   " ));
	}
	else
	{
		$name = $_FILES["academicDoc"]["name"];
		$ext = end((explode(".", $name)));
		$AcademicFileURL=md5($name.$ts."academicFile").".".$ext;			
		$result4 = move_uploaded_file($_FILES['academicDoc']['tmp_name'], DocumentsDir."/$AcademicFileURL");
	}




	
//Create Account	
$stmt_1 = $connAdmApp->prepare("INSERT INTO tbl_students 
	(
		sessionKey, 
		std_mobile,
		std_Email,
		std_Hash,
		std_Fname,
		std_Mname,
		std_Lname,
		father_Name,
		mother_Name,
		adm_Course,
		std_Gender,
		std_DOB,
		std_Caste_ID,
		std_Religion_ID,
		std_Perm_Address,
		std_Resi_Address,
		addressesSame,
		photo_File,
		birth_Cert_File,
		academicDocFile,
		caste_Cert_File
	)VALUES
	(
		:sess_Key, 
		:std_Mobile, 
		:std_Email,
		:std_Hash,
		:std_fName,
		:std_mName,
		:std_lName,
		:father_Name,
		:mother_Name,
		:admn_Course_ID,
		:std_Sex,
		:std_DOB,
		:std_CasteID,
		:std_ReligionID,
		:perm_Address,
		:prsnt_Address,
		:add_Same,
		:photo_URL,
		:dob_URL,
		:doc_URL,
		:casteCert_URL
	)");
$stmt_1->bindParam(':sess_Key', $curSessionKey);
$stmt_1->bindParam(':std_Mobile', $mobileNo);
$stmt_1->bindParam(':std_Email', $stdEmail);
$stmt_1->bindParam(':std_Hash', $studentHash);
$stmt_1->bindParam(':std_fName', $fName);
$stmt_1->bindParam(':std_mName', $mName);
$stmt_1->bindParam(':std_lName', $lName);
$stmt_1->bindParam(':father_Name', $fatherName);
$stmt_1->bindParam(':mother_Name', $motherName);
$stmt_1->bindParam(':admn_Course_ID', $admCourse);
$stmt_1->bindParam(':std_Sex', $sex);
$stmt_1->bindParam(':std_DOB', $stdDOB);
$stmt_1->bindParam(':std_CasteID', $stdntCaste);
$stmt_1->bindParam(':std_ReligionID', $religion);
$stmt_1->bindParam(':perm_Address', $permAddress);
$stmt_1->bindParam(':prsnt_Address', $stdResiAddress);
$stmt_1->bindParam(':add_Same', $addSame);
$stmt_1->bindParam(':photo_URL', $PassportPhotoURL);
$stmt_1->bindParam(':dob_URL', $BirthCertificateURL);
$stmt_1->bindParam(':doc_URL', $AcademicFileURL);
$stmt_1->bindParam(':casteCert_URL', $CasteCertificateURL);
if($stmt_1->execute()) 
{
	$sid = $connAdmApp->lastInsertId();
	
	$stmt_2 = $connAdmApp->prepare("INSERT INTO tbl_students_subjects (sid)VALUES(:std_id)");
	$stmt_2->bindParam(':std_id', $sid);		
	if($stmt_2->execute()) 
	{
		$stmt_3 = $connAdmApp->prepare("INSERT INTO tbl_students_marks (sid)VALUES(:std_id)");
		$stmt_3->bindParam(':std_id', $sid);		
		if($stmt_3->execute())
		{
			$trnStts=1;
			$stmt_4 = $connAdmApp->prepare("INSERT INTO tbl_payments_Roster (sid,  paymentAmount, bnc_receipt_no,  trn_Mobile, stdStream,    stdCourse,   stdClass,  ifHonsApplied,    againstAdmissionSchedule, paymentDate, razorpay_OrderID,   razorpay_TransactionID, isTransactionCompleted, razorPay_Signature)VALUES
																			(:sid_pk,   :pay_Amt,  :recpt_No,:trn_Mobile, :std_Stream, :std_Course, :std_class, :ifHons_Applied,     :adm_Schedule,        :pay_date,     :razrpay_OrderID, :rzarpay_TransactionID,   :is_Completed, :rzrPay_Sign  )");
			$stmt_4->bindParam(':sid_pk', $sid);
			$stmt_4->bindParam(':pay_Amt', $feeAmt);
			$stmt_4->bindParam(':recpt_No', $receiptNo);
			$stmt_4->bindParam(':trn_Mobile', $mobileNo);
			$stmt_4->bindParam(':std_Stream', $stdStreamID);
			$stmt_4->bindParam(':std_Course', $admCourse);
			$stmt_4->bindParam(':std_class', $stdClassID);
			$stmt_4->bindParam(':ifHons_Applied', $honsApplied);
			$stmt_4->bindParam(':adm_Schedule', $admScheduleID);
			$stmt_4->bindParam(':pay_date', $today);
			$stmt_4->bindParam(':razrpay_OrderID', $razorpay_orderID);
			$stmt_4->bindParam(':rzarpay_TransactionID', $razorpay_payment_id);
			$stmt_4->bindParam(':is_Completed', $trnStts);
			$stmt_4->bindParam(':rzrPay_Sign', $razorpay_signature);
			if($stmt_4->execute())
			{
				//echo $razorpay_payment_id;
				if(send_OTP($connAdmApp, $stdFullName,$mobileNo,$smsKeyWord,$templateID )){}
				setcookie('UKi9GX',"1",$timeAlloted,"/",$webRoot);
				setcookie('HJQ8IZYX2KPUQL7DS',$razorpay_payment_id,$timeAlloted,"/",$webRoot);
				echo 1;
			}
			else echo 0;
		}
		else echo 0;
	}
	else echo 0;
}	
	
	
	
	
	

function send_OTP($dbConnn, $stdName, $mobile,  $sms_Keyword, $template_ID)
{
	$timeAlloted = 60 * 30 + time();
	//$msg="Your OTP for Registration is ".$code.", Thank you -".$shortName.".";	
	$msg = "Hello ".$stdName.", your admission to Orient Flower Jr. College has been confirmed - Zexacode Technologies"; 
	
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
	
	
	
	
	
	
	
	
	



function getUnixDate($k)
{
	$dateARR = explode("/", $k);
	$new_Date = $dateARR[2]."-".$dateARR[1]."-".$dateARR[0];
	return $new_Date;
}

function getGenericDate($k)
{
	$dateARR = explode("-", $k);
	$new_Date = $dateARR[2]."/".$dateARR[1]."/".$dateARR[0];
	return $new_Date;
}




?>