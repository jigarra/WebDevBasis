<?php 
include("connection.php");
if(isset($_GET['r_id']))
{
	$r_id=$_GET['r_id'];
	$d="delete from register where r_id=$r_id";
	mysqli_query($cn,$d);
}?>
<div class="row">
		<h3 align="center">registerview View</h3>
</div>
<form action="#">
<table class="table" border="2px" align="center">
<tr>
	<thead>										
	<th>name</th>										
	<th>email</th>									
	<th>contact</th>									
	<th>option</th>
</thead>
</tr>							
	<?php
	$q="select * from register";
$rs=mysqli_query($cn,$q);
	while ($c=mysqli_fetch_array($rs))
{
	?>
	<tr><tbody>
<td><?php print $c['name']?></td>
<td><?php print $c['email']?></td>
<td><?php print $c['contact']?></td>
<td><a href="register_edit.php?r_id=<?php print $c['r_id'];?>">Edit/</a>
<a href="registerview.php?r_id=<?php print $c['r_id'];?>">Delete</a></td>
</tbody>
</tr>
<?php
	}
?>									
</table>							
</form>	
