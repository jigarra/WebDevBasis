<?php 
print_r($_POST);
require_once './connect.php';

if(!empty($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM  Student_marks WHERE id = '$id' ";
    $conn->query($sql);
}
