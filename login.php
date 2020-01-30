<?php
  include("header.php");

  $error = $_GET['error'];

  if($error == 1){
    echo "<script> alert('Lozinka koju ste unijeli nije ispravna!')</script>";
  }
  if($error == 2){
    echo "<script> alert('Ne postoji korisnik s ovim korisničkim imenom') </script>";
  }
?>

<!-- FORUM -->
    <div class="rect">
         <div class="high_rect">
              <div class="form_rect_hi">
                   <form class='sign_form' id="submit" action="includes/login.inc.php" method="post">
                        <h1 id='login_title' class='form_title'>PRIJAVA</h1>
                        <div class="admin_toggle_2">
                             <div class="admin_toggle_1">
                                  <a href="#" class="admin_toggle_button">
                                     <i class="flaticon-pencil-outline" onclick="admin_login()"></i></a>
                                     <script type="text/javascript">
                                          function admin_login(){
                                               if ($('#submit_button').attr('name') == 'login-submit') {
                                                    $('#submit_button').attr('name', 'adminlogin-submit');
                                                     $('#submit_button').html('PRIJAVI SE KAO ADMIN');
                                                     $('#login_title').html('PRIJAVI SE KAO ADMIN');
                                                     $('.form_rect_lo_login').css({'height': '180px'});



                                               } else {
                                                    $('#submit_button').attr('name', 'login-submit');
                                                    $('#submit_button').html('PRIJAVI SE');
                                                    $('#login_title').html('PRIJAVI SE');
                                                    $('.form_rect_lo_login').css({'height': '160px'});
                                               }
                                          }
                                     </script>

                             </div>
                        </div>
                   <div class="group">
                     <input class="input" id='username' type="text" name="username">
                     <span class="bar"></span>
                     <label class="label">Korisničko ime</label>
                   </div>

                   <div class="group">
                     <input class="input" id='password' type="password" name="pass">
                     <span class="bar"></span>
                     <label class="label">Lozinka</label>
                   </div>

                   <button id="submit_button" class="submit_button" type="submit" name="login-submit">PRIJAVI SE</button>

<!-- <h2>Admin Log in</h2>
<form action="includes/login.inc.php" method="post">
  Username: <input type="text" name="adminusername" value=""><br>
  Password: <input type="password" name="adminpassword" value=""><br>
  <input type="submit" name="adminlogin-submit" value="Submit">
</form> -->

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
              <div class="form_rect_lo_login">
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
