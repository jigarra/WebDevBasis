<?php
include_once 'connect.php';
$today = date('Y-m-d');

$sql = "DELETE from pick_book where return_time < '$today'";
$db->query($sql);
?>