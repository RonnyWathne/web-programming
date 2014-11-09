<?php
/**
 * Making a POST HTTP request using cURL
 * 
 * In this example we solve Task 4.c) from Assignment 4 
 */

$url = "http://krisztianbalog.com/DAT310/ass44c.php";

// the data we want to send in the body of the request
$data = "123456";

// 1. initialize
$ch = curl_init($url);

// 2. set transfer options
// set method to POST
curl_setopt($ch, CURLOPT_POST, true);
// data to be posted
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// return the transfer as a string instead of outputting it directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// include the header in the output
curl_setopt($ch, CURLOPT_HEADER, true);

// 3. execute the session
$response = curl_exec($ch);

// 4. finish the session
curl_close($ch);

// echo HTTP response
echo $response;

?>
