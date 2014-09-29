<?php
/**
 * MySQL class
 * 
 * Example usage:
 * 
 * $mysql = new MySQL("localhost", "root", "root", "cabin");
 * $mysql->connect();
 * 
 * // insert
 * $sql = "INSERT INTO bookings(date_from, nights, room_id) 
 *           VALUES ('2013-10-01', 11, 111);";
 * $mysql->execute($sql);         
 *
 * // select
 * $sql = "SELECT * FROM bookings"; 
 * $results = $mysql->fetch($sql);
 *
 * for ($i = 0; $i < count($results); $i++) {
 *    echo $results[$i]['booking_id'] . "  "; 
 *    echo $results[$i]['date_from'] . "  "; 
 *    echo $results[$i]['nights'] . "  "; 
 *    echo $results[$i]['room_id'] . "<br />"; 
 * }
 * 
 * // disconnect
 * $mysql->disconnect();
 * 
 */


class MySQL {
    
    private $server;
    private $username;
    private $password;
    private $database;
    private $conn;
    
    function __construct($server, $username, $password, $database) {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    function connect() {
        $this->conn = mysqli_connect($this->server, $this->username, 
                $this->password, $this->database);        
    }
    
    function disconnect() {
        mysqli_close($this->conn);
    }
    
    /**
     * SELECT
     * @param type $sql
     */
    function fetch($sql) {
        $result = mysqli_query($this->conn, $sql);
        $array = array();
        
        $index = 0;
        while ($row = mysqli_fetch_array($result)) {
            foreach ($row as $field => $value) {
                $array[$index][$field] = $value;
            }
            $index++;
        }
        return $array;
    }
    
    /**
     * INSERT or UPDATE
     * @param type $sql
     */
    function execute($sql) {
        if (!mysqli_query($this->conn, $sql)) {
            echo "Error: " . mysqli_error($this->conn) . "<br />";
        }        
    }
    
}

?>
