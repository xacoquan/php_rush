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
					if ($_SESSION['loggued_on_user'] == NULL)
					{
?>
						<div id="menu2">
							<ul>
								<li><a href="../html/login.html" title="Login">Login</a></li>
								<li><a href="../html/create.html" title="Create">Create an Account</a></li>
								<li><a href="./cart.php" title="signout">View Cart</a></li>
							</ul>
						</div>
<?php
					}
					else
					{
?>
						<div id="menu2">
							<ul>
								<li><a href="./logout.php" title="Logout">Logout</a></li>
								<li><a href="../html/modif.html" title="signout">Change Password</a></li>
								<li><a href="./cart.php" title="signout">View Cargo</a></li>
							</ul>
						</div>
<?php
					}
?>
		</td></tr></table>
		<div id="middle"><p><h1><center>FEDERATION STORE</center></h1></p></div>
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
					echo $elem["name"].'</p></td><td class="td2"><p>';
					echo $elem["type"].'</p></td><td class="desc"><p>';
					echo $elem["desc"].'</p></td><td class="td2">';
					echo '<a href=./add.php?id='.$elem["id"].'><input type="submit" name="buy" value="'.$elem["price"].' Scraps"></a></td></tr>';
		}
}
else
		echo "ERROR: DATABASE NOT FOUND";
?>
		</table></center></div>
		<br /><HR>
			<P id ="copy"><I>&#169xacoquan-mmeillan 2015</I></P>
		</BODY>
</HTML>
