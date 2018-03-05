<?php
$customer_id = '010100687';
$credentials=base64_encode("toraf:s@123"); 

$headr = array(); 
$headr[] = 'Accept: application/json'; 
$headr[] = 'Content-type: application/json'; 
$headr[] = 'Authorization: Basic '.$credentials; 

$ch = curl_init(); 

$url="https://103.94.135.151:8082/bill/getBillInfoDBBL?userid=ROCKET&pwd=1234&refNo=".$customer_id;


curl_setopt($ch, CURLOPT_URL,$url);
//curl_setopt($ch, CURLOPT_USERPWD, $credentials); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_HTTPHEADER,$headr); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);  
curl_setopt($ch, CURLOPT_TIMEOUT, 1000); 
//for SSL false response
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


$response = curl_exec ($ch); 
var_export($response); 
?> 