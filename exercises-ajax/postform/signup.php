<?php

// wait one sec
sleep(1);

// we use $_REQUEST so that it works both with GET and POST
echo "Hi " . $_REQUEST['first_name'] . " " . $_REQUEST['last_name'] . " !";

?>
