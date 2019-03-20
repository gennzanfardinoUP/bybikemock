<?php
require "header.php";
 ?>

  <main>
     <h1>Signup</h1>
     <?php
     if (isset($_GET['error'])) {
       if ($GET['error'] ==  "emptyfields") {
         echo '<p class="signuperror">Fill in all fields!</p>';
       }
       else if ($_GET['error'] ==  "invaliduimail"){
     echo '<p class="signuperror"> Invaliud username and e-mail!</p>';
       }
       else if ($_GET['error'] ==  "invaliduid"){
      echo '<p class="signuperror"> Invaliud username !</p>';
       }
       else if ($_GET['error'] ==  "invaliduimail"){
     echo '<p class="signuperror"> Invaliude-mail!</p>';
       }
       else if ($_GET['error'] ==  "passwordCheck"){
      echo '<p class="signuperror"> Passwords do not match</p>';
       }
       else if ($_GET['error'] ==  "usertaken"){
     echo '<p class="signuperror"> Username is already taken!</p>';
       }
    }
   else if (isset($_GET['signup' ==  "success"])){
   echo '<p class="signupsuccess"> Signup succeful!</p>';

   }
      ?>
       <form action ="includes/signup.inc.php" method="post">
         <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="E-mail">
           <input type="password" name="pwd" placeholder="Password">
           <input type="password" name="pwd-repeat" placeholder="Repeat password">
           <button type="submit" name="signup-submit">SignUp</button>
       </form>
  </main>

  <?php

  require "footer.php";
   ?>
