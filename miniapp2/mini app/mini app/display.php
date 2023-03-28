<?php
	require 'connection.php';
	require 'link.php';
	echo "<h2 class='text-center mb-5'>All Data From <span class='text-primary'>mini app </span>Database</h2>";
	
	$sql = "SELECT * FROM  registertb";
	$index=1;
	if($result = $mysqli->query($sql)){
		if($result->num_rows>0){
			echo "<div class='container w-75 '>";
		
	echo "<a href='register.php' class='btn btn-success float-right mb-3'>Add Data</a>";
	
			echo "<table class='table shadow'>";
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