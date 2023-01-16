<?php

if (isset($_POST['update-cart'])) {
    $update_quantity = $_POST['cart-quantity'];
    $update_id = $_POST['cart-id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'");
    $message[] = 'cart quantity updated successfully!';
}
    
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
    header('location:cart_shopping.php');
}
      
if (isset($_GET['delete-all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'");
    header('location:cart_shopping.php');
}
?>

