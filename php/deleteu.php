<?php

$id = $_GET['login'];
$ret = file_get_contents("../private/passwd");
$array = unserialize($ret);
foreach ($array as $i => $elem)
{
  if ($elem['login'] == $id)
  {
    unset($array[$i]);
    $str = serialize($array);
    file_put_contents("../private/passwd", $str);
    header("Location: ./user.php");
    return ;
  }
}

$str = serialize($array);
file_put_contents("../private/passwd", $str);
header("Location: ./user.php");

?>
