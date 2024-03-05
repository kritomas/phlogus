<?php

require './DBC.php';

session_start();

if (empty($_SESSION["username"]))
{
	header("Location: index.php");
	exit();
}

echo '
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<header>
		<a href="index.php">Home</a>
	</header>';
$query = DBC::getConnection()->query("select username, password from Account;");
if ($query->num_rows > 0)
{
	while ($row = $query->fetch_assoc())
	{
		echo "Username:  <b>". $row["username"]. "</b>, Password: <b>" . $row["password"] . "</b><br>";
	}
}
echo '
	</body>
</html>
';

?>