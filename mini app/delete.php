<?php
	require 'connection.php';
	
	$id = $_GET['id'];
	
	$query = "DELETE FROM registertb WHERE id='$id'";
	
	if($mysqli->query($query) == true){
			echo "<script>alert('Data deleted Successfully')</script>";
			header("Location:display.php");
	}
	else{
			echo "<script>alert('Data not deleted Successfully')</script>";

	}
	
	
	
?>