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
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>    
    <div >
        <nav>
        <ul>
            <li>
                <img src="logoIE.png" class="logoIE">
            </li>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">New Collection</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
          </ul>
        </nav>
      </div>

      <div class="ItemContaiener">
      
            <img class="itemImage" src="shirt.png" alt="">      
      
            <div class="itemCOntainerDescription">
            <h1 class="itemTitle"> Blue IE T-Shirt, Business School</h1>
            <h1 class="itemPrice">Price: 40$</h1>
        <h1 class="itemDescription">Introducing our latest fashion statement, the Azure Elegance Blue Shirt! This exquisite garment seamlessly blends style and comfort, making it a must-have addition to your wardrobe. Crafted from high-quality cotton, the shirt boasts a rich and vibrant shade of blue that effortlessly captures attention.</h1>
        </div> 
    </div>
    
    
    