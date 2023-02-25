<?php

$connection = mysqli_connect('localhost', 'root', 'dbconnection');
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