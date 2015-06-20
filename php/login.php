<?php
session_start();
include('./auth.php');
$login = $_POST['login'];
$pass = $_POST['passwd'];
if ($login === NULL || $pass === NULL)
{
	echo "ERROR\n";
	$_SESSION['loggued_on_user'] = NULL;
}
else if (auth($login, $pass) === FALSE)
{
	echo "ERROR\n";
	$_SESSION['loggued_on_user'] = NULL;
}
else
{
	$_SESSION['loggued_on_user'] = $login;
}
if ($login == "admin")
	header("Location: ./admin.php");
else
	header("Location: ../index.php");
?>
