<?php

if (isset($_POST['premjesti-submit'])) {
  require 'dbconnect.inc.php';
  $id = $_POST['id'];
  $category = $_POST['category'];
  $odrediste = $_POST['premjestikateg'];

  $sql ="INSERT INTO $odrediste SELECT * FROM $category WHERE id=$id";
  mysqli_query($conn,$sql);
    if($query="INSERT INTO $odrediste SELECT * FROM $category WHERE postId=$id"){
      mysqli_query($conn,$query);
    }

    $sql = "DELETE FROM $category WHERE id=$id";
    mysqli_query($conn,$sql);
      if($query="DELETE FROM $category WHERE postId=$id"){
        mysqli_query($conn,$query);
      }


    header("Location: ../kategorija.php?category=".$category."&alert=ispisi1");

    exit();


}
 ?>
