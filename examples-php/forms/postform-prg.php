<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['purchase'] += $_POST['purchase'];
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
?>

<html>
    <head>
        <title>Form with Post/Redirect/Get pattern</title>
    </head>
    <body>

        Total purchases made: <?php echo $_SESSION['purchase']; ?>

        <form action="postform-prg.php" method="POST">
            <p>Clicking submit will result in a purchase</p>
            <input type="hidden" name="purchase" value="1" />
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>