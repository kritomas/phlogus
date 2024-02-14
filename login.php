<?php
	var_dump($_POST);
	echo "<pre>";
	print_r($_POST);

	if (empty($_POST["username"]) || empty($_POST["password"]))
	{
		echo("EMPTY");
	}
?>