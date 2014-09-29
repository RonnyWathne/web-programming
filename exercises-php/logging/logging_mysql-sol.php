<?php
/**
 * Logging to MySQL
 *
 * 1) Create database dat310
 * 2) Create table `pageviews` using the following SQL statement
 * 
 * CREATE TABLE IF NOT EXISTS `pageviews` (
 * `date` datetime NOT NULL,
 * `request_method` varchar(4) NOT NULL,
 * `uri` varchar(250) NOT NULL,
 * `ip` varchar(45) NOT NULL
 * );
 *
 * 3) Complete the logMe() function
 *
 * 2014-09-29
 */

// make sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "dat310";

/**
 * This function should insert the following values to the `pageviews` table:
 * - current date -- date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME'])
 * - request method -- $_SERVER['REQUEST_METHOD']
 * - requested URI -- $_SERVER['REQUEST_URI']
 * - visitors IP address -- $_SERVER['REMOTE_ADDR']
 */
function logMe() {
	global $conn;
		
	$sql = "INSERT INTO pageviews (date, request_method, uri, ip) VALUES ("
			. "\"" . date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . "\", "
			. "\"" . $_SERVER['REQUEST_METHOD']. "\", "
			. "\"" . $_SERVER['REQUEST_URI']. "\", "
			. "\"" . $_SERVER['REMOTE_ADDR']. "\");";
	if (!mysqli_query($conn, $sql)) {
	    echo "Error: " . mysqli_error($conn);
	}
}

// create connection
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_database);

logMe();

// close connection
mysqli_close($conn);

?>
