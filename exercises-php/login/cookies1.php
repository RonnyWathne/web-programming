<?php
/**
 * Login using cookies
 */

require("common.inc.php");

// Returns user_id if there is a logged in user, and -1 otherwise
function loggedInUser() {
    if (isset($_COOKIE['user_id'])) {
        return $_COOKIE['user_id'];
    }
    return -1;
}

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

switch ($action) {
    
    case "login":
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $error = null;
        if (isset($username) && isset($password)) {
            $user_id = checkPassword($username, $password);
            if ($user_id == -1) {
                $error = "Incorrect username/password.";
            } else {
                addToCookie("user_id", $user_id);
            }
        } else {
            $error = "Username or password is empty.";
        }
        if (isset($error)) {
            echo $error . " Try again!<br />";
        }
        break;

    case "logout":
        unsetCookie("user_id");
        $user_id = -1;
        break;
    
    default:
        $user_id = loggedInUser();
}

// user is logged in
if ($user_id > 0) {
    echo "Hello " . $users[$user_id]['name'] . "! <br />";
    echo "<a href='cookies1.php?action=logout'>Logout</a>";
}
// login form
else {
    loginForm();
}
?>
