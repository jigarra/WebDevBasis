<div style="position:absolute;">
<?php include("connection.php");
	include("link.php");?>
</div>
	<?php
	if(isset($_SESSION['name'])){
		header("Location:login.php");
	}
	error_reporting(0);
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		
		$sql = "SELECT * FROM registertb WHERE email = '$email'";
		$result = $mysqli->query($sql);
		if(!$result->num_rows>0){
			$sql = "INSERT INTO registertb (name,email,password) VALUES('$name','$email','$password')";
			if($mysqli->query($sql) == true){
				echo "<div class='alert alert-success text-center'>
				<strong>Success!</strong> Regestration successfully
				</div>";
				$_POST['name']='';
				$_POST['email']='';
				$_POST['password']='';
				
			}
			else{
				echo "<div class='alert alert-danger text-center'>
				<strong>
				failed!</strong> Somethind wrong went
				</div>";
				
			}
			
		}
		else{
			echo "<div class='alert alert-danger text-center'>
			<strong>
			Error!</strong> Email already exists
			</div>";
			
		}
	}
	
	
	
?>

<html>
	<head>
		<title>Register page</title>
		<style>
			
		
			
			<link rel="stylesheet" href="bootstrap.min.css">;
		</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="home_page.php">Nirbhay Vora</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
	 
      
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      <a href="register.php" class="btn btn-primary my-2 my-sm-0 mr-3">Sign Up</a>
      <a href="login.php" class="btn btn-success my-2 my-sm-0">Login</a>
    </form>
  </div>
</nav>
		<div class="container">
			
			
			<form action="" class="w-50 m-auto shadow p-5"  method="POST" onsubmit="return formValidate()" id="form">
				<h2 class="text-center">Sign Up - Create your account</h2>
				<div class="form-group">
					
					<label>Name: </label>
					<input type="text" class="form-control" name="name" id="name" value="<?php echo $_POST['name']; ?>"/> <span class="star"></span>
					<span id="name_error" class="text-danger"></span>
					
				</div>
				<div class="form-group">
					
					<label>Email: </label>
					<input type="email" class="form-control" name="email" id="email" value="<?php echo $_POST['email']; ?>"/>  <span class="star"></span>
					<span id="email_error" class="text-danger"></span>
					
				</div>
				<div class="form-group">
					
					<label>Password: </label>
					<input type="password" class="form-control" name="password" id="password" value="<?php echo $_POST['password']; ?>"/>  <span class="star"></span>
					<span id="password_error" class="text-danger"></span>
					
				</div>
				
				
				<input type="submit" class="btn btn-primary mt-3" name="submit" value="Register"/>
				<input type="reset" class="btn btn-danger mt-3" name="reset" value="Clear"  />
			</form>
			<p class="text-center mt-3">by clicking "REGISTER" , you agree to the terms and privacy policy</p>
			
			<p class="text-center">Already have an account? <a href="login.php" class="btn btn-success text-center">Login</a></p>
			
		</div>
		
		<!--Form validation in javaScript-->
		<script>
			function formValidate(){
			let name = document.getElementById('name').value;
			let email = document.getElementById('email').value;
			let password = document.getElementById('password').value;
			
			//name filed validation
			if(name==""){
				document.getElementById('name_error').innerHTML = "**Name should not be empty**";
				return false;
			}
			else if((name.length<3) || (name.length>20)){
				document.getElementById('name_error').innerHTML = "**name must between 2 to 20 character**";
				return false;
			}
			else if(!isNaN(name)){
				document.getElementById('name_error').innerHTML = "**numbers are  not allowed in name**";
				return false;
			}
			else{
				document.getElementById('name_error').innerHTML = "";
				
			}
			
			//email field validation
			if(email==""){
				document.getElementById('email_error').innerHTML = "**Email should not be empty**";
				return false;
			}
			else{
				document.getElementById('email_error').innerHTML = "";
				
			}
			
			//password field validation 
			if(password==""){
				document.getElementById('password_error').innerHTML = "**Password should not be empty**";
				return false;
			}
			else if((password.length<6) || (password.length>20)){
				document.getElementById('password_error').innerHTML = "**Password must between 6 to 20 character**";
				return false;
			}
			else{
				document.getElementById('password_error').innerHTML = "";
				
				}
			}
			
			
			
			</script>
			<script src="bootstrap.min.js"></script>
			</body>
			</html>													