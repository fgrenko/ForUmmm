<?php
session_start();
if(isset($_POST['deaktiviraj'])){
  require 'dbconnect.inc.php';
$username = $_SESSION['username'];
  $sql = "DELETE FROM users WHERE username = '$username'";
  $result = mysqli_query($conn,$sql);
if($result){
  header("location: ../logout.php?da=1");
}

} ?>
