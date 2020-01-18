<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script type="text/javascript">
    function signup(){
      window.location.replace("signup.php");
    }
    function home(){
      window.location.replace("index.php");
    }
    function politika(){
      window.location.replace("kategorija.php?category=politika");
    }
    function sport(){
        window.location.replace("kategorija.php?category=sport");
    }
    function svakodnevni_zivot(){
      window.location.replace("kategorija.php?category=svakodnevni_zivot");
    }
    function skola(){
      window.location.replace("kategorija.php?category=skola");
    }
    function login(){
      window.location.replace("login.php");
    }

    </script>

    <title>ForUmmm</title>
</head>

<!-- HEADER -->

<body>
<header>
     <a href="#" onclick="home();" style="color:black;">   <h1 class="logo">ForUmmm</h1> </a>
     <input type="checkbox" id="nav-toggle" class="nav-toggle">
     <nav>
          <ul>
               <li><a href="#" onclick="home();">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Search</a></li>

               <?php
               if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                 echo "<li><a href='#' onclick='signup();'>Sign Up</a></li>
                 <li><a href='#' onclick='login();'>Log In</a></li>";
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
                       <a  href="#">ForUmmm</a>
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
                       <div class="f_title">
                            <h1>Dobrodošli na ForUmmm</h1>
                              <?php
                            if(isset($_SESSION["loggedin"])){
                              echo "<a href='novipost.php'>NOVA OBJAVA</a>";
                            } ?>
                            <h2>Kategorije:</h2>
                            <ul>
                              <li><a href="#" class="naslovi" onclick="politika();">Politika</a></li>
                              <li><a href="#" class="naslovi" onclick="sport()">Sport</a></li>
                              <li><a href="#" class="naslovi" onclick="svakodnevni_zivot();">Svakodnevni život</a></li>
                              <li><a href="#" class="naslovi" onclick="skola();">Škola</a></li>

                            </ul>
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
