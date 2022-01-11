<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
require_once("connection.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {


	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
		if($paramName=="ORDERID")
		{
			$orderrrid=$paramValue;
		}
		}
	}
	
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		
		$updatestatus="UPDATE order_details set payment_status='Successfull' WHERE order_id='$orderrrid'";
		$update=mysqli_query($conn,$updatestatus);
		if($update){
			$updatestatus="UPDATE orders set payment_status='Successfull' WHERE id='$orderrrid'";
		$update=mysqli_query($conn,$updatestatus);
		if($update){
			header('location: ./thank-you.php');
			
			
		}
		}else{
			echo "<b>Transaction status is fail</b>" . "<br/>";
		}
		
			
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>