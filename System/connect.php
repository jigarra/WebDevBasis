<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mjsystem";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn == true)
{
	echo " Db Connectio Success";
}
else
{
	die("Error".mysqli_connect_error());
}


?>