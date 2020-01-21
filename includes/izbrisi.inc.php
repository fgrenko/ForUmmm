<?php
if (isset($_POST['izbrisi'])) {
  require 'dbconnect.inc.php';
  $id = $_POST['id'];
  $category = $_POST['category'];

  $sql = "DELETE FROM $category WHERE id=$id";
  mysqli_query($conn,$sql);
    if($query="DELETE FROM $category WHERE postId=$id"){
      mysqli_query($conn,$query);
    }


    header("Location: ../kategorija.php?category=".$category."&alert=ispisi");

    exit();


}
 ?>
