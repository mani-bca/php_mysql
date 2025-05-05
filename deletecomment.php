<?php

$connection = mysqli_connect('webapp-mysql-db.ctoye4myy2b2.us-east-1.rds.amazonaws.com', 'admin', 'ChangeMe123!');
$db = mysqli_select_db($connection, 'ecommerce');
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM usercomment WHERE id ='$id'";
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        echo '<script> alert("Data deleted");</script>';
        header('Location:Admin.php');
    } else {
        echo '<script> alert("Data not deleted");</script>';
    }
}

?>