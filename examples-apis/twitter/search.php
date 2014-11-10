<?
/**
 * Twitter search
 * using the PHP Wrapper https://github.com/J7mbo/twitter-api-php
 */

ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

// Set access tokens here - see: https://dev.twitter.com/apps/ 
$settings = array(
    'consumer_key' => "",
    'consumer_secret' => "",
    'oauth_access_token' => "",
    'oauth_access_token_secret' => ""
);

// Perform a GET request and echo the response
$url = "https://api.twitter.com/1.1/search/tweets.json";
$getfield = '?q=stavanger';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$json = $twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

// convert JSON to associative array
$twitter_data = json_decode($json, true);

print_r($twitter_data);

?>
