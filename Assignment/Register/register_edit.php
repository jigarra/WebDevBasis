<?php
include("connection.php");
$r_id=$_GET['r_id'];
$q="select * from register where r_id='$r_id'";
$rs=mysqli_query($cn,$q);
$c=mysqli_fetch_array($rs);
?>
<div id="fh5co-contact" class="fh5co-section-gray">
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
		<h3>register Edit</h3>
		</div>
		</div>
			<form action="redit.php"method="post">
			<input type="hidden" name="r_id" value="<?php print$c['r_id']?>">
				<div class="row animate-box">
					<div class="col-md-12">
						<div class="row">
<table style="width:100%">		
<tr>
	<td>Name:<input type="text" value="<?php print $c['name']?>" name="name" pattern="[a-zA-Z ]*$" required></td>
	</tr>
	<tr>
	<td>Email:<input type="text"value="<?php print $c['email']?>" name="email" required ></td>
	</tr>
	<tr>
<td>contact:<input type="text" value="<?php print $c['contact']?>" name="contact" pattern="[0-9]*$" required></td>
</tr>
<tr><td>&nbsp;</td></tr><tr>
<td><input type="submit" value="Submit" class="btn btn-primary"></td>
</tr>
</table>
</div></div></div>
	</form>
</div></div>
