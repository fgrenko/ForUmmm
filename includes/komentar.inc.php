<?php
session_start();
 if(isset($_POST['komentar-submit'])){
   require 'dbconnect.inc.php';
   $komentar = $_POST['komentar'];
   $username = $_SESSION['username'];
   $postId = $_POST['postId'];
   $category =$_POST['kategorija'];

   $value ='true';



   if (empty($komentar)) {
   header("Location: ../index.php?error=emptyfields");
   exit();
 }else{
   $sql = "INSERT INTO $category(post,komentar,postId,username) VALUES(?,?,?,?)";
   if($stmt=mysqli_prepare($conn,$sql)){
       mysqli_stmt_bind_param($stmt,"ssss",$komentar,$value,$postId,$username);
       if(mysqli_stmt_execute($stmt)){
         header("location: ../pitanje.php?category=".$category."&id=".$postId);
       }else{
         echo "Nešto je pošlo po zlu";
       }

   }
 }
 }
