<?php

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "librarymanagement";
//BD CONNECT
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed:" . $db->connect_error);
}
require_once("../Connect/refreshNewbook.php");
?>