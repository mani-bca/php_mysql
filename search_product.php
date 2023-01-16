<?php

require 'config.php';
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
    <title>Skin care</title>
</head>

<body>

<?php

if (isset($_GET['search-result'])) {
    $search_value = $_GET['search-data'];
    $select = "SELECT * FROM product WHERE name LIKE '%$search_value%'";
    $select_run = mysqli_query($conn, $select);
    $num_of_row = mysqli_num_rows($select_run);
    if ($num_of_row == 0) {
        echo '<h3>No products found. Please enter valid product Or select in the "Products". </h3>';
    }
    while ($row = mysqli_fetch_assoc($select_run)) {

        ?>
      <div class="card p-3 mb-2 bg-gradient-light text-dark" style="width: 20rem;">
                <img class="card-img-top" src='uploaded_img/<?php echo $row['image']; ?>' alt='....'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $row['name']; ?></h5>
                    <p class='card-text'><?php echo $row['details']; ?></p>
                    <h6 class="card-price">Rs<?php echo $row['price']; ?>/-</h6>
                    <?php $product_id = $row['id'];
                    echo " <a href='product_detail.php?product= $product_id' class='btn btn-primary'>
                    View more</a>";
                    echo " <a href='add_cart.php?add-to-cart=$product_id'class='btn btn-outline-info'>Add to cart</a>";
                    
                    ?>
                </div>
            </div>

        <?php

    }
} else {
    echo "No product";
}

?>

</body>

</html>