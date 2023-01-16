<?php
        
require 'config.php';

require 'function.php';

require 'admin-authenticate.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Panal</title>
</head>
<body>
    <h2 class="p-3 mb-2 bg-secondary text-white text-right">Admin name: <?php echo $admin_id['AdminName']; ?></h2>
    <a href="addproduct.php" class="btn btn-primary">Add Product</a>
    <a href="products.php" class="btn btn-primary">Products</a>
    <a href="admin-user-comment.php" class="btn btn-primary">User comment</a>
    <a href="admin-logout.php" class="btn btn-primary" onclick="return confirm('are your sure you want to logout?');">Logout</a>
</body>
</html>