<?php
/**
 * Example Smarty project
 */

// make sure errors are displayed
ini_set("display_errors", 1);
error_reporting(E_ALL);

// edit these two lines according to your local settings
require("/Users/kbalog/Sites/Smarty-3.1.18/libs/Smarty.class.php");
define("PROJECT_DIR", "/Users/kbalog/Sites/web-programming/examples-php/smarty");

// init Smarty
$smarty = new Smarty();

$smarty->setTemplateDir(PROJECT_DIR . "/smarty/templates");
$smarty->setCompileDir(PROJECT_DIR . "/smarty/templates_c");
$smarty->setCacheDir(PROJECT_DIR . "/smarty/cache");
$smarty->setConfigDir(PROJECT_DIR . "/smarty/configs");

// passing some data to Smarty
// single value
$smarty->assign("name", "John");

$page = isset($_GET['page']) ? $_GET['page'] : "";
$smarty->assign("page", $page);

switch ($page) {
    case "list":
        // array
        $smarty->assign("fruits", array("apple", "orange", "banana"));
        break;
    case "table":
        // associative array
        $smarty->assign("grades", array(
            "Anne" => "A",
            "Mary" => "C",
            "John" => "B",
            "Peter" => "D"
        ));
        break;
}

$smarty->display("index.tpl");
?>