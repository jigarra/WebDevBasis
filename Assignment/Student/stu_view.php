<?php 
include("connect.php");
if(isset($_GET['emp_id']))
{
 $emp_id=$_GET['emp_id'];
$d="delete from emp where emp_id=$emp_id";
mysqli_query($conn,$d);
}
 ?>
<div class="row">
		<h3 align="center">Student Info</h3>
</div>
<form action="#">
	<table class="table" border="2px" align="center">
<tr>
<thead>
	    	<th>Student_id</th>
			<th>Name</th>
			<th>City</th>		
	</thead>
	</tr>
<?php
	$q="select * from stu";
	$rs=mysqli_query($conn,$q);
while ($c=mysqli_fetch_array($rs))
	{
		?>
<tr>
	<tbody>
		<td><?php print $c['id']?></td>
		<td><?php print $c['name']?></td>
		<td><?php print $c['city']?></td>
	             
	</tbody>
</tr>
<?php
	}
?>
								
</table>
</form>
