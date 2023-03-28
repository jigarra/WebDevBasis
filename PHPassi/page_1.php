<?php
session_start();

if	(isset($_SESSION["email"]))
{
	header("location: login.php");
}
?>

<html>

<body>
	<div>
		<a href="logout.php">Logout</a>
	</div>
	
	This is page-1. This page content is only available for logged in users.
	<br>
	<a href="page_2.php">Go to page-2</a>
</body>
</html>