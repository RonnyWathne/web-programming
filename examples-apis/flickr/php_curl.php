<?php
/**
 * Get 5 photos of Stavanger from Flickr 
 * and display them in a table with with title, date, tags, and a link to the photo’s page on Flickr
 */
$params = array(
    "tags" => "stavanger",
    "tagmode" => "any",
    "format" => "json",
);

$url = "http://api.flickr.com/services/feeds/photos_public.gne?nojsoncallback=1&" . http_build_query($params);

// get data in JSON using curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);

// remove escaping of ' -s
$json = str_replace("\\'", "'", $json);
// get response as an associative array
$data = json_decode($json, true);
?>

<html>
    <head>
        <title>Flickr with PHP curl</title> 
    </head>
    <body>
        <table>

            <?php
            $photos = $data['items'];
            for ($i = 0; $i < min(5, count($photos)); $i++) {
                echo '<tr><td><a href="' . $photos[$i]['link'] . '">'
                . '<img src="' . $photos[$i]['media']['m'] . '"></a></td>'
                . '<td><strong>' . $photos[$i]['title'] . '</strong><br/>'
                . $photos[$i]['published'] . '<br /><br />'
                . $photos[$i]['tags'] . '</td></tr>';
            }
            ?>

        </table>
    </body>    
</html>
