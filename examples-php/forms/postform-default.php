<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['purchase'] += $_POST['purchase'];
}

?>

<html>
    <head>
        <title>Simple POST form</title>
    </head>
    <body>
        Total purchases made: <?php echo $_SESSION['purchase']; ?>

        <form action="postform-default.php" method="POST">
            <p>Clicking submit will result in a purchase</p>
            <input type="hidden" name="purchase" value="1" />
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>