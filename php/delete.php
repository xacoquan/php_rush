<?php

$id = $_GET["id"];

if (isset($_COOKIE["cart"]) == false)
{
  header("Location: cart.php");
  return ;
}

$cookie = $_COOKIE["cart"];
$list = explode(';', $cookie);
foreach($list as $i => $elem)
{
  $prod = explode('-', $elem);
  if ($prod[0] == $id)
  {
      $tmp = $prod[1] - 1;
      if ($tmp == 0)
        unset($list[$i]);
      else
      {
        $add = $id.'-'.$tmp;
        $list[$i] = $add;
      }
      $cookie = implode($list, ';');
      setcookie("cart", $cookie, time() + 3600);
      header("Location: cart.php");
      return ;
  }
}

?>
