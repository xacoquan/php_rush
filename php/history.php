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
					<li><a href="./admin.php" title="Stock">View Stock</a></li>
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
if (file_exists("../private/command"))
{
    $ret = file_get_contents("../private/command");
    $str = file_get_contents("../private/product");
    $array = unserialize($ret);
    $tab = unserialize($str);
    foreach ($array as $i => $lol)
    {
      $tmp = explode(';', $lol['cmd']);
      echo '<tr><td class="td2"><p>'.$i.'<p></td>';
      echo '<td class="td2"><p>'.$lol['login'].'<p></td></tr>';
      foreach($tmp as $k => $toto)
      {
        $tmp2 = explode('-', $toto);
        foreach($tab as $j => $elem)
        {
          if ($tmp2[0] == $elem['id'])
          {
            echo '<tr><td class="td2">';
            echo '<img class="obj" src='.$elem["photo"].'></td><td class="td2"><p>';
            echo $elem["name"].'</p></td><td class="td2"><center><p>';
            echo $elem["type"].'</p></td><td class="desc"><p></center>';
            echo $elem["desc"].'</p></td><td class="td3"><p>';
            echo $elem["price"].'</p></td><td class="td3"><p>';
            echo ' x '.$tmp2[1].'</p></td></tr>';
          }
        }
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
