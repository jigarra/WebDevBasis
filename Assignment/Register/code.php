<?php
include("connection.php");

$name=$_POST['name'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if ($_POST['password'] !== $_POST['cpassword']) 
{
 die('Password and Confirm password should match!');
}
$email=$_POST['email'];
$contact=$_POST['contact'];
$q="insert into register(name,password,cpassword,email,contact)values('$name','$password','$cpassword','$email','$contact')";mysqli_query($cn,$q);
print $q;
?>
