<?php
include("connect.php");
$emp_name=$_POST['emp_name'];
$des=$_POST['des'];
$salary=$_POST['salary'];
$q="insert into emp (Name,Designation,salary)values('$emp_name','$des','$salary')";
mysqli_query($conn,$q);
print $q;
?>


		
