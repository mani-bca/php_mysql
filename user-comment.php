<?php
    
if (isset($_GET['product'])) {
    $product_id = $_GET['product'];
    $select_product = mysqli_query($conn, "SELECT * FROM `product` WHERE id=$product_id") or die('query failed');
    if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            if (isset($_POST['usersubmit'])) {
                $userComment = $_POST['user-comment'];
                $username = $_POST['username'];
                $productName = $fetch_product['name'];

                if (empty($userComment)) {                
                    echo "please fill out";
                } else {
                    $insertComment = "INSERT INTO usercomment(productname, username, usercomment, productid) VALUES('$productName','$username', '$userComment', '$product_id')";
                    $upload = mysqli_query($conn, $insertComment);
                }
            }
        }
    }
}
?>