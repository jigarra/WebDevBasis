<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$r_id=$_POST['r_id'];
$q="update register set name='$name',email='$email',contact='$contact' where r_id='$r_id'";
mysqli_query($cn,$q);
print $q;
?>
