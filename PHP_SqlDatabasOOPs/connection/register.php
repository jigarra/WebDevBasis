<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'connection.php';

$register = new DB_con();

if (isset($_POST['submit'])) {
    $fname = $_POST['fstname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password1'];

    $sqlmail = $register->fetcheRegister($email);

    if($sqlmail->num_rows===1) {
        $_SESSION['error'] = "error duplicate email";
        print_r($_SESSION['error']);
        header("Location: ../register.php");
        exit();
    } else {
        echo 'success';
        $sql = $register->register($fname, $lname, $email, $phone, $password);
        if ($sql){
            echo "success" ;
            header("Location: ../login.php");
            exit;
        } else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
         }
    }
} else {
    echo "Error ";
    header("Location: ../register.php?error=Incorect User name or password");
    exit;
}