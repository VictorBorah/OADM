<?php //session_start();
//include("Controllers/security.php");

$rcptNum = $connAdmApp->query("select count(*) from tbl_payments_Roster   ")->fetchColumn(); 
$next = $rcptNum  + 1;
$receiptNo = $appAbbvn."/".$financialYr."/".$formreceiptAbb."/".$next;
		
while(true)
{	
	$receiptNo = $appAbbvn."/".$financialYr."/".$formreceiptAbb."/".$next;
	
	$dataNum = $connAdmApp->query("select count(*) from tbl_receipt_no_temp WHERE receiptNumber='$receiptNo' ")->fetchColumn(); 
	if($dataNum>0)
	{
		$next++;
	}
	else
	{
		$used=1;
		$stmt = $connAdmApp->prepare("INSERT INTO tbl_receipt_no_temp (receiptNumber, used )VALUES(:receipt_No, :used_Key )");
		$stmt->bindParam(':receipt_No', $receiptNo);
		$stmt->bindParam(':used_Key', $used);	
		if($stmt->execute()) 
		{
			//echo $receiptNo;	
			break;			
		}
		
	}
	
	
}

	
?>