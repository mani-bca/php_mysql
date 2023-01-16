<?php

include 'config.php';
require 'login-func.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>login</title>

</head>

<body>

   <?php
    if (isset($message)) {
        foreach ($message as $message) {
             echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>

   <div class="text-center">

      <form method="post">
         <div class="form-group">
            <h3>login now</h3>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required placeholder="Enter email" class="box">
         </div>
         <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required placeholder="Enter password" class="box"><br><br>
         </div>
         <input type="submit" name="submit" class="btn btn-primary" value="login now"><br>

      </form><br>
      <p>don't have an account? <a href="register.php" class="btn btn-link">Register now!</a></p>
   </div>

</body>

</html>