<?php

require './DBC.php';

session_start();

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<title>Usero</title>
	</head>
	<body>
		<header>
			<a href="register.php">Register</a>
			<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
	echo '<a href="data.php">Data</a>
	Logged in as <b>' . $_SESSION["username"] . '</b>
	<a href="handle_logout.php">Log Out</a>
	';
}
echo '
		</header>
		<p>
			WELKAM to Usero. Here we make users and keep track of users and account and all those weird usery user things.
		</p>
	</body>
</html>
';

?>