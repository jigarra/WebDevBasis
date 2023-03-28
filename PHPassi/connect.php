<?php
$mysqli = new mysqli("localhost","root","","mini_db");
if($mysqli==false)
	{
		die("Error: Server not connected" . $mysqli->connect_error);
	}
?>
