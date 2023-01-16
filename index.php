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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script type="text/javascript">
   if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
   }
   </script>
   <title>shopping cart</title>

</head>
<body>
   
<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
     }
}
?>



   <h1 class="heading">latest products</h1>

   

   <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
    if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>
      <form method="post" class="box">
         <div class="d-flex flex-row">
      <div class="card p-3 mb-2 bg-gradient-light text-dark" style="width: 18rem;">
         <img class="card-img-top" src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
         <div class="card-body">
         <h5 class="card-title"><?php echo $fetch_product['name']; ?></h5>
         <p class="card-text">Price: RS <?php echo $fetch_product['price']; ?>/-</p>
         <input type="hidden" min="1" name="product-quantity" value="1">
         <input type="hidden" name="product-image" value="<?php echo $fetch_product['image']; ?>">
         <input type="hidden" name="product-name" value="<?php echo $fetch_product['name']; ?>">
         <input type="hidden" name="product-price" value="<?php echo $fetch_product['price']; ?>">
            <?php $product_id = $fetch_product['id'];
                echo " <a href='product_detail.php?product= $product_id' class='btn btn-primary' >
                View more</a>"
            ?>
         <input type="submit" value="Add to cart" name="add-to-cart" class="btn btn-outline-info">
         </div>
         </div><br>
         
      </form>
            <?php
        }
    }
    ?>
</div>

</body>
</html>