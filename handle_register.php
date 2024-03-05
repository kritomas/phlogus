<?php
	require './DBC.php';

	session_start();

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		header("Location: index.php");
		exit();
	}

	$query = DBC::getConnection()->query("insert into Account (username, password) values ('" . $_POST["username"] . "', '" . $_POST["password"] . "');");

	$username = $_POST["username"];
	$password = $_POST["password"];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

	header("Location: welcome.php");
?>