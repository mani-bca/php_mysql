<?php

require 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:log.php');
};

if (isset($_GET['logout'])) {
    unset($user_id);
    session_destroy();
    header('location:log.php');
};

if (isset($_POST['add-to-cart'])) {

    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];
    $product_image = $_POST['product-image'];
    $product_quantity = $_POST['product-quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE productname = '$product_name' AND user_id = '$user_id'");

    if (mysqli_num_rows($select_cart) > 0) {
        echo "<script>alert('Product already added to cart!')</script>";
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, productname, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')");
        echo "<script>alert('Product added to cart!')</script>";
    }

}

$select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
if (mysqli_num_rows($select_user) > 0) {
    $fetch_user = mysqli_fetch_assoc($select_user);
}

?>