<?php
include ("connect.php");
?>
<html>
<body>
<center>
<div class="row">
	<h3>Employee Details</h3>
	</div>
<form action="emp_add.php" method="post" >
	<div class="row">
	 <table>
	   <tr>
		<td>Name:</td>
		<td><input type="text" name="emp_name" pattern="[a-zA-Z ]*$" required></td>
	   </tr>
	<tr>
	    <td>Designation:</td>
		<td><input type="text"  name="des" pattern="[a-zA-Z ]*$" required></td>
	</tr>
<tr>
	<td>salary:</td>
	<td><input type="text"  name="salary" pattern="[0-9]*$" required></td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
	<td><input type="submit" value="Add" ></td>
	<td><input type="reset" Value="Reset"</td>
	</tr>
	</table>
	</center>
	</div>
</form>
</body>
</html>
