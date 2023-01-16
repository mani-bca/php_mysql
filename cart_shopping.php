<?php

require 'index-req.php';
require 'cart-req.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">      
   if ( window.history.replaceState ) { 
    window.history.replaceState( null, null, window.location.href );
   }
   </script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Skincare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_all.php">Products</a>
      </li>
      <li class="nav-item">
      <p class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> <span><?php echo $fetch_user['name']; ?></span> </p>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');">logout</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search_product.php" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search-data">
      <button class="btn btn-outline-success my-2 my-sm-0" name="search-result" type="submit">Search</button>
    </form>
  </div>
</nav>

<h1>Shopping cart</h1>

<table class="table table-hover">
   
   <?php

      $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'");
      $grand_total = 0;
    if (mysqli_num_rows($cart_query) > 0) {

        echo "<thead>
        <th scope='col'>Image</th>
        <th scope='col'>Product Name</th>
        <th scope='col'>Price</th>
        <th scope='col'>Quantity</th>
        <th scope='col'>Total price</th>
        <th scope='col'>Action</th>
     </thead>
     <tbody>";
        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) {
            ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
         <td><?php echo $fetch_cart['productname']; ?></td>
         <td>RS<?php echo $fetch_cart['price']; ?>/-</td>
         <td>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
               <input type="hidden" name="cart-id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="number" min="1" max="15" name="cart-quantity" value="<?php echo $fetch_cart['quantity']; ?>">
               <input type="submit" name="update-cart" value="Update" class="btn btn-primary">
            </form>
         </td>
         <td>RS<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
         <td><a href="cart_shopping.php?remove=<?php echo $fetch_cart['id']; ?>" class="btn btn-danger" onclick="return confirm('remove item from cart?');">Remove</a></td>
      </tr>
      
            <?php
            $grand_total += $sub_total;
        }
    } else {
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
    }
    ?>

    <?php

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'");
    if (mysqli_num_rows($cart_query) > 0) {
   
        ?>

   <tr class="table-bottom">
      <td colspan="5">Subtotal: RS <?php echo $grand_total; ?>/-</td>
      <td><a href="cart_shopping.php?delete-all" onclick="return confirm('delete all from cart?');" class="btn btn-danger">Remove all</a></td>
      
   </tr>
   <tr>  
   <td><a href="checkout.php" class="btn btn-success">Checkout</a></td>
</tr>
            <?php
    }

    ?>
</tbody>
</table>

   <a href="index.php" class="btn btn-primary">Contine shopping</a>

</body>
</html>