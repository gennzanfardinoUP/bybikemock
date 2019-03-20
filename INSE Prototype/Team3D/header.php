<?php

session_start();
 ?>
 <!DOCTYPE>
 <HTML>
    <head>
      <meta charset= "utf-8">
      <meta name= "description"content="this is an example of a meta description.this will show i search descriptions.">
      <meta name=viewport content="width=device-width,initial-scale=1">
      <tittle></title>
       <!--- <link rel="<stylesheet" href="style.css">--->
      </head>
      <body>

        <header>
          <nav  class="nav-header-main">
            <a href="#">
             <!--- <img src="#" alt = "logo">-->
            </a>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Information</a></li>
              <li><a href="#">contact</a></li>
              <li><a href="#">Example</a></li>
            </ul>
          </nav>
            <div class="header-login">
              <?php
              if (isset($session['userId'])) {
                echo   ' <form  action="includes/logout.inc.php" method="post">
                   <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              else {

                echo ' <form  action="includes/login.inc.php" method="post">
                   <input type="text" name="mailuid" placeholder="Username/E-Mail..">
                    <input type="password" name="pwd" placeholder="Password..">
                    <button type="submit" name="login-submit">Login</button>
                 </form>
                 <a href="signup.php">Sign Up</a>';


              }

               ?>


            </div>
          </nav>

       </header>













































 <!---<!DOCTYPE>
 <HTML>
    <head>
      <meta charset= "utf-8">
      <meta name= "description"content="this is an example of a meta description.this will show i search descriptions.">
      <meta name=viewport content="width=device-width,initial-scale=1">
      <tittle></title>
       <link rel="<stylesheet" href="style.css">
      </head>
      <body>

        <header>
          <nav  class="nav-header-main">
            <a href="#">
             <img src="#" alt = "logo">
            </a>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Information</a></li>
              <li><a href="#">contact</a></li>
              <li><a href="#">Example</a></li>
            </ul>
          </nav>
            <div class="header-login">
              <?php
              if (isset($session['userId'])) {
                echo   ' <form  action="includes/logout.inc.php" method="post">
                   <button type="submit" name="logout-submit">Logout</button>
                </form>';
              }
              else {

                echo ' <form  action="includes/login.inc.php" method="post">
                   <input type="text" name="mailuid" placeholder="Username/E-Mail..">
                    <input type="password" name="pwd" placeholder="Password..">
                    <button type="submit" name="login-submit">Login</button>
                 </form>
                 <a href="signup.php">Sign Up</a>';


              }

               ?>


            </div>
          </nav>

       </header>

 --->
