<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require 'connection.php';
$update = new DB_con();

//print_r($_POST);
if (isset($_POST['id'])) {
    print_r($_POST);
    print_r($_FILES);
    $id = $_POST['id'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    
    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];
    $folder = "../image/".$filename;
    
    if (move_uploaded_file($tempname, $folder)) {
        echo "Image uploaded successfully";
    } else {
        echo "Failed to upload image";
    }
    $sql = $update->update($firstname, $lastname, $email, $password, $address, $country, $state, $city, $zipcode, $filename, $id);
    
    if ($sql) {
        echo "success";
        session_start();
        if (isset($_SESSION['name'])&&isset($_SESSION['id'])) {
            header("Location: ../myGuest.php");
        } else {
            header("Location: ../index.php");
        }
       
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	mysqli_close($conn);
} 
?>