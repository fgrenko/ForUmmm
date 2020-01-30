<?php
  include("header.php");

  $error = $_GET['error'];



  if($error == 1){
    echo "<script>alert('Morate popuniti sva polja!') </script>";

  }
  if($error == 2){
    echo "<script> alert('E-mail i username koji ste unijeli nije ispravan. Username se mora isključivo sastojati od alfanumeričkih znakova i e-mail mora biti ispravan!') </script>";
  }
  if ($error == 3) {
      echo "<script> alert('E-mail koji ste unijeli nije ispravan. Unesite ispravnu e-mail adresu!') </script>";
  }
  if($error == 4){
      echo "<script> alert('Username koji ste unijeli nije ispravan. Username se mora sastojati od isključivo alfanumeričkih znakova!') </script>";
  }
  if($error == 5){
      echo "<script> alert('Lozinke se ne podudaraju!') </script>";
  }
?>

<!-- FORUM -->
    <div class="rect">
         <div class="high_rect">
              <div class="form_rect_hi">
                   <form class='sign_form' id="submit" action="includes/signup.inc.php" method="post">
                        <h1 class='form_title'>REGISTRACIJA</h1>
                   <div class="group">
                     <input class="input" type="text" name="username">
                     <span class="bar"></span>
                     <label class="label">Korisničko ime</label>
                   </div>

                   <div class="group">
                     <input class="input" type="text"  name="email">
                     <span class="bar"></span>
                     <label class="label">Email</label>
                   </div>

                   <div class="group">
                     <input class="input" type="password" name="pass">
                     <span class="bar"></span>
                     <label class="label">Lozinka</label>
                   </div>

                   <div class="group">
                     <input class="input" type="password" name="pass-rpt">
                     <span class="bar"></span>
                     <label class="label">Ponovi lozinku</label>
                   </div>

                   <button id="submit_button" class="submit_button" type="submit" name="su-submit">REGISTRIRAJ SE</button>

                  <script type="text/javascript">
                         var form = document.getElementById("submit");

                         document.getElementById("submit_button").addEventListener("click", function () {
                              form.submit();
                         });
                         console.log('gotovo');
                  </script>

                 </form>
              </div>
         </div>
         <div class="low_rect">
              <div class="form_rect_lo_signup">
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
