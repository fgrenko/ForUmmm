<?php
session_start();
error_reporting(0);
$category = $_GET['category'];
$display_category = ucfirst($category);
$display_category= str_replace('_',' ',$display_category);
$display_category=str_replace('zivot','život',$display_category );
$display_category=str_replace('Skola', 'Škola',$display_category);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

    <title>ForUmmm</title>
</head>

<!-- HEADER -->

<body>
<header>
     <a href="index.php"  style="color:black;">   <h1 class="logo">ForUmmm</h1> </a>
     <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <nav>
          <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="#">Search</a></li>
               <?php
               if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                 echo "<li><a href='signup.php'>Sign Up</a></li>
                 <li><a href='login.php'>Log In</a></li>";
               }else {
                 $username = $_SESSION["username"];

                 echo "<li>Dobrodošli, ".$username;
                 echo "<li><a href='account.php'>Moj Profil</a> ";
                 echo "<li><a href='logout.php'>Log Out</a></li>";
               }



                ?>

          </ul>
     </nav>
     <label for="nav-toggle" class="nav-toggle-label">
          <span></span>
     </label>
</header>

<!-- FORUM -->

    <div class="forum">


         <div class="f_middle">
              <div class="content_header">
                  <!-- questionable class name?? -->
                  <div class="current_page">
                       <a  href="#"><h1><?php echo $display_category; ?></h1></a>
                       <!-- after entering any page, display that same page; e.g. ForUmmm > News > World > ..... -->
                       <!-- look up "dl" tag for html on google -->
                  </div>
                  <div class="search">
                       <a  href="#">Pretraga 🔍</a>
                       <!-- text-box appears from 'pretraga' to the left and 'Pretraga 🔍' changes into only 🔍  (&#x1F50D)-->
                  </div>
             </div>
              <div class="f_content">
                   <div class="main_content">
                     <?php
                     require 'includes/dbconnect.inc.php';
                     $alert = $_GET['alert'];

                     if($alert=='ispisi'){
                      echo"<script> alert('Pitanje je izbrisano')</script>";
                       $alert='false';
                     }else if($alert=='ispisi1'){
                       echo"<script> alert('Pitanje je premješteno')</script>";
                     }
                     $query = "SELECT naslov,id FROM $category";

                     $result = mysqli_query($conn, $query);
                     while ($row = $result->fetch_assoc()) {
                       echo "<a href='pitanje.php?category=".$category."&id=".$row['id']."'>".$row['naslov']."</a> <br>";

                     }
                      ?>
                       <div class="f_title">

                      </div>
                      <!-- forum layout starts here -->
                      <!-- if its okay w you  -->
                  </div>
                  <div class="side_menu">
                       <!-- just a suggestion (i saw it on bug.hr) -->
                  </div>
             </div>
         </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </script>
</body>

</html>
