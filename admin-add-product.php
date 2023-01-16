<?php

if (isset($_POST['add-product'])) {
    $product_name = $_POST['product-name'];
    $product_price = $_POST['product-price'];
    $productDetails = $_POST['Productdetails'];
    $productDescription = $_POST['productdescription'];
    $product_image = $_FILES['product-image']['name'];
    $product_image_tmp_name = $_FILES['product-image']['tmp_name'];
    $product_image_folder = 'uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image || empty($productDetails) || empty($productDescription))) {
        $message[] = 'please fill out all';
    } else {
        $insert = "INSERT INTO product(name, price, details, productdetail, image) VALUES('$product_name','$product_price', '$productDetails','$productDescription', '$product_image')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            $message[] = 'new product added successfully';
            echo"<script>alert('New product added successfully') </script>";
        } else {
            $message[] = 'could not add the product';
        }
    }
};
    
if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM product WHERE id = $id");
        header('location:products.php');
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