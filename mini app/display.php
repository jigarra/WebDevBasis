<html>
	<head>
		<title>Home page</title>
		<style>
			*{
				margin:0;
				padding:0;
			}
			
		</style>
		<link rel="stylesheet" href="bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css">
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.min.js"></script>
		
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
						<a class="nav-link" href="home_page.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link active active" href="display.php">DataBase</a>
					</li>
					
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<a href="register.php" class="btn btn-primary my-2 my-sm-0 mr-3">Sign Up</a>
					<a href="login.php" class="btn btn-success my-2 my-sm-0">Login</a>
				</form>
			</div>
		</nav>
<?php
	require 'connection.php';
	require 'link.php';
	echo "<h2 class='text-center mb-5'>All Data From <span class='text-primary'>MJ System </span>Database</h2>";
	
	$sql = "SELECT * FROM  registertb";
	$index=1;
	if($result = $mysqli->query($sql)){
		if($result->num_rows>0){
			echo "<div class='container w-75 '>";
		
	echo "<a href='register.php' class='btn btn-success float-right mb-3'>Add Data</a>";
	
			echo "<table class='table'>";
			echo "<thead class='thead-dark'>";
			echo "<tr>";
			echo "<th scope='col'>ID</th>";
			echo "<th >Name</th>";
			echo "<th >Email</th>";
			echo "<th>Password</th>";
			echo "<th class='text-center'>Action</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row=$result->fetch_array()){
				echo "<tr>";
				echo "<th scope='row'>".$row['id']."</th>";
				echo "<th>".$row['name']."</th>";
				echo "<th>".$row['email']."</th>";
				echo "<th>".$row['password']."</th>";
				?>
				<td class="text-center"><a href="update.php?ids=<?php echo $row['id'];?>" class="btn btn-primary">Update</a>
					<a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
				<?php
				echo "</tr>";
				$index++;
			}
			echo "</tbody>";
			echo "</table>";
			echo "</div>";
		}
		else{
			echo "<h3 class='text-center text-danger mt-5'>No record found in this database............</h3>";
			}
	}
?>	
		<script src="bootstrap.min.js></script>
		
		
	</body>
</html>