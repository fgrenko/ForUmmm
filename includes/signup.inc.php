<?php

if (isset($_POST['su-submit'])) {
  require 'dbconnect.inc.php';

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["pass"];
  $passwordRepeat = $_POST["pass-rpt"];

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
exit();
// provjera ako je ijedno polje prazno
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
header("Location: ../signup.php?error=invalidmailuid");
exit();
//provjera ako nije upisan dobar mail niti dobar username --> vraća te na signup.php bez da  sprema podatke koji su već unešeni
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
header("Location: ../signup.php?error=invalidmail&uid=".$username);
exit();
//provjerava je li upisan valjan email, ako nije vraca na signup i sprema username
}
else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
header("Location: ../signup.php?error=invaliduid&mail=".$email);
exit();
//provjerava je li upisan dobar username, ako nije vraca na signup i sprema email
}
elseif ($password !== $passwordRepeat) {
header("Location: ../signup.php?error=passwordcheck&mail=".$email."&uid=".$email);
exit();
//provjera jel provjera lozike uspjela, ako nije vraca na signup sa spremljenim podacima
}

else{

  $sql = "SELECT id FROM users WHERE username=?";
  if($stmt = mysqli_prepare($conn,$sql)){
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = trim($_POST['username']);
    if(mysqli_stmt_execute($stmt)){
      mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt) == 1){
        $username_err = "Ovaj username se vec korsti";
      }
    }else{
      echo "Nešto je pošlo po zlu.";
    }
  }
  mysqli_stmt_close($stmt);

  $sql = "INSERT INTO users(username,email,password) VALUES(?, ?, ?)";
  if($stmt = mysqli_prepare($conn,$sql)){
    mysqli_stmt_bind_param($stmt,"sss", $param_username,$param_email,$param_password);
    $param_username = $username;
    $param_email = $email;
    $param_password = password_hash($password,PASSWORD_DEFAULT);
    if(mysqli_stmt_execute($stmt)){
      header("location: login.php");
    }else{
      echo "Nešto je pošlo po zlu";
    }
  }
}
}

header("Location: ../signedup.php");
exit();
