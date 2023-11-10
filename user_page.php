<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="wrapper"> 
     <div class="container">

            <div class="content">
                <h3>Hi, <span> user </span></h3>
                <h1>welcome <span> <?php echo $_SESSION['user_name'] ?> </span></h1>
                <p> What do you want to buy?</p>
                <a href="register_form.php" class="btn">register</a>
                <a href="logout.php" class="btn" onclick="alert('You have been logged out!')">log out</a>
            </div>
            <img src="https://cdn.cookielaw.org/logos/e8ca50c1-d340-4b7f-b6e8-46a90c64bb3d/4c7de17b-b462-4bc0-9dba-e6891e84c2c2/fea98b3c-e01d-4025-96f7-ab0b68c7f05d/LOGO-UNIVERSITY.png" alt="">
        </div>

        <div class="cards">

            <div class="card1">
                <img src="https://store.ie.edu/wp-content/uploads/2020/05/gatscreatoriebs19-navy-t-shirt-front.jpg" alt="">
                <h5>IE T-shirt</h5>
                <p>Price: 40$</p>
            </div>

            <div class="card2">
                <img src="https://store.ie.edu/wp-content/uploads/2023/01/GARSOFTSWOMIEU22N_01.jpg" alt="">
                <h5>IE Women's Jacket</h5>
                <p>Price: 120$</p>
            </div>

            <div class="card3">
                <img src="https://store.ie.edu/wp-content/uploads/2020/05/gastkidtshibsmm18-navy-t-shirt-front-800x893.jpg" alt="">
                <h5>IE Business School Kids T-Shirt</h5>
                <p>Price: 28$</p>
            </div>

            <div class="card4">
                <img src="https://store.ie.edu/wp-content/uploads/2023/03/87A4902-600x670.jpg" alt="">
                <h5>Ugly Ass T-shirt</h5>
                <p>Price: 40$</p>
            </div>

            <div class="card5">
                <img src="https://store.ie.edu/wp-content/uploads/2020/05/MERCOOLBOTTUNIV19-2.jpg" alt="">
                <h5>IE Cool Bottle</h5>
                <p>Price: 24$</p>
            </div>


            <div class="card6">
            <a href="worm.php"> <img src="https://store.ie.edu/wp-content/uploads/2022/11/GARSWCROPSTIEU22N_C727_001.jpg" alt=""></a> 
                <h5>IEU Sweatshirt</h5>
                <p>Price: 57$</p>
            </div>




         </div>
     </div>
    
</body>
</html>