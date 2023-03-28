<?php
session_start();

if	(!isset($_SESSION["email"]))
{
	header("location: login.php");
}
?>

<html>
<body>

	<div>
		<a href="logout.php">Logout</a>
	</div>
	This is page-2.This page content is only available for logged in users.
	<br>
	
		<a href="page_1.php">Go To Page-1</a>
</body>
</html>