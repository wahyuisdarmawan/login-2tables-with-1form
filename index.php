<?php
ob_start();
session_start();
ob_end_clean();
include "auth/koneksi.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook_4</title>
    
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/headers.css">
    <link rel="stylesheet" href="css/signin.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include('main/menu.php') ?>
    <?php
    if (isset($_GET['menu'])) {
        return "index.php";
    }elseif (isset($_GET['signin'])) {
        include "auth/signin.php";
    }elseif (isset($_GET['signup'])) {
        include "auth/signup.php";
    }elseif (isset($_GET['signout'])) {
        include "auth/signout.php";
    }elseif (isset($_GET['menu_admin'])) {
        include "admin/home.php";
    }elseif (isset($_GET['menu_user'])) {
        include "user/home.php";
    }
    ?>
    <?php include('main/footer.php') ?>
</body>
</html>