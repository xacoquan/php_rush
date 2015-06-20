<?php

session_start();
foreach ($_SESSION as $i => $elem)
	$_SESSION[$i] = NULL;
header("Location: ../index.php");
?>
