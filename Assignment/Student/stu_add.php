<?php
include("connect.php");

$id=$_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];

$q="insert into stu(id,name,city)values('$id','$name','$city')";
mysqli_query($conn,$q);
print $q;
?>
