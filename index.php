<?php

require './DBC.php';

session_start();

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<header>
			<a href="register.php">Register</a>
			<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
	echo '<a href="data.php">Data</a>';
}
echo '
		</header>
		<p>
			WELKAM
		</p>
	</body>
</html>
';

$sup = DBC::getConnection();
DBC::initDB();

?>