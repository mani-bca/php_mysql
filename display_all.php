<?php

require 'index-req.php';
require 'header.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
    if ( window.history.replaceState ){ 
     window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <title>Skin care</title>
</head>

<body>
    

<?php

$select_product = mysqli_query($conn, "SELECT * FROM `product` ORDER BY rand()") or die('query failed');
if (mysqli_num_rows($select_product) > 0) {
    while ($fetch_product = mysqli_fetch_assoc($select_product)) {
        ?>
        <form method="post" class="box" action="">
        <div class="d-flex flex-row">
        <div class="card" style="width: 19rem;">
           <img class="card-img-top" src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
           <div class="card-body">
           <h5 class="card-title"><?php echo $fetch_product['name']; ?></h5>
           <div class="card-text">Price: RS <?php echo $fetch_product['price']; ?>/-</div>
           <input type="hidden" min="1" max="15" name="product-quantity" value="1">
           <input type="hidden" name="product-image" value="<?php echo $fetch_product['image']; ?>">
           <input type="hidden" name="product-name" value="<?php echo $fetch_product['name']; ?>">
           <input type="hidden" name="product-price" value="<?php echo $fetch_product['price']; ?>">
           <?php $product_id = $fetch_product['id'];
                echo " <a href='product_detail.php?product= $product_id' class='btn btn-primary' >
            View more</a>"
                    ?>
           <input type="submit" value="Add to cart" name="add-to-cart" class="btn btn-outline-info">
           
                </div>
        </div>
        </form>
        <?php
    }
}
?>
     </div>


</body>

</html>