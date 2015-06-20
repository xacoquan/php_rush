<?php

if (is_numeric($_POST['price']) == false)
{
  header("Location: ./admin.php");
  return ;
}
else if($_POST['price'] <= 0)
{
  header("Location: ./admin.php");
  return ;
}
$ret = file_get_contents("../private/product");
$array = unserialize($ret);
foreach($array as $i => $elem);
$tmp = $elem['id'] + 1;
$array[] = array("id" => $tmp, "name" => $_POST['name'], "photo" => $_POST['photo'], "type" => $_POST['type'], "desc" => $_POST['desc'], "price" => $_POST['price']);
$ret = serialize($array);
file_put_contents("../private/product", $ret);
header("Location: ./admin.php");
?>
