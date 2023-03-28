<div style="position:absolute;">
<?php include("connection.php");
	include("link.php");?>
</div>
<?php
session_start();	
error_reporting(0);

if(isset($_SESSION['name'])){
	header("Location:welcome.php");
}

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM registertb WHERE email='$email' AND password='$password'";
	$result = $mysqli->query($sql);
	
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		$_SESSION['name'] = $row['name'];
		header("Location:welcome.php");
	}
	else{
			echo "<div class='alert alert-danger text-center'>
		<strong>Failed!</strong> Email or password is wrong
	</div>";
	}
	

}

?>


<html>
<head>
<title>Login page</title>
<style>
	<link rel="stylesheet" href="bootstrap.min.css">
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
    <form class="form-inline my-2 my-lg-0">
      <a href="register.php" class="btn btn-primary my-2 my-sm-0 mr-3">Sign Up</a>
      <a href="login.php" class="btn btn-success my-2 my-sm-0">Login</a>
    </form>
  </div>
</nav>
	<div class="container">
	
	<form action="" method="POST" class="w-50 m-auto shadow p-5">
	<h2 class="text-center">Sign In</h2>
	<div class="form-group">
	<label>Email: </label>
	<input type="email" class="form-control" name="email" value="<?php echo $_POST['email']; ?>"/> <span class="star"></span>
	</div>
	
	<div class="form-group">
	<label>Password: </label>
	<input type="password" class="form-control" name="password" id="pass" value="<?php echo $_POST['password']; ?>"/>  <span class="star"></span>
	
	</div>
	 <div class="form-group form-check">
    <input type="checkbox" onclick="toggle()" class="form-check-input">
    <label class="form-check-label" for="exampleCheck1">Show password	</label>
  </div>
	
	
	
	<div class="">
	<input type="submit" class="btn btn-success 	w-100 " name="submit" value="Login" />
	</div>
	<br>
	Don't have an account? <a href="Register.php" class="btn btn-primary">Register</a>
	</form>
	</div>
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
				<script src="bootstrap.min.js"></script>

	</body>
	</html>