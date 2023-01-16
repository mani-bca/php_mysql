<?php

require 'function.php';

require 'admin-login-funtion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="text-center">
    <form method="post">
      <h1>Admin Login</h1>
      <div class="form-group">
      <label for="adminname">Admin name</label><br>
      <input type="text" name="adminname" id="adminname" placeholder="Admin Name" required>
      </div>
      <div class="form-group">
      <label for="Password">Password</label><br>
      <input type="password" name="adminpassword" id="Password" placeholder="Password" required><br> <br>
      </div>
      <button type="submit" name="submit" value="Login" class="btn btn-primary">Login</button><br>
    </form>
    <br>
    <a href="admin_reg.php" class="btn btn-outline-info">Register</a>
  </div>
</body>

</html>