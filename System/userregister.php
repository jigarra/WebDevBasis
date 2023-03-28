<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LoginSystem</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/System/index.php">MJLoginSystem</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="/System/userlogin.php">Login</a>
        <a class="nav-link active" href="/System/userregister.php">SignUp</a>
        <a class="nav-link" href="/System/userlogout.php">Logout</a>
      </div>
    </div>
  </div>
</nav>
<!--Allert-->
<?php
/*if($showAlert){
	echo ' <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}

if($showError){
	echo ' <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}*/
?>
<!--close Allert-->

<!-- Sign up Form -->
<?php 
	include 'connect.php';
	
if(isset($_REQUEST['username'])){
//remover backslashes 
$username = stripcslashes($_REQUEST['username']);
//escae special char convert in to string 
$username = mysqli_real_escape_string($con,$username);
$email= stripcslashes($_REQUEST['email']);
$email= mysqli_real_escape_string($con,$username);
$password= stripcslashes($_REQUEST['password']);
$password= mysqli_real_escape_string($con,$username);

$query= "INSERT INTO `register_tb` (`ID`, `username`, `Email`, `Password`, `DateTime`) VALUES ('$username', '$email', '$password', current_timestamp())";
mysqli_query($con,$query);
 if ($result){
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
			} 
		else 
		{
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
	else {
?>
<div class="container my-5">
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your DATA with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="Password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Re-enter Password</label>
    <input type="password" class="form-control" id="cPassword" name="cPassword"></div>
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
  <button type="Reset" class="btn btn-primary" name="Reset">Reset</button>
</form>
</div>
<?php 
	}
?>


<!--Signup form End-->
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>