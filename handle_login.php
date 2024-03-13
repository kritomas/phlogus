<?php
	require './DBC.php';

	session_start();

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		header("Location: index.php");
		exit();
	}

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$query = DBC::getConnection()->query("select username, password from Account where username = '" . $_POST["username"] . "' and password = '" . $password . "';");

	if ($query->num_rows <= 0)
	{
		die("Unknown user");
	}
	$username = $_POST["username"];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

	header("Location: index.php");
?>