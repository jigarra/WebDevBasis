<?php
ini_set('display_errors', '1');
include_once 'connect.php';

if(!empty($_POST['id'])) {
	$id = $_POST['id'];
	$sql = "DELETE FROM add_book WHERE id = '$id' ";
    $db->query($sql);
    echo "recorder delete";
}

?>