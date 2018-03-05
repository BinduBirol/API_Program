<?php 
$requestData= array("customerId"=>"010100052",
					"paidAmount"=>4000,
					"bankName"=>"ROCKET",
					"transactionId"=>"ABCD",
					"mobileNo"=>"01717785793"
					);

$str_data = json_encode($requestData);
							 
$credentials=base64_encode("toraf:s@123");
 
$headr = array(); 
$headr[] = 'Accept: application/json'; 
$headr[] = 'Content-type: application/json'; 
$headr[] = 'Authorization: Basic '.$credentials; 
 
 
 
$ch = curl_init(); 

$url_send="https://103.94.135.151:8082/api/payment";
 
curl_setopt($ch, CURLOPT_URL,$url_send); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $str_data ); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headr); 
curl_setopt($ch, CURLOPT_TIMEOUT,1000);
////for SSL false response
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
 
$response = curl_exec ($ch); 

if($response === false) { 
echo 'Curl error: ' . curl_error($ch).'<br/>';
};

curl_close ($ch);

echo 'Cusomer ID: '.$requestData['customerId'].'<br/>'; 

var_export($response ); 
?> 