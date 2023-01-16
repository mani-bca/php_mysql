<?php


require 'index-req.php';

require 'user-comment.php';

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
if (isset($_GET['product'])) {
    $product_id = $_GET['product'];
    $select_product = mysqli_query($conn, "SELECT * FROM `product` WHERE id=$product_id");
    if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
            ?>
        <form method="post" class="box">
           <img class="ml-auto p-2" src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
           <h5 class="ml-auto p-2"><?php echo $fetch_product['name']; ?></h5>
           <p class="ml-auto p-2"> <strong> Short discription: </strong><br><?php echo $fetch_product['details']; ?></p>
           <p class="ml-auto p-2"><strong>Price: </strong>RS <?php echo $fetch_product['price']; ?>/-</p>
           <input type="number" min="1" max="15" name="product-quantity" value="1"><br><br>
           <input type="hidden" name="product-image" value="<?php echo $fetch_product['image']; ?>">
           <input type="hidden" name="product-name" value="<?php echo $fetch_product['name']; ?>">
           <input type="hidden" name="product-price" value="<?php echo $fetch_product['price']; ?>">
           <input type="submit" value="Add to cart" name="add-to-cart" class="btn btn-success ml-auto p-2"><br><br>
           <h4 class="ml-auto p-2">Decription:</h4>
           <p class="ml-auto p-2"><?php echo $fetch_product['productdetail']; ?></p>
           
        </form>
        
            <?php
        }
    }
}

?>
<?php

$select = mysqli_query($conn, "SELECT * FROM usercomment WHERE productid = '$product_id'");

if (mysqli_num_rows($select) > 0) {

    ?>
<div class="product-display">
<a href="admin-logout.php"></a>
  <table class="table table-hover">
     <thead class="ml-auto p-2">
        <tr>
           <th scope="col">Name</th>
           <th scope="col">Comment</th>
        </tr>
     </thead>

     <?php
}
while ($row = mysqli_fetch_assoc($select)) { 
    ?>
        <tr>
           <td><?php echo $row['username']; ?></td>
           <td><?php echo $row['usercomment']; ?></td>
           
        </tr>
            <?php
}


?>
  </table>
</div>

</div>

    <form action="" method="POST">
    <div class="form-group">
        <h3>Comment</h3>
        <input type="hidden" name="username" value="<?php echo $fetch_user['name']; ?>">
        <textarea name="user-comment" id="" cols="30" rows="4"></textarea>
    </div>
        <input type="submit" value="Submit" name="usersubmit" class=" ml-auto p-2 btn btn-primary">
        <a href="checkout.php" class="ml-auto p-2 btn btn-info">Checkout</a>
    </form>

</body>

</html>