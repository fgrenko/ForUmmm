<?php
  include("header.php");
  error_reporting(0);
  $alert = $_GET['alert'];
  if($alert == 'da'){
    echo "<script>alert('Vaš profil je deaktiviran') </script>";
  }
  $login = $_GET['login'];
  if($login =='true'){
    echo "<script>alert('Uspješno ste se prijavili!') </script>";
  }
  $signed = $_GET['signed'];
  if($signed == 'true'){
    echo "<script> alert('Uspješno ste napravili profil!') </script>";
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- FORUM -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="./assets/icons/free-chaos/font/flaticon.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">

        <title>ForUmmm</title>
    </head>

    <!-- HEADER -->

    <body>
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


                 echo "<li><a href='account.php'>Moj Profil</a> ";
                 echo "<li><a href='logout.php'>Log Out</a></li>";
                 echo "<li>Dobrodošli, ".$username;
               }
               ?>
                        <li class='margin-adjuster'><span class="search-box"><a href="#" class="search-btn">
                          <form  id="search" action="search.php" method="post">
                            <input type="text" name="search_text" placeholder="Pretraži">

                            <i class="flaticon-search" onmouseover="adjust_margin()" onmouseout="readjust_margin()" onclick="search_results()"></i></a></span></li>
                          </form>
                          <!--  <input type="text" class="search-text" placeholder="Pretraži" onblur="readjust_margin()" onmouseout="readjust_margin()" onmouseover="adjust_margin()"> -->


                        <script type="text/javascript">
                            function adjust_margin(){
                                $('.margin-adjuster').css({'margin-left': '-72px'});
                                console.log('Margin adjusted');
                            }
                            function readjust_margin(){
                                if (!$('.search-text').is(':focus')) {
                                    $('.margin-adjuster').css({'margin-left': '0px'});
                                    console.log('Margin readjusted');
                                }
                            }
                            function search_results(){
                              document.getElementById("search").submit();

                            }
                        </script>

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
                        <a href="#">ForUmmm</a>

                        <!-- after entering any page, display that same page; e.g. ForUmmm > News > World > ..... -->
                        <!-- look up "dl" tag for html on google -->
                    </div>
                </div>
                <div class="f_content">
                    <div class="main_content">
                        <div class="f_title">
                            <h1>Dobrodošli na ForUmmm</h1>
                        </div>
                        <div class="f_table">
                          <!--  <table>
                                <thead>
                                    <th>Naziv teme</th>
                                    <th>Autor</th>
                                    <th>Komentara</th>
                                    <th>Vrijeme zadnjeg komentara</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jedenje govana za dorucak</td>
                                        <td>Ranoranilac</td>
                                        <td>Previse</td>
                                        <td>00/00</td>
                                    </tr>
                                    <tr>
                                        <td>Jedenje govana za rucak</td>
                                        <td>malo manje Ranoranilac</td>
                                        <td>manje vise previse</td>
                                        <td>00/00</td>
                                    </tr>
                                    <tr>
                                        <td>Jedenje govana za uzinu</td>
                                        <td>Tamanac</td>
                                        <td>Taman</td>
                                        <td>00/00</td>
                                    </tr>
                                    <tr>
                                        <td>Jedenje govana za veceru</td>
                                        <td>Kasnokasnilac</td>
                                        <td>Malo</td>
                                        <td>00/00</td>
                                    </tr>

                                </tbody>
                            </table>-->
                        </div>
                      <?php
                              if(isset($_SESSION["loggedin"])){
                              echo "<a href='novipost.php'>NOVA OBJAVA</a>";
                          }
                          ?>
                          <TABLE border=1>
                            <TR>
                                <Th>
                                    Naziv kategorije
                                </Th>
                                <Th>
                                    Opis kategorije
                                </Th>
                                <Th>
                                    Broj pitanja
                                </Th>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=prijedlozi_pohvale_kritike" class="naslovi" >Prijedlozi, pohvale i kritike</a></TD>
                                <TD>U slučaju da Imate kakvih primjedbi ili dapače, phvali, slobodno ih izrazite ovdje</TD>
                                <TD> <?php
                                    require 'includes/dbconnect.inc.php';
                                    $query = "SELECT COUNT(*) FROM prijedlozi_pohvale_kritike WHERE komentar IS NULL";
                                    $result = mysqli_query($conn, $query);
                                    $row = $result->fetch_assoc();
                                    echo $row['COUNT(*)'];
                                ?> </TD>
                                <!--sugavo rjesenje za broj pitanja u kategoriji
                                    zahtjeva kopiranje masu pa ne izgleda bas lijepo
                                    mislim da cemo izbaciti to skroz
                                -->
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=svakodnevni_zivot" class="naslovi" >Svakodnevni život</a></TD>
                                <TD>Vaši problemi, pitanja, stvari na koje se ponosite...</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=skola" class="naslovi" >Škola</a></TD>
                                <TD>Dvoumite se između više izbora? Pronađite odgovor ovdje</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=sport" class="naslovi">Sport</a></TD>
                                <TD>Od nogometa do odbojke</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=automobili" class="naslovi" >Automobili</a></TD>
                                <TD>Mijenjate li auspuh ili se nalazite sa drugim ljubiteljima auta?</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=politika" class="naslovi">Politika</a></TD>
                                <TD>Mjesto za mirno debatiranje</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=filozofija" class="naslovi" >Filozofija</a></TD>
                                <TD>Dnevna doza razmišljanja</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=religija" class="naslovi" >Religija</a></TD>
                                <TD>Događanja u najbližoj crkvi/đžamiji/...</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=kupnja" class="naslovi" >Kupnja</a></TD>
                                <TD>Tražite novu stolicu?</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=prodaja" class="naslovi" >Prodaja</a></TD>
                                <TD>Ne treba Vam više stolica?</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=hrana_i_recepti" class="naslovi" >Hrana i Recepti</a></TD>
                                <TD>Za ogladniti</TD>
                            </TR>
                            <TR>
                                <TD><a href="kategorija.php?category=humor" class="naslovi" >Humor</a></TD>
                                <TD>Dnevna doza smijeha</TD>
                            </TR>
                        </TABLE>
                    </div>
                    <div class="side_content">

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
          © RWA Projekt, Srića, Grenko, Veršić
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </body>

    </html>
