<?php
/**
 * Making a GET HTTP request using cURL
 * 
 * In this example we solve Task 4.a) from Assignment 4 
 */

$url = "http://krisztianbalog.com/DAT310/ass44a.php";

// 1. initialize
$ch = curl_init($url);

// 2. set transfer options
// method is GET by default, so this is not necessary
curl_setopt($ch, CURLOPT_HTTPGET, true);
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
