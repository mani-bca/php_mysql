<?php

require 'function.php';

$register = new adminRegister();

if (isset($_POST['submit'])) {
    $result = $register->registration($_POST['AdminName'], $_POST['Password']);
    if ($result == 1) {
        echo "<script> alert('Registration Successful'); </script>";
    } elseif ($result == 10) {
        echo "<script> alert('Email Has Already Taken'); </script>";
    } elseif ($result == 100) {
        echo "<script> alert('Password Does Not Match'); </script>";
    }
}

?>