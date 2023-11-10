<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <div class="content">
         <img src="https://icons.veryicon.com/png/o/transport/traffic-icon/construction-5.png" alt="" style="height:200px;width:200px">
            <h3>Hi, <span> admin </span></h3>
            <h1>welcome <span> <?php echo $_SESSION['admin_name'] ?> </span></h1>
            <p> This page is still in development</p>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn" onclick="alert('You have been logged out')">log out</a>

    </div>

</body>
</html>