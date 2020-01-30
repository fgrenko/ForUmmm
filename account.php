<?php
session_start(); ?>

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
     <a href="index.php" style="color:black;">   <h1 class="logo">ForUmmm</h1> </a>
     <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <nav>
          <ul>
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About</a></li>
               <li><a href="search.php">Search</a></li>
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
                       <a  href="#"><h1><?php echo $_SESSION['username']; ?></h1></a>
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
                     <div>
                       <form  action="includes/deaktiviraj.inc.php" method="post">
                         <button type="submit" name="deaktiviraj" style="font-size:20px;color:black;background-color:#fc0328"> <b> Deaktiviraj profil </b> <img src='assets/images/deakt.png' height="30" width="30"> </button>

                       </form>


                     </div>

                         <h2>Moja pitanja</h2>

                       <?php

                       require 'includes/dbconnect.inc.php';
                       $kontrola = 0;
                       $kategorije = array("automobili","filozofija","hrana_i_recepti","humor","kupnja","politika","prijedlozi_pohvale_kritike","prodaja","religija","skola","sport","svakodnevni_zivot");
                       echo "<table border='1'> <tr> <th>Pitanje </th> <th>Kategorija </th> </tr>";
                       $username = $_SESSION['username'];
                       for($i=0;$i<count($kategorije);$i++){
                          $query =mysqli_query($conn,"SELECT * FROM $kategorije[$i] WHERE username = '$username' AND komentar IS NULL");
                          if(mysqli_num_rows($query) > 0){
                            $kontrola = 1;
                            while($row = mysqli_fetch_array($query)){
                              echo "<tr> <td>";
                              echo "<a href='pitanje.php?category=".$kategorije[$i]."&id=".$row['id']."'>".$row['naslov']."</a></td>";
                              $ime = ucfirst($kategorije[$i]);
                              echo "<td>".$ime."</td>";
                              echo " </tr>";
                          }
                          }
                       }
                        echo "</table>";
                       if($kontrola !== 1){
                         echo "Niste postavili pitanje. Pitanje možete postaviti <a href='novipost.php'><b>OVDJE</b></a>";
                       }


                       ?>
                     </table>
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
    <div class="footer">
      © RWA Projekt, Srića, Grenko, Veršić
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </script>
</body>

</html>
