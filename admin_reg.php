<?php

require 'Admin-reg-function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Register</title>
</head>

<body>
  <div class="text-center">
  <form method="post" autocomplete="off">
    <div class="form-group">
      <h3>Admin Register</h3>
    <label for="AdminName">Name</label><br>
    <input type="text" name="AdminName" id="AdminName"><br>
    </div>
    
    <div class="form-group">
    <label for="password">Password</label><br>
    <input type="password" name="Password" id="password"><br>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Register</button>
  </form><br>
  <a href="Admin-login.php" class="btn btn-outline-info">Alredy register login</a>
  </div>
</body>

</html>