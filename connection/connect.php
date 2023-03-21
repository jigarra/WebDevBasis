<?php
ini_set('display_errors', 1);

$Host     = "localhost";
$Username = "root";
$Password = "";
$name = "librarymanagement";
//BD CONNECT
$conn = new mysqli($Host, $Username, $Password, $name);

if (!$conn) {
    echo "not con";
}

?>