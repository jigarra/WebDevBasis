<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'connection.php';

$login = new DB_con();

if (isset($_POST['email']) && isset($_POST['password'])) {

print_r($_POST);
$uname = $_POST['email'];

$pass = $_POST['password'];

$sql = $login->login($uname, $pass);

if (mysqli_num_rows($sql)===1) {

    $row = mysqli_fetch_assoc($sql);

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