<div style="position:absolute;">
	<?php include("link.php"); ?>
</div>

	<?php
	session_start();
	if(!isset($_SESSION['name'])){
		header("Location:login.php");
	}
?>
<html>
	<head>
	<style>
	
	.center{
		width:100%;
		height:80vh;
	}
	</style>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="home_page.php">MJ System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link " href="home_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="display.php">DataBase</a>
      </li>
	 
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="register.php" class="btn btn-primary my-2 my-sm-0 mr-3">Sign Up</a>
      <a href="login.php" class="btn btn-success my-2 my-sm-0">Login</a>
    </form>
  </div>
</nav>

	<div class=" center text-center d-flex align-items-center justify-content-center">
	<div class="shadow p-5 w-75">
		<h1 class="mb-3">Welcome <span class="text-primary ">"<?php echo  $_SESSION['name'];?>"</span></h1>
		<a href="logout.php" class="btn btn-danger">Log out</a>
		</div>
		</div>
	</body>
</html>