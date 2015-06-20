<?PHP

function	verif_log($login, $passwd)
{
	if ($login == NULL || $passwd == NULL)
		return (-1);
	return (1);
}

function	verif_file($array, $log)
{
	foreach($array as $i => $tab)
	{
		if ($tab["login"] === $log)
			return $i;
	}
	return (-1);
}

function	auth($login, $passwd)
{
	if (verif_log($login, $passwd) == -1)
		return (FALSE);
	$log = $login;
	$pass = $passwd;

	$pass_hash = hash("whirlpool", $pass);

	if (file_exists("../private/Passwd"))
	{
		$fd = fopen("../private/Passwd");
		flock($fd, LOCK_SH | LOCK_EX);
		$ret = file_get_contents("../private/Passwd");
		flock($fd, LOCK_UN);
		fclose($fd);
		$array = unserialize($ret);
		if (($i = verif_file($array, $log)) === -1)
			return (FALSE);
	}
	else
		return (FALSE);
	if ($array[$i]['passwd'] !== $pass_hash)
		return (FALSE);
	return (TRUE);
}

?>
