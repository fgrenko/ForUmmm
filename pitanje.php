<?php
  include("header.php");

  $briskom = $_GET['alert'];
  if($briskom == 'da'){
    echo "<script> alert('Vaš komentar je izbrisan.') </script>";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- FORUM -->

    <div class="forum">


         <div class="f_middle">
              <div class="content_header">
                  <!-- questionable class name?? -->
                  <div class="current_page">
                       <a  href="#"><h1></h1></a>
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
                     error_reporting(0);
                     session_start();
                     require 'includes/dbconnect.inc.php';
                     $id = $_GET['id'];
                     $category = $_GET['category'];
                     $premjesti= $_GET['premjesti'];

                     if($premjesti == 1){
                       echo "Premjesti pitanje u kategoriju:";
                       echo "<form action='includes/premjesti.inc.php' method='post'>";
                       echo "<select name='premjestikateg'>";
                       echo "<option value='politika'>Politika</option>";
                       echo "<option value='sport'>Sport</option>";
                       echo "<option value='svakodnevni_zivot'>Svakodnevni život</option>";
                       echo "<option value='skola'>Škola</option>";
                       echo "<option value='automobili'>Automobili</option>";
                       echo "<option value='filozofija'>Filozofija</option>";
                       echo "<option value='hrana_i_recepti'>Hrana i Recepti</option>";
                       echo "<option value='humor'>Humor</option>";
                       echo "<option value='kupnja'>Kupnja</option>";
                       echo "<option value='prijedlozi_pohvale_kritike'>Prijedlozi,pohvale i kritike</option>";
                       echo "<option value='prodaja'>Prodaja</option>";
                       echo "<option value='religija'>Religija</option>";
                       echo "</select>          ";
                       echo "<input type='submit' name='premjesti-submit' value='Premjesti'>";
                         echo "<input type='hidden' name='id' value='".$id."'>";
                         echo "<input type='hidden' name='category' value=".$category.">";
                         echo "</form>";

                     }

                     $sql = "SELECT naslov,post,username,date_time FROM $category WHERE id =$id";
                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_array($result);
                     echo "<h1>".$row['naslov']."</h1>";
                     if ($_SESSION['adminloggedin']== true && $premjesti != 1) {
                       echo "<form action='includes/prem.inc.php' method='post'>";
                       echo "<input type='hidden' name='id' value='".$id."'>";
                       echo "<input type='hidden' name='category' value=".$category.">";
                       echo "<input type='submit' name='premjesti' value='Premjesti pitanje'></form>";
                       echo "<form action='includes/izbrisi.inc.php' method='post'>";
                       echo "<input type='hidden' name='id' value=".$id.">";
                       echo "<input type='hidden' name='category' value=".$category.">";
                       echo "<input type='submit' name='izbrisi' value='Izbrisi pitanje'></form>";
                     }

                     if($premjesti !== 1){
                     echo "<table><tr><td style='background-color: grey;font-weight:bold;'><div>".$row['post']."</div><br><br><div align=right>Posted by user: <i>".$row['username']." </i><em>,  ".$row['date_time']."</em> </div></td> </tr>";
                     $query="SELECT post,username,date_time,id,komentar,postId FROM $category WHERE postId=$id && komentar = 'true'";
                     $result = mysqli_query($conn,$query);

                     while($row = $result->fetch_assoc()){
                       echo "<tr><td style='background-color:grey;'>".$row['post']."<br><br> <div alight=right>Posted by user: <i>".$row['username']." </i><em>,  ".$row['date_time']."</em>  </div></td>";
                       if($row['username'] == $_SESSION['username']){
                         echo "<td> <a href='includes/izbrisikomentar.inc.php?category=".$category."&postId=".$row['postId']."&id=".$row['id']."'> <img src='assets/images/kanta.png' style='height:30px;width:30px'> </a> </td>";
                       }else if($_SESSION['adminloggedin']== true){
                          echo "<td> <a href='includes/izbrisikomentar.inc.php?category=".$category."&postId=".$row['postId']."&id=".$row['id']."'> <img src='assets/images/kanta.png' style='height:30px;width:30px'> </a> </td>";
                       }
                     }
                     echo "</table><hr>";

                     if($_SESSION['loggedin'] !== true){
                       echo "Prijavi se da bi mogao komentirati";

                     }else{
                       echo "<form action='includes/komentar.inc.php' method='post'>";
                       echo "<textarea name='komentar' rows='5' cols='80'></textarea> <br>";
                       echo "<input type='submit' name='komentar-submit' value='Komentiraj'>";
                       echo "<input type='hidden' name='postId' value=".$id.">";
                       echo "<input type='hidden' name='kategorija' value=".$category.">";
                       echo "</form>";

                     }
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
    <div class="footer">
      © RWA Projekt, Srića, Grenko, Veršić
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </script>
</body>

</html>
