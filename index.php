<?php include "html/db.php"; ?>

<html manifest="cache.appcache">

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Homepage</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/body.css" type="text/css">
  <link rel="stylesheet" href="css/footeri.css" type="text/css">
  <link rel="stylesheet" href="css/dropdown.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
  <script src="js/rregullat.js"></script>

  <script> 
    var appCache = window.applicationCache;
    appCache.update(); //provon te bej update cache te userit dhe ndron statusin e aplication cache ne 'UPDATEREADY'
    if(appCache.status == window.applicationCache.UPDATEREADY) {
      appCache.swapCache(); //ndrron cache te vjeter me te rejen.
    }
  </script>

  <style>
    #tabela {
        width: 100%;
        
        height: 380px;
        display: inline-block;
    }

    #tabela td {
        vertical-align: top;
        
        width: 25%;

    }


    /* animacioni fade */
    .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1s;
        animation-name: fade;
        animation-duration: 1s;
        padding-top: 30px;
    }

    @-webkit-keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    @keyframes fade {
        from {
            opacity: .4
        }

        to {
            opacity: 1
        }
    }

    
    .prev2,
    .next2 {
        
        cursor: pointer;
        position: absolute;
        width: auto;
        padding: 6.75px 12px;
        margin-top: 10px;
       
        color: white;
        border: 1px solid #fff;
        font-weight: bold;
        font-size: 10px;
        transition: 0.5s ease;
        border-radius: 100%;
        background-color: rgb(250, 25, 25);
    }

    /* pozicionimi i butonit 'next' */
    .next2 {
        right: 30px;
    }
    .prev2{
        right: 75px;
    }

    /* ne hover buttoni bëhet black*/
    .prev2:hover,
    .next2:hover {
        background-color: rgb(224, 64, 64);
    }

    .part1 {
        display: inline-block;
        padding-top: 45px;
    }
</style>

<script>
  var partIndex = 1;


  function plusPart(n) {
      showParts(partIndex += n);
  }



  function showParts(n) {
      var i;
      var parts = document.getElementsByClassName("part1");
      if (n > parts.length) { partIndex = 1 }
      if (n < 1) { partIndex = parts.length }
      for (i = 0; i < parts.length; i++) {
          parts[i].style.display = "none";
      }

      parts[partIndex - 1].style.display = "block";

  }


  showParts(partIndex);

</script> 

</head>

