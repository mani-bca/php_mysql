<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a class="nav-link" href="cart_shopping.php">Cart<i class="fa fa-shopping-cart" style="font-size:20px"></i></a>
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
</body>
</html>