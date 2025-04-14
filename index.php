<?php
include('assets/database/connect.php');
include('assets/html/head.php');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвтоЗащита</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/header.css"> -->
    <link rel="shortcut icon" href="assets/images/components/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body style="background-color: #F6F6F6;">

    <div class="wrapper">
        <?php include('assets/html/header.php'); ?>
        <?php
        if (isset($_GET['page'])) {
            if ($_GET['page'] == 'card') {
                include('assets/html/card.php');
            } elseif ($_GET['page'] == 'profile') {
                include('assets/html/profile.php');
            } elseif ($_GET['page'] == 'register') {
                include('assets/html/register.php');
            } elseif ($_GET['page'] == 'login') {
                include('assets/html/login.php');
            } else {
                // include('assets/html/404.php');
            }
        } else {
            include('assets/html/home.php');
        }
        ?>
        <?php include("assets/html/footer.html") ?>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>