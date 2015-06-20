<?php
session_start();

$ret = file_get_contents("../private/command");
$array = unserialize($ret);
$array[] = array("login" => $_SESSION['loggued_on_user'], "cmd" => $_COOKIE['cart']);
$str = serialize($array);
file_put_contents("../private/command", $str);

setcookie("cart", "", -3600);
header("Location: ../index.php");

?>
