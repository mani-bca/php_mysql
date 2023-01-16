<?php 

$login = new Login();

if (isset($_POST['submit'])) {
    $result = $login->login($_POST['adminname'], $_POST['adminpassword']);
    if ($result == 1) {
        $_SESSION['login'] = true;
        $_SESSION['id'] = $login->idUser();
        header('Location: Admin.php');
    } elseif ($result == 10) {
        echo "<script> alert('Wrong Password'); </script>";
    } elseif ($result == 100) {
        echo "<script> alert('User Not Registered'); </script>";
    }
}
?>