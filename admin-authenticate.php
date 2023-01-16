<?php

$admin = new Admin();

if (!empty($_SESSION['id'])) {
    $admin_id = $admin->selectUserById($_SESSION['id']);
} else {
    header('Location:Admin-login.php');
}
?>