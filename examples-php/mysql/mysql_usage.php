<?php
/**
 * MySQL usage example
 * 
 * This example assumes that you have a dat310 database.
 * Before running the code, create the test_persons table with the following SQL statement:
 * 
 * CREATE TABLE IF NOT EXISTS `test_persons` (
 *  `id` int(11) NOT NULL,
 *  `name` varchar(30) NOT NULL,
 *  `age` int(11) NOT NULL
 * )
 * 
 */

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "dat310";
$db_tablename = "test_persons";

// create connection
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_database);

// check connection
if (mysqli_connect_errno($conn)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// run a select
$sql = "SELECT * FROM " . $db_tablename;
$result = mysqli_query($conn, $sql);

$rec = 1;
while ($row = mysqli_fetch_array($result)) {
    echo "Record #" . $rec . "<br />";
    foreach ($row as $field => $value) {
        echo $field . ": " . $value . "<br />";
    }
    echo "<br>";
    $rec++;
}

// execute query
$sql = "INSERT INTO " . $db_tablename . " (id, name, age) VALUES (3, 'John', 44);";
if (mysqli_query($conn, $sql)) {
    echo "Successful execution";
} else {
    echo "Error: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);

?>
