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
$data = json_decode($json, true);

?>

<html>
    <head>
        <title>Twitter Search API</title> 
    </head>
    <body>
        <table>
            <?php
            $tweets = $data['statuses'];
            for ($i = 0; $i < count($tweets); $i++) {
                echo '<tr><td><img src="' . $tweets[$i]['user']['profile_image_url'] . '"><br />'
                . '<a href="' . $tweets[$i]['user']['url'] . '">@' 
                . $tweets[$i]['user']['screen_name'] . '</a></td>'
                . '<td><small>' . $tweets[$i]['created_at'] . '</small><br/>'
                . $tweets[$i]['text'] . '</td></tr>';
            }
            ?>
        </table>
    </body>    
</html>