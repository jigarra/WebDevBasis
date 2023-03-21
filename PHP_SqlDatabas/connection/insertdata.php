<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require 'connection.php';

if (isset($_POST['save'])) {
    //print_r($_POST);print_r($_FILES); exit;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
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
    $sql = "INSERT INTO MyGuests(firstname, lastname, email, password,Address, Country, State, City, zip,image) VALUES ('$fname','$lname','$email','$password','$address','$country','$state','$city','$zipcode','$filename')";

    if (mysqli_query($conn, $sql)) {
        session_start();
        if (isset($_SESSION['name'])&&isset($_SESSION['id'])) {
        header("Location: ../myGuest.php");
        } else {
            header("Location: ../home.php");
        }
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	mysqli_close($conn);
}

// print_r($_POST);
// if (isset($_POST['edit'])) {
//     $id = $_POST['id'];
//     $firstname = $_POST['fname'];
//     $lastname = $_POST['lname'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $address = $_POST['address'];
//     $country = $_POST['country'];
//     $state = $_POST['state'];
//     $city = $_POST['city'];
//     $zipcode = $_POST['zipcode'];
    
//     $filename = $_FILES["choosefile"]["name"];
//     $tempname = $_FILES["choosefile"]["tmp_name"];
//     $folder = "../image/".$filename;
    
//     if (move_uploaded_file($tempname, $folder)) {
//         echo "Image uploaded successfully";
//     } else {
//         echo "Failed to upload image";
//     }
	
//     // $sql = "UPDATE `MyGuests` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`Address`='$address',`Country`='$country',`State`='$state',`City`='$city',`zip`='$zipcode',`image`='$filename', WHERE `id`='$id'";

//     if (mysqli_query($conn, $sql)) {
       
//         header("Location: ../home.php");
//     } else {
//         echo "Error: " . $sql . " " . mysqli_error($conn);
// 	 }
// 	mysqli_close($conn);
// }

?>