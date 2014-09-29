<?php
/**
 * Working with textfiles
 */

function writeToFile($filename, $data) {
    // create file
    $handle = fopen($filename, "w") or die("Cannot open file:  " . $filename);
    // write content
    fwrite($handle, $data);
    // close file
    fclose($handle);
}

function appendToFile($filename, $data) {
    // open file for append
    $handle = fopen($filename, "a") or die("Cannot open file:  " . $filename);
    // write content
    fwrite($handle, $data);
    // close file
    fclose($handle);
}

// reading from file: use this for small files
function readFromFile($filename) {
    $handle = fopen($filename, "r");
    $data = fread($handle, filesize($filename));
    echo $data;
}

// reading from file: use this for processing a large file line-by-line 
function readingFromLargeFile($filename) {
    $fhandle = fopen($filename, "r");
    while (!feof($fhandle)) {
        $buffer = fgets($fhandle, 1000000);
        $line = trim($buffer);
        echo $line . "\n";
    }
    fclose($fhandle);
}

function deleteFile($filename) {
    unlink($filename);
}

$myFile = "file.txt";

// uncomment the one you want
writeToFile($myFile, "Hello world\n");
appendToFile($myFile, "This is line two\n");
readFromFile($myFile);
//readingFromLargeFile($myFile);
//deleteFile($myFile);
?>
