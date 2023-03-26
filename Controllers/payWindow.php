<?php session_start();
include("../dbConn/dbConn.php");
include("../Controllers/common.functions.php");
include("security.php");
require '../vendor/autoload.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;



$windowLiteral = "Pay Admission Fee";
$windowText = "The Admission Fee";
$formName = "Admission Application.";
$description = "No Admission Seats will be reserved without payment. The College reserves the right to cancel all such applications. <br><br> This payment can also be made offline at the College Office.";
$displayCurrency = 'INR';

$api = new Api($rzrPay_keyID, $rzrPay_SecretKey);
$pg= pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);	



$receiptNo = $_POST['receiptNumber'];
$stdEmail = $_POST['std_email'];
$mobileNo = $_POST['mob_no'];
$payableFee = $_POST['payableAmt'];
$studentFullName = $_POST['first_name']." ".$_POST['mid_name']." ".$_POST['last_name'];


$feeAmt = $payableFee * 100; // (Admn Fees) rupees in paise

$orderData = [
        'receipt'         => $receiptNo,
        'amount'          => $feeAmt, // (Admn Fees) rupees in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$_SESSION['rcpt_No'] = $receiptNo;

$displayAmount = $orderData['amount'];

if ($displayCurrency !== 'INR'){
	$url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
	$exchange = json_decode(file_get_contents($url), true);

	$displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
	$checkout = $_GET['checkout'];
}

$showAmt = number_format($payableFee, 2);  




/****************************************************/
 $data = [
        "key"               => $rzrPay_keyID,
        "amount"            => $feeAmt,
        "name"              => $studentFullName,
        "description"       => "Admission Fee",
        "image"             => $razprPayLogo,
        "prefill"           => [
            "name"              => $studentFullName,
            "email"             => $stdEmail,
            "contact"           => $mobileNo,
        ],
        "notes"             => [            
            "merchant_order_id" => $receiptNo,
        ],
        "theme"             => [
            
        ],
        "order_id"          => $razorpayOrderId,
    ];

    if ($displayCurrency !== 'INR')
    {
        $data['display_currency']  = $displayCurrency;
        $data['display_amount']    = $payableFee;
    }

    $json = json_encode($data);
/****************************************************/


?>





<div class="col-xs-12 col-md-5 col-lg-4 col-centered " style="text-align:justify;background:#ececfb;font-size:12px;border-radius:20px;font-weight:normal;border:1px solid #002040;color:#313140;padding:20px;display:block">
	<div class="row">
		<div class="col-xs-12 text-center justify-content-center align-self-center">
			<H1 style="color:#7266ba;font-weight:300;">Payment</H1>
		</div>
	
	</div>
	
	
	
	 <div class="row payText">
		 <?php echo $windowText;?> has to be paid to process your <?php echo $formName;?>&nbsp;
		<br>
		<br>
		<b>Note:</b>&nbsp;<?php echo $description;?>
	 </div>
 
  
 <br>
 <br>
 
	<div class="row">
		<div class="col-xs-12 text-center justify-content-center align-self-center">
			<b class="payText">Payment Amount: </b>
			<br>
			<span class="payLiteral">INR &nbsp;<?php echo $showAmt;?></span><br>
			<br>
			<br>


			<form name='razorpayform' id="razorpayform">
			<input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
			<input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
			<input type="hidden" name="std_Mobile"  id="std_Mobile" value="<?php echo $mobileNo;?>">
			<input type="hidden" name="std_Email"  id="std_Email" value="<?php echo $stdEmail;?>">
			<input type="hidden" name="razorpay_OrderID"  id="razorpay_OrderID" value="<?php echo $razorpayOrderId;?>">
			<input type="hidden" name="rzrPayFeeAmt"  id="rzrPayFeeAmt" value="<?php echo $payableFee;?>">
			</form>
			<button id="rzrPayBtn" class="razorpay-payment-button">PAY WITH RAZORPAY</button>
		</div>
	
	</div>
<br>
 <br>


</div>


<script>
		
	var options = <?=$json?>;																				
	options.handler = function (response)
	{
		document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
		document.getElementById('razorpay_signature').value = response.razorpay_signature;
		
		var rzrPayFrm = $('#razorpayform')[0];
		var main_formData = new FormData(rzrPayFrm);
		
		var profileFrm = $('#profileForm')[0];							
		var form2_Data  = new FormData(profileFrm);	
		for (var fData of form2_Data.entries())
		{
			main_formData.append(fData[0], fData[1]); 
		}
		
		/* Start Displaying Combined Form Data */
		
		/*	
		console.log("\n*********************************");
		console.log("FORM DATA")
		console.log("\n*********************************");

		for (var pair of main_formData.entries())
		{
		 console.log(pair[0]+ ', '+ pair[1]); 
		}
		*/
		/* End  Displaying Combined Form Data */
		
		
		//document.razorpayform.submit();
		
		
		
		$('#appBx').waitMe({effect : 'ios'});
		
		var trnID = $("#razorpay_payment_id").val();
		var helpMsg = "Your Payment has been succesful with Transaction ID "+trnID+"But we the system couldnt save it to the server. Please contact System Administrator for help.";
		$.ajax({
			type: "POST",
			url: "Controllers/saveTransaction",
			data: main_formData,
			processData: false,
			contentType: false,
			cache: false,
			timeout: 600000,
			success: function (retVal) {

				console.log("Return from Transaction Save =>"+retVal);				
				if(retVal!=0 || retVal!="0")
				{
					$('#appBx').waitMe('hide');
					window.location.href = "success?txn="+trnID;
					
				}
				else
				{								
					$('#appBx').waitMe('hide');
					showFailureMsg(helpMsg);
					$("#paymentsBx").html(helpMsg)
				}

			},
			error: function (e) {				
				$('#appBx').waitMe('hide');											
					
			}
		});
		
		
		
		
		
		
		
		
		
		
	};																				
	options.theme.image_padding = false;
	options.modal = {
	ondismiss: function() {		
		bootbox.alert({
				message: "Payment Aborted",
				size: 'small',
				backdrop: true
			});
	},																					
	escape: true,																					
	backdropclose: false
	};
	var rzp = new Razorpay(options);

	$(document).on("click", '#rzrPayBtn', function(e){																								
		rzp.open();
		e.preventDefault();
	});

</script>















