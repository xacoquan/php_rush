<?php
session_start();


?>
<HTML>
  <HEAD>
    <TITLE>Federation Store</TITLE>
    <META charset="utf-8">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/index.css">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/back.css">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/menu.css">
  </HEAD>
  <BODY>
    <div id="topmenu"><table><tr>
<?php
          if ($_SESSION['loggued_on_user'] == NULL || $_SESSION['loggued_on_user'] != "admin")
          {
              header("Location: ../index.php");
          }
          else
          {
?>
			<div id="menu2">
				<ul>
					<li><a href="./logout.php" title="Logout">Logout</a></li>
					<li><a href="../html/modif.html" title="Change">Change Password</a></li>
					<li><a href="./history.php" title="History">History</a></li>
					<li><a href="./user.php" title="User">User List</a></li>
				</ul>
			</div>
<?php
          }
?>
    </td></tr></table>
    <div id="middle"><p><h1><center>FEDERATION STOCK</center></h1></p></div>
    <div id='middle'><table>
<?php
if (file_exists("../private/product"))
{
    $ret = file_get_contents("../private/product");
    $array = unserialize($ret);
    foreach ($array as $elem)
    {
          echo '<tr><td class="td2">';
          echo '<img class="obj" src='.$elem["photo"].'></td><td class="td2"><p>';
          echo $elem["name"].'</p></td><td class="td2"><center><p>';
          echo $elem["type"].'</p></td><td class="desc"><p></center>';
          echo $elem["desc"].'</p></td><td class="td3"><p>';
          echo $elem["price"].'</p></td>';
          echo '<td class="td3"><a href=./remove.php?id='.$elem["id"].'><input type="submit" name="buy" value="Delete"></a></td></tr>';
    }
}
else
    echo "ERROR: DATABASE NOT FOUND";
?>
    </table>
    <form action="./new.php" method="POST">
      <input type="text" name="photo" required>
      <input type="text" name="name" required>
      <input type="text" name="type" required>
      <input type="text" name="desc" required>
      <input type="text" name="price"required>
      <input type="submit" name="create" value="Create">
    </form>
    </center></div>
    <br /><HR>
      <P id ="copy"><I>&#169xacoquan-mmeillan 2015</I></P>
    </BODY>
</HTML>
