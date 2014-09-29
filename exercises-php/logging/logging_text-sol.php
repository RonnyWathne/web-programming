<?php
/**
 * Logging to text file
 *
 * 2014-09-29
 */

/**
 * This function should append the followings values, tab separated, to a logfile:
 * - current date
 * - request method
 * - requested URI
 * - visitors IP address
 */
function logMe($filename) {
    $handle = fopen($filename, "a") or die("Cannot open file:  " . $filename);
    fwrite($handle, date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME'])
    	. "\t" . $_SERVER['REQUEST_METHOD']
    	. "\t" . $_SERVER['REQUEST_URI']
    	. "\t" . $_SERVER['REMOTE_ADDR']
    	. "\n");
    fclose($handle);
}

logMe("visitors.log");

?>
