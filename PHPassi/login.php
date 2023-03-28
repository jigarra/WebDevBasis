<?php
require 'connect.php';
session_start();	
error_reporting(0);

if(isset($_SESSION['name'])){
	header("Location:page_1.php");
}

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password=md5($password);
	
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = $mysqli->query($sql);
	
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		$_SESSION['name'] = $row['name'];
		header("Location:page_1.php");
	}
	else{
			echo "<script>alert('Email or password is wrong')</script>";
	}
	

}

?>


<html>
<head>
<title>Login page</title>
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

	<h1>Sign In</h1>
	<p class="star"> * Required fields</p>
	<form action="" method="POST">
	<table>
	<tr>
	<td><label>Email: </label></td>
	<td><input type="email" name="email" value="<?php echo $_POST['email']; ?>"/> <span class="star">*</span></td>
	<tr>
	
	<tr>
	<td><label>Password: </label></td>
	<td><input type="password" name="password" id="pass" value="<?php echo $_POST['password']; ?>"/>  <span class="star">*</span>(8 character minimum)</td>
	<td><input type="checkbox" name="show_hide" id="show_hide" onclick="toggle()"/>Show password</td>
	<tr>
	
	<!--<tr>
	<td><input type="checkbox" name="remember" />Stay signed in</td>
	<tr>-->
	
	</table>
	<br>
	<input type="submit" name="submit" value="Login" />
	<br><br>
	Don't have an account? <a href="Register.php">Register</a>
	</form>
	
	<script>
		let pass = document.getElementById('pass');
		function toggle(){
			if(pass.type === 'password'){
				pass.type = 'text';
			}
			else{
				pass.type = 'password';
			}
		}
	</script>
	</body>
	</html>