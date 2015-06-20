<?PHP

function verif_file($array, $log)
{
	foreach($array as $tab)
	{
		if ($tab["login"] === $log)
			return (0);
	}
	return (1);
}

if (file_exists("../private") == FALSE)
	mkdir("../private");
$log = $_POST['login'];
$pass = $_POST['passwd'];


$ret = file_get_contents("../private/Passwd");
$array = unserialize($ret);
foreach($array as $i => $tab)
{
	if ($tab["login"] == $log)
	{
		header("Location: ../index.php");
		return ;
	}
}


$pass_hash = hash("whirlpool", $pass);

if (file_exists("../private/Passwd"))
{
	$fd = fopen("../private/Passwd");
	flock($fd, LOCK_SH | LOCK_EX);
	$ret = file_get_contents("../private/Passwd");
	$array = unserialize($ret);
	if (verif_file($array, $log) == 0)
	{
		flock($fd, LOCK_UN);
		fclose($fd);
		echo "ERROR\n";
		header("Location: ./create.php");
	}
}

$tab["login"] = $log;
$tab["passwd"] = $pass_hash;

$array[] = $tab;
$str = serialize($array);
file_put_contents("../private/Passwd", $str);
flock($fd, LOCK_UN);
fclose($fd);
echo "OK\n";
header("Location: ../index.php");

?>
