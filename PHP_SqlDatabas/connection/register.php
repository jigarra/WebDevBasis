<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'connection.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fstname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password1'];

    $sql = "INSERT INTO register(firstname, lastname, email, phone, password) VALUES ('$fname','$lname','$email','$phone','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "success" ;
        header("Location: ../login.php");       
        exit;
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	mysqli_close($conn);
} else {
    echo "Error ";
    header("Location: ../register.php?error=Incorect User name or password");
    exit;
}