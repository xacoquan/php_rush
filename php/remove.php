<?php

$id = $_GET['id'];
$ret = file_get_contents("../private/product");
$array = unserialize($ret);
foreach ($array as $i => $elem)
{
  if ($elem['id'] == $id)
  {
    unset($array[$i]);
    $str = serialize($array);
    file_put_contents("../private/product", $str);
    header("Location: ./admin.php");
    return ;
  }
}

$str = serialize($array);
file_put_contents("../private/product", $str);
header("Location: ./admin.php");

?>
