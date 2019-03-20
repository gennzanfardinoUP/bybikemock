<?php
if (isset($_Post['login-submit'])) {

  require 'dbh.inc.php';

  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];


  if (empty($mailuid) || empty($mailuid) ) {
    header("Location:../index.php?error=emptyfields");
    exit();
  }
else{
  $sql = "SELECT * FROM users WHERE uidUsers = ?  OR emailUsers =  ?;";
  $stmt = mysqli_stmt_init($conn);
  if (mysql_stmt_prepare($stmt,sql)) {
    header("Location:../index.php?error =  sql");
    exit();
  }
  else{

    mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
    mysqli_stmt_execute($stmt);
    $myresult = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($myresult)) {
      $checkpwd = password_verify($password,$row['pwdYsers']);
      if ($pwdcheck == false) {
        header("Location:../index.php?wrongpassword");
        exit();
      }
      else if ($checkpwd == true ){
        session_start();
        $_Session['userId'] = $row['idUsers'];
        $_Session['userUid'] = $row['uidUsers'];
    header("Location:../index.php?LOG IN = Success");
    exit();

      }

    }
else {
  header("Location:../index.php?errror = nouser");
  exit();
}
  }

}

}
else{
  header("Location:../index.php");
  exit();

}
