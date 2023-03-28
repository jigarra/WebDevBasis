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
		<h3 align="center">employee View</h3>
</div>
<form action="#">
	<table class="table" border="2px" align="center">
<tr>
<thead>
	    	<th>emplooyname</th>
			<th>designation</th>
			<th>salary</th>		
	</thead>
	</tr>
<?php
	$q="select * from emp";
	$rs=mysqli_query($conn,$q);
while ($c=mysqli_fetch_array($rs))
	{
		?>
<tr>
	<tbody>
		<td><?php print $c['Name']?></td>
		<td><?php print $c['Designation']?></td>
		<td><?php print $c['salary']?></td>
	             
	</tbody>
</tr>
<?php
	}
?>
								
</table>
</form>
