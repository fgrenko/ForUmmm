<?php
session_start();

if(isset($_POST['login-submit'])){
  require 'dbconnect.inc.php';

  $username = $_POST['username'];
  $password = $_POST['pass'];

  if (empty($username) || empty($password)) {
  header("Location: ../index.php?error=emptyfields");
  exit();
  }
  else {
    $sql = "SELECT id,username,password FROM users WHERE username = ?";
    if($stmt = mysqli_prepare($conn,$sql)){
      mysqli_stmt_bind_param($stmt,"s",$param_username);
      $param_username = $username;
      if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1){
          mysqli_stmt_bind_result($stmt,$id,$username,$hashedpassword);
          if(mysqli_stmt_fetch($stmt)){
            if(password_verify($password,$hashedpassword)){
              session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              header("location: ../index.php?login=true");
            }else{
              header("location: ../login.php?error=1");
            }
          }
        }else{
          header("location: ../login.php?error=2");
        }
      }else{
        echo "Nešto je pošlo po zlu.";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}
elseif (isset($_POST['adminlogin-submit'])) {
  require 'dbconnect.inc.php';
  $username =$_POST['username'];
  $password =$_POST['pass'];

  if (empty($username) || empty($password)) {
  header("Location: ../index.php?error=emptyfieldsadmin");
  exit();
  }
  else {
    $sql = "SELECT id,username,password FROM adminusers WHERE username = ?";
    if($stmt = mysqli_prepare($conn,$sql)){
      mysqli_stmt_bind_param($stmt,"s",$param_username);
      $param_username = $username;
      if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1){
          mysqli_stmt_bind_result($stmt,$id,$username,$hashedpassword);
          if(mysqli_stmt_fetch($stmt)){
            if($password == $hashedpassword){
              session_start();
              $_SESSION['adminloggedin'] = true;
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              header("location: ../index.php?login=true");
            }else{
              header("location: ../login.php?error=1");
            }
          }
        }else{
          header("location: ../login.php?error=2");
        }
      }else{
        echo "Nešto je pošlo po zlu.";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}
else {
  header("Location: ../index.php");
  exit();
}
