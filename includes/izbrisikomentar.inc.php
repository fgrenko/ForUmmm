<?php
require 'dbconnect.inc.php';
$id = $_GET['id'];
$postId = $_GET['postId'];
$category = $_GET['category'];
echo $category. $id. $postId;

$sql = "DELETE FROM $category WHERE id = $id ";
mysqli_query($conn,$sql);

header("location: ../pitanje.php?category=".$category."&id=".$postId."&alert=da");
