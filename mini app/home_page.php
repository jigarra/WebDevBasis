<div style="position:absolute;">
	<?php include("link.php"); ?>
</div>
<html>
	<head>
		<title>Home page</title>
		<style>
			*{
				margin:0;
				padding:0;
			}
			body {
background-image: url(bg.png);
background-size: cover;
background :float;
height: 100%;}
			.footer{
				position:absolute;
				bottom:-15px;
				width:100%;
				font-size:17px;
				font-weight:bold;
				background-color:#343a40;
				color:white;
			}
		</style>
		<link rel="stylesheet" href="bootstrap.min.css">
	</head>
	<body>
	<!--navbar -->

	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
			<a class="navbar-brand" href="home_page.php">MJ System</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link active" href="home_page.php">Home <span class="sr-only">(current)</span></a>
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
		
		<!--jumbotron-->
		<div class="container">
		<div class="jumbotron mt-5 shadow-lg bg-transparent !important">
			<h1 class="display-5 text-center text-danger">Welcome to MJ system </h1>
			<p class="lead text-center text-success">JIIGAR MALANI PRESENT</p>
			<hr class="my-4">
			</div>
				</div>
		
		<p class="footer text-center p-3">Copyright &copy; mjcreation-2021</p>
		
		<script src="bootstrap.min.js"></script>
		
	</body>
</html>