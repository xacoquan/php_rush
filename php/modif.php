<?PHP

function verif_file($array, $log)
{
	foreach($array as $i => $tab)
	{
		if ($tab["login"] === $log)
			return ($i);
	}
	return (-1);
}

session_start();

$log = $_SESSION['loggued_on_user'];
$old_pass = $_POST['oldpw'];
$pass = $_POST['newpw'];

$pass_hash = hash("whirlpool", $pass);
$old_hash = hash("whirlpool", $old_pass);

if (file_exists("../private/passwd"))
{
	$fd = fopen("../private/passwd");
	flock($fd, LOCK_SH | LOCK_EX);
	$ret = file_get_contents("../private/passwd");
	$array = unserialize($ret);
	if (($i = verif_file($array, $log)) === -1)
	{
		flock($fd, LOCK_UN);
		fclose($fd);
		return ;
	}
}
else
{
	return ;
}

if ($array[$i]['passwd'] !== $old_hash)
{
	flock($fd, LOCK_UN);
	fclose($fd);
}

$array[$i]['passwd'] = $pass_hash;
$str = serialize($array);
file_put_contents("../private/passwd", $str);
flock($fd, LOCK_UN);
fclose($fd);
echo "OK\n";
header("Location: ../index.php");

?>
