<?php

require 'config.php';

require 'admin-add-product.php';

require 'function.php';

require 'admin-authenticate.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <script>
      function preview() {
   thumb.src=URL.createObjectURL(event.target.files[0]);
}
   </script>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

   <?php

    message();

    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Admin.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item "><p class="nav-linktext-right"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $admin_id['AdminName']; ?></span></p></li>
         </ul>         
         </div>
         </nav>
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="text-center">
         <h3>Add a new product</h3>
         <div class="form-group">
         <label for="productname">Product Name</label><br>
            <input type="text" placeholder="Enter product name" name="product-name" id="productname" required>
            </div>
            <div class="form-group">
            <label for="product_price">Product Price</label><br>
            <input type="number" placeholder="Enter product price" name="product-price" id="product_price" required>
         </div>
         <div class="form-group">
            <label for="Productdetails">Product Details</label><br>
            <input type="text" name="Productdetails" placeholder="Enter Product Details" id="Productdetails" required>
         </div>
         <div class="form-group">
            <label for="productdescription">Product Description</label><br>
            <textarea name="productdescription" id="productdescription" placeholder="Enter Product Description" cols="30" rows="4" required></textarea>
         </div>
         <div class="form-group">
            <img id="thumb" src="" alt="">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product-image" onchange="preview()" required>
         </div>
            <input type="submit" class="btn btn-success" name="add-product" value="Add product"><br><br>
         </form>

         
   

</body>

</html>