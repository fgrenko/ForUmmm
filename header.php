<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./assets/icons/free-chaos/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">


    <title>ForUmmm</title>


<!-- HEADER -->


   <header>
              <a href="index.php" style="color:black;">
                  <h1 class="logo">ForUmmm</h1> </a>
              <input type="checkbox" id="nav-toggle" class="nav-toggle">
              <nav>
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>

                      <?php
                 if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                   echo "<li><a href='signup.php'>Sign Up</a></li>
                          <li><a href='login.php'>Log In</a></li>";
                 } else {
                   $username = $_SESSION["username"];

                   echo "<li>Dobrodošli, ".$username;
                   echo "<li><a href='account.php'>Moj Profil</a> ";
                   echo "<li><a href='logout.php'>Log Out</a></li>";
                 }
                 ?>
                          <li class='margin-adjuster'><span class="search-box"><a href="#" class="search-btn">
                              <input type="text" class="search-text" placeholder="Pretraži" onblur="readjust_margin()" onmouseout="readjust_margin()" onmouseover="adjust_margin()">
                              <i class="flaticon-search" onmouseover="adjust_margin()" ></i></a></span></li>

                          <script type="text/javascript">
                              function adjust_margin(){
                                  $('.margin-adjuster').css({'margin-left': '-72px'});
                                  // console.log('Margin adjusted');
                              }
                              function readjust_margin(){
                                  if (!$('.search-text').is(':focus')) {
                                      $('.margin-adjuster').css({'margin-left': '0px'});
                                      // console.log('Margin readjusted');
                                  }
                              }
                          </script>
                  </ul>
              </nav>
              <label for="nav-toggle" class="nav-toggle-label">
                  <span></span>
              </label>
          </header>
</head>
