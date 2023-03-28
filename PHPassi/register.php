<?php
require 'connect.php';

if(isset($_SESSION['name'])){
	header("Location:login.php");
}
error_reporting(0);
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$password=md5($password);
	
	
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = $mysqli->query($sql);
	if(!$result->num_rows>0){
		$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
		if($mysqli->query($sql) == true){
				echo "<script>alert('Registration completed');</script>";
				header("Location:login.php");
		}
		else{
				echo "<script>alert('Somethinf wrong went');</script>";
		}
	
	}
	else{
		echo "<script>alert('Email already exists');</script>";
	}
}



?>


<html>
<head>
<title>Register page</title>
<style>
.star{
	color:red;
}
input{
	outline:none;
}
</style>
</head>
<body>

	<h1>Sign Up</h1>
	<h3>Create your account</h3>
	<p class="star"> * Required fields</p>
	<form action="" method="POST">
	<table>
	<tr>
	<td><label>Name: </label></td>
	<td><input type="text" name="name" value="<?php echo $_POST['name']; ?>"/> <span class="star">*</span></td>
	<tr>
	
	<tr>
	<td><label>Email: </label></td>
	<td><input type="email" name="email" value="<?php echo $_POST['email']; ?>"/>  <span class="star">*</span></td>
	<tr>
	
	<tr>
	<td><label>Password: </label></td>
	<td><input type="password" name="password" value="<?php echo $_POST['password']; ?>"/>  <span class="star">*</span></td>
	<tr>
	
	
	</table>
	<br>
	<input type="submit" name="submit" value="Register" />
	<p>by clicking "REGISTER" , you agree to the terms and privacy policy</p>
	
	Already have an account? <a href="login.php">Login</a>
	</form>
</body>