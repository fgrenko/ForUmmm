<?php
  include("header.php");
?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <!-- FORUM -->

     <div class="forum">


          <div class="f_middle">
               <div class="content_header">
                   <!-- questionable class name?? -->
                   <div class="current_page">
                        <a  href="#"><h1>Nova objava</h1></a>
                        <!-- after entering any page, display that same page; e.g. ForUmmm > News > World > ..... -->
                        <!-- look up "dl" tag for html on google -->
                   </div>
                   <div class="search">
                        <!-- text-box appears from 'pretraga' to the left and 'Pretraga 🔍' changes into only 🔍  (&#x1F50D)-->
                   </div>
              </div>
               <div class="f_content">

                    <div class="main_content">
                      <form  action="includes/novipost.inc.php" method="post">
                        Naslov: <br>
                        <textarea name="naslov" rows="1" cols="80"></textarea> <br>
                        Pitanje: <br>
                        <textarea name="post" rows="8" cols="80"></textarea> <br>
                        Kategorija:
                        <select  name="kategorija">
                          <option value="politika">Politika</option>
                          <option value="sport">Sport</option>
                          <option value="svakodnevni_zivot">Svakodnevni život</option>
                          <option value="skola">Škola</option>
                          <option value='automobili'>Automobili</option>
                          <option value="filozofija">Filozofija</option>
                          <option value="hrana_i_recepti">Hrana i Recepti</option>
                          <option value="humor">Humor</option>
                          <option value="kupnja">Kupnja</option>
                          <option value="prijedlozi_pohvale_kritike">Prijedlozi, pohvale, kritike</option>
                          <option value="prodaja">Prodaja</option>
                          <option value="religija">Religija</option>
                        </select>
                        <input type="submit" name="post-submit" value="Objavi">

                      </form>
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
