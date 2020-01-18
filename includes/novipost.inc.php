<?php
session_start();

if(isset($_POST['post-submit'])){
  require 'dbconnect.inc.php';

  $naslov = $_POST['naslov'];
  $post = $_POST['post'];
  $kategorija = $_POST['kategorija'];
  $username = $_SESSION['username'];

  if (empty($naslov) || empty($post)) {
  header("Location: ../index.php?error=emptyfields");
  exit();
  }
  else if($kategorija == "politika"){
    $sql = "INSERT INTO politika(naslov,post,username) VALUES(?,?,?)";
    if($stmt = mysqli_prepare($conn,$sql)){
      mysqli_stmt_bind_param($stmt,"sss",$naslov,$post,$username);
      if(mysqli_stmt_execute($stmt)){
        echo "Vaše pitanje je postavljeno";
        header("location: ../index.php?good");
      }else {
        echo "Nešto je pošlo po zlu";
      }
  }
}
}

else {
  header("Location: ../index.php?notgood");
  exit();
}
