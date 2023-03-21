<?php
require 'connection.php';
error_reporting(E_ALL);
ini_set("display_errors",1);

// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     password VARCHAR(50),
//     Address VARCHAR(80),
//     Country VARCHAR(20),
//     State VARCHAR(20),
//     City VARCHAR(20),
//     zip VARCHAR(10),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// $sql = "CREATE TABLE register (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     phone VARCHAR(15),
//     password VARCHAR(15),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

if ($conn->query($sql) === TRUE) {
    echo "create sussecfull";
} else {
    echo "table created".$conn->error;
}
$conn->close();
