<?php
require 'connection.php';
error_reporting(E_ALL);
ini_set("display_errors",1);

$delete = new DB_con();
if(isset($_GET['id'])) {
    $id = $_GET['id'];

$sql = $delete->delete($id);

if ($sql === TRUE) {
  
  header("Location: ../myGuest.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>