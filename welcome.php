<?php
	session_start();
	if (empty($_SESSION["username"]))
	{
		echo "WRONG LOGIN KRONK";
	}
	else
	{
		$username = $_SESSION["username"];
		echo("You are logged in as <b>$username</b>");
	}
?>