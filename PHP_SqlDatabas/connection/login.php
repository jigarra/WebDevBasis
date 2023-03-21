<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'connection.php';
print_r($_POST);
if (isset($_POST['email']) && isset($_POST['password'])) {


$uname = $_POST['email'];

$pass = $_POST['password'];

$sql = "SELECT * FROM register WHERE email='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)===1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $uname && $row['password'] === $pass) {

        echo "Logged in!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['firstname'];
        $_SESSION['id'] = $row['id'];
        header("Location: ../index.php");
        exit();

    } else {
        echo "Incorect User name or password";
        header("Location: ./login.php?error=Incorect User name or password");
        exit();
    }
   
} else {
    echo "Incorect bahar User name or password";
    header("Location: ../login.php?error=Incorect User name or password");
    exit();

}


}
?>