<?php
session_start();
$_SESSION= array();
session_destroy();

$da = $_GET['da'];
if($da == 1){
  header("location: index.php?alert=da");
}else{
  header("location: index.php");
}

exit();
 ?>
