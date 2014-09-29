<?php
/**
 * Common functionality for login example
 */

// make sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

// this is our "user database"
// the key is the username
$user_ids = array(
    'user_1' => 1,
    'user_2' => 2,
    'user_123' => 123,
);
// key is the user_id
$users = array(
    1 => array('username' => "user_1", 'name' => "John Smith 1", 'password' => "aaa"),
    2 => array('username' => "user_2", 'name' => "John Smith 2", 'password' => "bbb"),
    123 => array('username' => "user_123", 'name' => "John Smith 123", 'password' => "ccc"),
);


// stores a value in the cookie
function addToCookie($name, $value) {
    $expire = time() + 60 * 60 * 24 * 30;
    setcookie($name, $value, $expire);
}

// unset a value in the cookie
function unsetCookie($name) {
    $expire = time() - 3600;
    setcookie($name, "", $expire);
}

// display login form
function loginForm() {
    echo "<form action='cookies1.php' method='POST'>"
    . "<label>Username: <input type='text' name='username'></label><br />"
    . "<label>Password: <input type='password' name='password'></label><br />"
    . "<input type='hidden' name='action' value='login' />"
    . "<input type='submit' name='submit' value='Login' />"
    . "</form>";
}

// Checks if the password belongs to the given user.
// If yes, returns the user_id, otherwise returns -1
function checkPassword($username, $password) {
    global $user_ids, $users;
    if (isset($user_ids[$username]) && $users[$user_ids[$username]]['password'] == $password) {
        return $user_ids[$username];
    }
    return -1;
}

?>
