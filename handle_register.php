<?php
	require './DBC.php';

	session_start();

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		header("Location: index.php");
		exit();
	}

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$query = DBC::getConnection()->query("insert into Account (username, password) values ('" . $_POST["username"] . "', '" . $password . "');");

	$username = $_POST["username"];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;

	header("Location: index.php");
?>