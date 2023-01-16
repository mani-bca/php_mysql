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
   <?php

   require 'config.php';
   require 'function.php';
   require 'admin-authenticate.php';
   $select = mysqli_query($conn, "SELECT * FROM usercomment");
   if (mysqli_num_rows($select) > 0) {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Admin.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item "><p class="nav-linktext-right"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $admin_id['AdminName']; ?></span></p></li>
         </ul>         
         </div>
         </nav>
   <div>
      <table class="table table-hover">
         <thead>
            <tr>
               <th scope="col">Product name</th>
               <th scope="col">User name</th>
               <th scope="col">User comment</th>
               <th></th>
               <th scope="col">Action</th>
            </tr>
         </thead>
         <?php
   } else {
        echo "There is no comments";
   }
   
   while ($row = mysqli_fetch_assoc($select)) { ?>
   <tbody>
            <tr>
               <td><?php echo $row['productname']; ?></td>
               <td><?php echo $row['username']; ?></td>
               <td><?php echo $row['usercomment']; ?></td>
               <td>
                  <form action="deletecomment.php" method="POST">
                     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <th scope="col"><input type="submit" name="delete" value="DELETE" id="delete" class="btn btn-danger"></th>
               </form>
               </td>
            </tr>
            </tbody>
                <?php

   }

    ?>
      </table>
   </div>
 
</body>

</html>