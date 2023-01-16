<?php

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
 
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
    if (mysqli_num_rows($select) > 0) {
        echo"<script>alert('user already exist! Please login')</script>";
    } else {
        if ($pass == $cpass) {
            mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
            echo"<script>alert('Registered successfully! Please login')</script>";
        } else {
            echo"<script>alert('Pasword doesnot match')</script>";
        }
    }
 
}
?>