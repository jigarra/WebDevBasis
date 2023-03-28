<?php
	require 'connection.php';
	require 'link.php';
	if(isset($_SESSION['name'])){
		header("Location:login.php");
	}
	error_reporting(0);
	
	
	$row = $_GET['ids'];
	
	$query = "SELECT * FROM registertb WHERE id='$row'";
	
	$result = $mysqli->query($query);
	
	$rowdata = $result->fetch_array();
	
	
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		$rowUpd = $_GET['ids'];
		
		$sql = "UPDATE registertb SET name='$name',email='$email',password='$password' WHERE id=$rowUpd ";
		$result = $mysqli->query($sql);
		if($mysqli->query($sql) == true){
			echo "<script>alert('Data updated');</script>";	
			header("Location:display.php");
		}
		else{
			echo "<script>alert('Somethinf wrong went');</script>";
			
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
			#name_error,#email_error,#password_error{
			color:red;
			}
		</style>
	</head>
	<body>
		
		<div class="container mt-5">
			
			
			<form action="" class="w-50 m-auto shadow mt-5 p-5"  method="POST" onsubmit="return formValidate()" id="form">
				<h2 class="text-center">Update your data</h2>
				<div class="form-group">
					
					<label>Name: </label>
					<input type="text" class="form-control" name="name" id="name" value="<?php echo $rowdata['name']; ?>"/> 
					<span id="name_error" class="text-danger"></span>
					
				</div>
				<div class="form-group">
					
					<label>Email: </label>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $rowdata['email']; ?>"/> 
					<span id="email_error" class="text-danger"></span>
					
				</div>
				<div class="form-group">
					
					<label>Password: </label>
					<input type="password" class="form-control" name="password" id="password" value="<?php echo $rowdata['password']; ?>"/>  
					<span id="password_error" class="text-danger"></span>
					
				</div>
				<div class="form-group form-check">
				<input type="checkbox" onclick="toggle()" class="form-check-input">
				<label class="form-check-label" for="exampleCheck1">Show password	</label>
			</div>
			
			
			
			<input type="submit" class="btn btn-success mt-3" name="submit" value="Update"/>
			<input type="reset" class="btn btn-danger mt-3" name="reset" value="Reset"/>
			<div class="form-group">
			<a href="display.php" class="btn btn-outline-dark link-primary mt-3 ">GO to the Display Data</a>
			</div>
			
		</form>
	</div>
	
	
	<!--Form validation in javaScript-->
	<script>
		function formValidate(){
			let name = document.getElementById('name').value;
			let email = document.getElementById('email').value;
			let password = document.getElementById('password').value;
			
			//name filed validation
			if(name==""){
				document.getElementById('name_error').innerHTML = "(Name should not be empty)";
				return false;
			}
			else if((name.length<3) || (name.length>20)){
				document.getElementById('name_error').innerHTML = "(name must between 2 to 20 character)";
				return false;
			}
			else if(!isNaN(name)){
				document.getElementById('name_error').innerHTML = "(numbers are  not allowed in name)";
				return false;
			}
			else{
				document.getElementById('name_error').innerHTML = "";
				
			}
			
			//email field validation
			if(email==""){
				document.getElementById('email_error').innerHTML = "(Email should not be empty)";
				return false;
			}
			else{
				document.getElementById('email_error').innerHTML = "";
				
			}
			
			//password field validation 
			if(password==""){
				document.getElementById('password_error').innerHTML = "(Password should not be empty)";
				return false;
			}
			else if((password.length<6) || (password.length>20)){
				document.getElementById('password_error').innerHTML = "(Password must between 6 to 20 character)";
				return false;
			}
			else{
				document.getElementById('password_error').innerHTML = "";
				
			}
			}
			
		let pass = document.getElementById('password');
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