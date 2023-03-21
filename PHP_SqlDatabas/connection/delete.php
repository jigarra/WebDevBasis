<?php
require 'connection.php';
error_reporting(E_ALL);
ini_set("display_errors",1);

if(isset($_GET['id'])) {
    $id = $_GET['id'];

$sql = "DELETE FROM MyGuests WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  
  header("Location: ../myGuest.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>