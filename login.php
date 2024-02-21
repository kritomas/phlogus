<?php
	session_start();

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		header("Location: index.php");
		exit();
	}

	$username = $_POST["username"];
	$password = $_POST["password"];
	$_SESSION["username"] = $username;

	$json = get_object_vars(json_decode(file_get_contents("admin.json")));
	var_dump($json);
	if ($json["username"] === $username && $json["password"] === $password) header("Location: admin.php");
	else header("Location: welcome.php");
?>