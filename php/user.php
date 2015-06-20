<?php
session_start();


?>
<HTML>
  <HEAD>
    <TITLE>Federation Store</TITLE>
    <META charset="utf-8">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/index.css">
	<LINK rel="stylesheet" type="text/css" href="../includes/css/menu.css">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/back.css">
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
					<li><a href="../html/modif.html" title="Modif">Change Password</a></li>
					<li><a href="./history.php" title="Stock">View History</a></li>
					<li><a href="./admin.php" title="User">View Stock</a></li>
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
    $ret = file_get_contents("../private/passwd");
    $array = unserialize($ret);
    if (count($array) <= 1)
      echo '<tr><center><h2>No Users</h2></center></tr>';
    foreach ($array as $elem)
    {
          if ($elem['login'] != "admin")
          {
            echo '<tr><td class="td2"><p>';
            echo $elem['login'].'</p></td>';
            echo '<td class="td2"><a href=./deleteu.php?login='.$elem["login"].'><input type="submit" name="del" value="Delete"></a></td></tr>';
          }
    }
}
else
    echo "ERROR: DATABASE NOT FOUND";
?>
    </table>
    </center></div>
    <br /><HR>
      <P id ="copy"><I>&#169xacoquan-mmeillan 2015</I></P>
    </BODY>
</HTML>
