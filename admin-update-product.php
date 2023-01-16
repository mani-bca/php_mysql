<?php
require 'function.php';

require 'admin-authenticate.php';
$id = $_GET['edit'];

if (isset($_POST['update-product'])) {
    
    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];
    $productDetails = $_POST['productdetails'];
    $productDescription = $_POST['productdescription'];
    $product_image = $_FILES['product-image']['name'];
    $product_image_tmp_name = $_FILES['product-image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;
    
    if (empty($product_name) || empty($product_price) || empty($product_image) || empty($productDetails) || empty($productDescription)) {
        $message[] = 'please fill out all!';
    } else {
        $update_data = "UPDATE product SET name='$product_name', price='$product_price', details='$productDetails', productdetail='$productDescription', image='$product_image'  WHERE id = '$id'";
        $upload = mysqli_query($conn, $update_data);
    
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location:products.php');
        } else {
                $message[] = 'please fill out all!';
        }
    }
};
function message()
{
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<span class="message">' . $message . '</span>';
        }
    }
}
?>