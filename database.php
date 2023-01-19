<?php

$conn = new mysqli('localhost', 'root', 'Massword@123');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$query_datasade = "CREATE DATABASE ecommerce";
if ($conn->query($query_datasade) === true) {
    echo "Database created successfully </br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn = new mysqli('localhost', 'root', 'Massword@123', 'ecommerce');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Create admin table
$query_admin = "CREATE TABLE admindetails ( id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, AdminName VARCHAR(50) NOT NULL, Password VARCHAR(20) NOT NULL)";


if ($conn->query($query_admin) === true) {
      echo "Table admindetails created successfully";
} else {
      echo "Error creating table: " . $conn->error;
}

//Create product table
$query_product = "CREATE TABLE product (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,image VARCHAR(255), name VARCHAR(255), details VARCHAR(255), productdetail VARCHAR(255), price VARCHAR(20))";  

if ($conn->query($query_product) == true) {
    echo "Table product created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// create user table
$query_user = "CREATE TABLE User (CREATE TABLE `user_info` (`id` int(100) NOT NULL AUTO_INCREMENT, `name` varchar(100) NOT NULL, `email` varchar(100) NOT NULL, `password` varchar(100) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4";
  
if ($conn->query($query_user) === true) {
    echo "Table USER created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//create usercomments table

$queryUserComment = "CREATE TABLE usercomment (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, productname VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, usercomment VARCHAR(500) NOT NULL, productid INT(100) NOT NULL)";

if ($conn->query($queryUserComment) === true) {
    echo "Table cart created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//Create cart table
$query_cart = "CREATE TABLE `cart` ( `id` int(100) NOT NULL AUTO_INCREMENT, `user_id` int(100) NOT NULL, `name` varchar(100) NOT NULL, `price` varchar(100) NOT NULL, `image` varchar(100) NOT NULL, `quantity` int(100) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4";

if ($conn->query($query_cart) === true) {
    echo"Table cart created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>