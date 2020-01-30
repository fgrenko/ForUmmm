<?php
error_reporting(0);
$category = $_GET['category'];
$display_category = ucfirst($category);
$display_category= str_replace('_',' ',$display_category);
$display_category=str_replace('zivot','život',$display_category );
$display_category=str_replace('Skola', 'Škola',$display_category);
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
                     $query = "SELECT naslov,id,username FROM $category WHERE  komentar IS NULL";

                     $result = mysqli_query($conn, $query);
                     echo "<TABLE border=1>";
	                     echo "<TR>";
	                     echo "<TD> Naziv teme </TD>";
	                     echo "<TD> Autor </TD>";
	                     echo "<TD> Broj komentara </TD>";
	                     echo "<TD> Vrijeme zadnje aktivnosti </TD>";
	                     echo "</TR>";
	                        $query2 = "SELECT date_time, postId FROM $category WHERE komentar IS NOT NULL GROUP BY postId";
	                        $result2 = mysqli_query($conn, $query2);
                     while ($row = $result->fetch_assoc()) {
                       $var = $row['id'];

	                        $query1 = "SELECT COUNT(*) FROM $category WHERE postId = $var";
	                        $result1 = mysqli_query($conn, $query1);
	                        $row1 = $result1->fetch_assoc();

	                        $row2 = $result2->fetch_assoc();

	                        echo "<TR>";
	                          echo "<TD>". "<a href='pitanje.php?category=".$category."&id=".$row['id']."'>".$row['naslov']."</a>" ."</TD>";
	                          echo "<TD>". $row['username'] ."</TD>";
	                          echo "<TD>" . $row1['COUNT(*)'] . "</TD>";
	                          echo "<TD>" . $row2['date_time'] . "</TD>";
	                        echo "</TR>";
	                     }
	                     echo "</TABLE>";


                     
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
