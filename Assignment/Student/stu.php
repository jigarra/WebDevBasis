<?php 
include ("connect.php");
?>
	<center>
	<div class="row">
		<h3>student</h3>
		</div>
		<form action="stu_add.php" method="post" >
		<div class="row">
	<table style="width:100%" >
	<tr>
		<td>roll number:</td>
		<td><input type="text" name="id" pattern="[0-9]*$"  required></td>
	</tr>
	<tr>
		<td>name:</td>
		<td><input type="text"  name="name" pattern="[a-zA-Z ]*$" required></td>
	</tr>
	<tr>
             <td>city:</td>
			 <td><input type="text"  name="city" pattern="[a-zA-Z ]*$" required></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
	<td><input type="submit" value="Add" ></td>
	</tr>
</table>
</center>
</div>	
	</form>
