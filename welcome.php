<?php
	session_start();
	if (empty($_SESSION["username"]))
	{
		echo "WRONG LOGIN KRONK";
		exit();
	}
	else
	{
		$username = $_SESSION["username"];
		$password = $_SESSION["password"];
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Rotoor</title>
	</head>
	<body>

	</body>
</html>