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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log in form - IE Store </title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="icon" href="https://scontent.fmad12-2.fna.fbcdn.net/v/t39.30808-6/353396539_660621669425460_1882975670674465711_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=5f2048&_nc_ohc=LBI3HdLyjj4AX-gxkt6&_nc_ht=scontent.fmad12-2.fna&oh=00_AfCM9Gtmf7YPZi_70n62pULt432aQQD0miius6oKAoKG6w&oe=655237C3">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3 style="color:var(--main)"> LOG IN </h3>
      <p style="font-size:17px;margin-top:-5px"> Buy IE merchandising on-line </p>
   <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">register now</a></p>
   </form>
</div>

<div class="extension">
    <img src="https://cdn.cookielaw.org/logos/e8ca50c1-d340-4b7f-b6e8-46a90c64bb3d/4c7de17b-b462-4bc0-9dba-e6891e84c2c2/fea98b3c-e01d-4025-96f7-ab0b68c7f05d/LOGO-UNIVERSITY.png" alt="">
</div>

<footer style="display:flex; justify-content: center; gap:60px;">
        <p>© 2023 IE Store Inc. All Rights Reserved.</p>
        <p>Developed by JDS</p>
        <p> Designed on 08/11/2023 </p>
          
    </footer>
</body>
</html>