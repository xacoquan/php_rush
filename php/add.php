<?php

$id = $_GET["id"];

if (isset($_COOKIE["cart"]) == false)
{
  setcookie("cart", $id.'-1', time() + 3600);
  header("Location: ../index.php");
  return ;
}

$cookie = $_COOKIE["cart"];
$list = explode(';', $cookie);
foreach($list as $i => $elem)
{
  $prod = explode('-', $elem);
  if ($prod[0] == $id)
  {
      $tmp = $prod[1] + 1;
      $add = $id.'-'.$tmp;
      $list[$i] = $add;
      $cookie = implode($list, ';');
      setcookie("cart", $cookie, time() + 3600);
      header("Location: ../index.php");
      return ;
  }
}

$cookie = $cookie.';'.$id.'-1';
setcookie("cart", $cookie, time() + 3600);
header("Location: ../index.php");

?>
