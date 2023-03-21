<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'connection.php';

$insertdata = new DB_con();

if (isset($_POST['save'])) {
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
    $sql = $insertdata->insert($fname, $lname, $email, $password, $address, $country, $state, $city, $zipcode, $filename);

    if ($sql) {
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
?>