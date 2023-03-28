<?php 
include ("connection.php");
?>
<div class="row">
<h3>register</h3>
</div>
<form action="code.php" method="post" >
<div class="row">
<table style="width:100%" >
<tr>
<td>Name:<input type="text" class="form-control" name="name" pattern="[a-zA-Z ]*$" required></td>
</tr>
<tr>
<td>Email:<input type="text" class="form-control" pattern="^[0-9 a-z A-Z]*\@(gmail|yahoo)\.(com|in)$" name="email" required ></td>
</tr>
<tr>
<td>Password:<input type="password" class="form-control" name="password"></td>
</tr>
<tr>
<td>Cpassword:<input type="cpassword" class="form-control" name="cpassword"></td>
</tr>
<tr>
<td>contact:<input type="text" class="form-control" name="contact" pattern="[0-9]*$" required></td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td><input type="submit" value="Add" ></td></tr>
</table>
</div>
</form>
      