<?php
session_start();


?>
<HTML>
  <HEAD>
    <TITLE>Federation Store</TITLE>
    <META charset="utf-8">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/cart.css">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/back.css">
    <LINK rel="stylesheet" type="text/css" href="../includes/css/menu.css">
  </HEAD>
  <BODY>
    <div id="topmenu"><table><tr>
<?php
		if ($_SESSION['loggued_on_user'] == NULL)
		{
?>
		<div id="menu2">
			<ul>
				<li><a href="../html/login.html" title="Create">Login</a></li>
				<li><a href="../html/create.html" title="Play">Create an Account</a></li>
				<li><a href="../index.php" title="Return to Store">Return to Store</a></li>
			</ul>
		</div>
<?php
		}
		else
		{
?>
		<div id="menu2">
			<ul>
				<li><a href="./logout.php" title="Play">Logout</a></li>
				<li><a href="../html/modif.html" title="signout">Change Password</a></li>
				<li><a href="../index.php" title="Return to Store">Return to Store</a></li>
			</ul>
		</div>
<?php
		}
?>
    </td></tr></table>
    <div id="middle"><p><h1><center>CARGO</center></h1></p></div>
    <div id='middle'><table>
<?php
if (file_exists("../private/product"))
{
    $tot = 0;
    if (isset($_COOKIE['cart']) == false)
      echo '<tr><center><h2>Nothing in Cargo</h2></center></tr>';
    else
    {
      $ret = file_get_contents("../private/product");
      $array = unserialize($ret);
      $cook = $_COOKIE['cart'];
      $cook = explode(';', $cook);
      foreach ($cook as $elem)
      {
            $tmp = explode('-', $elem);
            foreach ($array as $i => $elem)
            {
              if ($tmp[0] == $elem['id'])
              {
                $tot+= $array[$i]["price"] * $tmp[1];
                echo '<tr><td class="td2">';
                echo '<img class="obj" src='.$elem["photo"].'></td><td class="td2"><p>';
                echo $elem["name"].'</p></td><td class="td2"><p>';
                echo $elem["type"].'</p></td><td class="desc"><p>';
                echo $elem["desc"].'</p></td><td class="td3"><center><p>';
                echo $tmp[1].'</p></center></td><td class="td3">';
                echo '<a href=./delete.php?id='.$tmp[0].'><input type="submit" name="delete" value="Remove one"></a></td></tr>';
              }
            }
      }
      echo '<tr><td class="td2"><a href=./deleteall.php><input type="submit" name="deleteall" value="Empty Cargo"></a></td></tr>';
      if ($_SESSION['loggued_on_user'] != NULL)
        {
          echo '<tr><td class="td2"><a href=./buy.php><input type="submit" name="buy" value="Buy"></a></td>';
          echo '<td class="td2">Total Scrap: '.$tot.'</td></tr>';
        }
    }
}
else
    echo "ERROR: DATABASE NOT FOUND";
?>
    </table></center>


    </div>
</BODY>
<footer>
	 <br />
<P id ="copy"><I>&#169xacoquan-mmeillan 2015</I></P>

</footer>
</HTML>