<body>

  <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
  <div class="wrapper">
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
        <a href="index.php"><img src=images/jlml.png  width="200px" height="50px"/></a>
        </div>
        <nav>
          <ul>
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="html/Sherbimet.php">SHERBIMET</a></li>
            <li><a href="html/Kontakti.php">REZERVO</a></li>
            <li><a href="html/portfolio.php">OFERTA</a></li>
            <li><a href="html/gallery.php">GALLERY</a></li>
            <li><a href="html/login/login.php">LOGIN</a></li>
              <li><a href="#">MORE</a>
                  <ul>
                      <li><a href="html/sendmail.php">SEND EMAIL</a></li>
                      <li><a href="html/game.php">GAME</a></li>
                  </ul>
              </li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>
    <div class="wrapper col3">
      <table id="tabela">
        <div>
            <a class="prev2" onclick="plusPart(-1)">&#10094;</a>
            <a class="next2" onclick="plusPart(1)">&#10095;</a>
        </div>
        <tr>
            <td colspan="4">
                <div class="part1 fade">
                    <div style="float: left;display: flex;margin-left: 35px;">
                        <div>
                            <img src="images/6.jpg" width="210px" height="370px">
                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/2.jpg" width="210px" height="370px">

                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/3.jpg" width="210px" height="370px">
                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/5.jpg" width="210px" height="370px">

                        </div>
                    </div>
                </div>
                
                <div class="part1 fade">
                    <div style="float: left;display: flex;margin-left: 35px;">
                        <div>
                            <img src="images/f8.jpg" width="210px" height="370px">
                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/f5.jpg" width="210px" height="370px">
                            <br>
                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/f1.jpg" width="210px" height="370px">
                        </div>

                        <div style="margin-left: 20px;">
                            <img src="images/f12.jpg" width="210px" height="370px">

                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

      <div id="container" class="clear">
        <!-- main content -->
        <div id="homepage">
          <!-- services area -->
          <section id="services" class="clear">
            <!-- article 1 -->
            <article class="one_third">
              <h2>Udhëtime në Evropë</h2>

              <p>

                Udhetime Turistike, Bileta, Pushime ne Plazh - JOLULI Travel.
                Oferta Turistike, Udhetime, Pushime, Plazh, Bileta, Hotele
                ne qytetet me te bukura dhe vizituara në Evropë
              </p>

            </article>

            <article class="one_third">
              <h2>Udhëtime me Autobus</h2>
              <abbr title="Image not available"><img src="images/bus.jpg" alt="Image not available"></abbr>
              <p>Udhëtime me kosto të ulët me autobus ✓
                Trego biletën direkt në telefonin tënd ✓ Wi-Fi dhe priza në bord ✓
                Rezervo tani! </p>

            </article>
            <!-- article 2 -->
            <article class="one_third">
              <h2>Udhëtime me Anije</h2>
              <img src="images/ship.jpg" alt="">
              <p> Një aventurë e paharrueshme ! Shfrytezoni nga ofertat tona që të siguroni udhëtimin tuaj me anije
                dhe vizitoni vendet e juaja te preferuara.
              </p>

            </article>
            <!-- article 3 -->
            <article class="one_third lastbox">
              <h2>Udhëtime me Aeroplan</h2>
              <img src="images/plane.jpg" alt="">
              <p> Për një udhëtim të shpejt dhe komod,për ju dhe familjarët apo miqtë tuaj,
                ofertat këtë vit janë të jshtzakonshme!
                .</p>

            </article>

          </section>
          <span class="fadingline"> </span>
          <!-- / services area -->

          <!-- One Quarter -->
          <section id="latest" class="last clear">
            <article class="one_quarter">
              <figcaption>
                <h2>Qytetet më të kërkuara</h2>
                <p>Nga 46 qytetet evropiane të analizuara, nëntë të tjerë bëjnë top-listën 10,
                  kryesisht të vendosur në Evropën Lindore. Top 10 destinacione të përballueshme
                  evropiane u përzgjodhën në bazë të kostos mesatare të një fundjave në çdo qytet.</p>

              </figcaption>
            </article>
            <article class="one_quarter">
              <figure><img src="images/dubai.jpg" width="210" height="140" alt="">
                <figcaption>

                  <p>Udhetim turistik në Dubai per nderrimin e viteve. Viti i Ri në Dubai
                    përfshin udhëtime nëpër qendrat moderne më të rëndësishme. Dubai
                    është vecanërisht e njohur për eventet e saj kulturore, kafenete dhe modernitetin e saj..</p>
                  <footer class="more"><a href="html/dubai.php">Dubai Cmimet &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
            <article class="one_quarter">
              <figure><img src="images/barcelona.jpg" width="210" height="140" alt="">
                <figcaption>


                  <p>
                    Barcelona është kryeqyteti dhe qyteti më i populluar i Katalonisë dhe qyteti i dytë më i madh në
                    Spanjë.
                    Barcelona është sot një nga qendrat ekonomike, tregëtare, turistike dhe kulturore kryesore të botës!
                    Rezervoni Hotel ne Barcelone tani.. </p>
                  <footer class="more"><a href="html/Barcelona.php">Barcelona Cmimet &raquo;</a></footer>

                </figcaption>
              </figure>
            </article>
            <article class="one_quarter lastbox">
              <figure><img src="images/paris.jpg" width="210" height="140" alt="">
                <figcaption>


                  <p>Parisi është kryeqyteti i shtetit të Francës dhe krahinës së Île-de-France (ishulli i Francës) dhe
                    qyteti më i madh i Francës.
                    Pjesa më e madhe e Parisit bashkëkohor është rezultat i remodeling të madh urban të mesit të
                    shekullit të 19-të! Rezervoni Hotel ne Paris tani.. </p>
                  <footer class="more"><a href="html/Paris.php">Paris Cmimet &raquo;</a></footer>

                </figcaption>
              </figure>
            </article>
          </section>
          <!-- / One Quarter -->

        </div>
        <div class="icons">
          <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
          <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
          <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
          <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
        </div>
        <!-- / content body -->
      </div>

    </div>
      <footer>
          <div class="footer-main">
              <div class="footer-inner">
                  <div class="footer-left">
                      <div class="footer-box">

                          <h6>ABOUT US</h6>
                          <img  src="images/blonde.jpg" width="215px" height="90px" />


                          <p> JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                              më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                              dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
                          <a style="float: left" href="html/Sherbimet.php">Read more &raquo</a>
                      </div>
                  </div>
                  <div class="footer-left">
                      <div class="footer-box">
                          <h6>LINK BLOCK</h6>
                          <ul>
                              <li style="border-bottom: 1px solid #919090"><a href="https://aria-travel.com/"
                                                                              target="_blank">&raquo
                                      AriaTravelAlbania</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="https://travel.com/"
                                                                              target="_blank">&raquo
                                      Travel</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="https://www.flyfrontier.com/"
                                                                              target="_blank">&raquo
                                      FlyFrontier</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a
                                          href="https://www.skyscanner.co.in/airlines-all.php" target="_blank">&raquo
                                      AirlineInformation</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="https://www.expedia.com/Flights"
                                                                              target="_blank">&raquo
                                      CheapFlights</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="https://www.flyksa.com/Fr/"
                                                                              target="_blank">&raquo
                                      KosovaAirline</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="https://wizzair.com/en-gb"
                                                                              target="_blank">&raquo
                                      Wizzair</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a
                                          href="https://www.booking.com/index.en.php?aid=1725925;label=en-hc-s4glC*wNOeGEZ7B_fjY56gS336411372683:pl:ta:p1:p2:ac:ap1t1:neg:fi:tikwd-29738972:lp9070165:li:dec:dm;ws=&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyLVGbHhMLxOMak9qpd0ujKJ9cfnMF8B3yjazKJZ-lNSBOCK3-zLs8gaAuC-EALw_wcB"
                                          target="_blank">&raquo
                                      Hotels and More</a>
                              </li>
                              <li style="border-bottom: 1px solid #919090"><a href="README.md"
                                                                              target="_blank">&raquo Readme</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="footer-left">
                      <div class="footer-box">
                          <h6>FROM THE BLOG</h6>
                          <h4>7 Vendet më të vizituara këtë vit..</h4>

                          <p>Spanja ka qenë gjithmonë destinacion i preferuar për shumëkënd,
                              dhe ende mbetet një nga vendet..
                              <a style="float: left" href="html/lavdatat.php">Read more &raquo</a>
                              <br>
                              <br>

                              <div class="latestb">
                                  <h4>Vizitë në Britani</h4>
                          <p>Asnjë listë destinacionesh pushimi nuk do ishte e plotë pa përfshirë
                              aty Britaninë e Madhe: jo vetëm Anglinë, por edhe Skocinë...</p>
                          <a style="float: left" href="html/lavdata2.php">Read more &raquo</a>
                      </div>
                  </div>
              </div>
          </div>

          <?php
              if(isset($_POST['email']))
              {

                  function died($error)
                  {
                      echo "<script type='text/javascript'>alert('$error');</script>";  //not showing an alert box.

                  }
                  // po
                  // validation expected data exists
                  if(!isset($_POST['first_name']) || !isset($_POST['email']) || !isset($_POST['comments']))
                  {

                      died('We are sorry to proceed your request due to error within form entries');
                  }

                  $first_name = $_POST['first_name']; // required
                  $email_from = $_POST['email']; // required
                  $comments = $_POST['comments']; // required
                  $error_message = "";
                  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                  //--------------------------------preg_match function----------------------------------------------------------------
                  if(!preg_match($email_exp,$email_from))
                  {

                      $error_message .= 'Ju keni shenuar email jo-valid!\n';
                  }
                  $string_exp = "/^[A-Za-z .'-]+$/";
                  if(!preg_match($string_exp,$first_name))
                  {
                      $error_message .= 'Emri juaj eshte jo-valid!\n';
                  }
                  //-------------------------------- strlen function -----------------------------------------------------------------
                  if(strlen($comments) < 2)
                  {

                      $error_message .= 'Komenti juaj eshte jo-valid!\n';
                  }
                  if(strlen($error_message) > 0)
                  {
                      died($error_message);
                  }
                  else
                  {

                    $query = "INSERT INTO mesazhet(emri, emaili, mesazhi) ";
                    $query .= "VALUES('{$first_name}','{$email_from}','{$comments}')";
    
                    $send_message_query = mysqli_query($connection, $query);

                    if(!$send_message_query){

                        die("QUERY FAILED" . mysqli_error($connection)); 

                    }


                      echo '<script type="text/javascript">';
                      echo ' alert("Ju faleminderit qe kontaktuat me Ne")';  //not showing an alert box.
                      echo '</script>';
                  }

                  ?>
                  <!-- include your own success html here -->
                  <?php

              }

          ?>
          <div class="footer-left">
              <div class="footer-box">
                  <h6 id="kontakti">CONTACT US</h6>
                  <form id="contact-form" method="post" action="" autocomplete="on">
                      <input type="text" id="name" name="first_name" placeholder="Name" class="required">
                      <input type="text" id="email" name="email" placeholder="Email" class="required">

                      <textarea name="comments" placeholder="Message" rows="6" class="required"></textarea><br>
                      <input type="submit" name="SUBMIT" value="SUBMIT">
                  </form>
              </div>
          </div>
          <div class="clr"></div>
  </div>
  </div>

  </footer>
  <div id="counter" style="text-align: center; color:black; font-size: 18px; padding-bottom: 30px;"></div>

<?php 
echo("
  <script>
    var visits = localStorage.getItem('on_load_counter');
    var sessionVisits = sessionStorage.getItem('session_counter');

    if (visits === null) {
      visits = 0;
    }
    if (sessionVisits === null) {
      sessionVisits = 0;
    }

    sessionVisits++;
    visits++;

    localStorage.setItem('on_load_counter', visits);
    sessionStorage.setItem('session_counter', sessionVisits)

    document.getElementById('counter').innerHTML = 'Ju e keni vizituar kete faqe ' + visits + ' here (' + sessionVisits + ' here ne kete sesion). ';
  </script>
  </div> ");
  ?>
  <script src="js/backtotop.js"></script>
  <script src="js/rregullat.js"></script>


</body>

</html>
