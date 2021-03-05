<?php include "db.php"; ?>
<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Sherbimet</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/body.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
  <script src="../js/jquery.min.js"></script>


  <style>
    .row {
      margin-left: 15px;
    }

    .kontaineri {
      padding-right: 15px;
      padding-left: 15px;
      display: inline;

    }

    .text-center {
      text-align: center;
      word-wrap: break-word;
    }

    .service-box {
      background: #fff;
      border: 1px solid gray;
      padding: 20px;

    }

    .service-icon {
      margin-bottom: 100px;
    }

    .service-box {
      margin-bottom: 150px;
      height: 500px;
    }

    .col-md-3 {

      position: relative;
      min-height: 1px;
      padding-right: 35px;
      padding-left: 15px;

    }

    .col-md-3 {
      float: left;
    }

    .col-md-3 {
      width: 28%;
    }

    h2.h-bold,
    h5.h-bold {
      font-weight: 600;
      font-size: 20px;

    }

    h5 {
      color: red;
      padding-bottom: 20px;
    }

    h2 {
      color: red;
      padding: 10px 0;

    }

    p {
      color: black;
      font-size: 14px;
      margin: 0 auto;

    }

    .column {
      float: left;
      width: 22%;
      margin-bottom: 16px;
      padding: 0 9px;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .bashkimi {
      padding: 0 16px;
    }

    .bashkimi::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
      margin: 10px 0;
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: rgb(67, 180, 67);
      text-align: center;
      cursor: pointer;
      width: 100%;
      margin: 10px 0;
    }

    .button:hover {
      background-color: rgba(67, 180, 67, 0.7);
    }
  </style>
  <!--JQuery qe mundeson hide and show, JQuery effects-->
  <script>
    jQuery(document).ready(function () {
      jQuery(".btn1").click(function () {
        jQuery(".service-box").hide();//Callback JQuery efekt qe mundeson qe efekti i pare te kompletohet pastaj te thirret efekti i dyte
        alert("Lista e sherbimeve do fshihet");
      }
      );
      jQuery(".btn2").click(function () {
        jQuery(".service-box").show();
        alert("Lista e sherbimeve  do shfaqet");
      }
      );
    });
  </script>

  <!--JQuery effect per animacion-->
  <script>
    $(document).ready(function () {
      $("#14").hover(
        function () {
          $("#14").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#14").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

  <script>
    $(document).ready(function () {
      $("#16").hover(
        function () {
          $("#16").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#16").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

  <script>
    $(document).ready(function () {
      $("#15").hover(
        function () {
          $("#15").filter(':not(:animated)').animate({
            width: "90%"
          }, 'slow');
          // Animacioni per Hover efekte do te pres derisa te perfundoje animacioni paraprak
        },
        function () {
          $("#15").animate({
            width: "100%"
          }, 'slow');
        });
    });
  </script>

</head>

<body>
  <div class="wrapper">
    <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
            <a href="../index.php"><img src=../images/jlml.png  width="200px" height="50px"/></a>
        </div>
        <nav>
          <ul>
              <li><a href="../index.php">HOME</a></li>
              <li><a href="Sherbimet.php" class="active">SHERBIMET</a></li>
              <li><a href="Kontakti.php">REZERVO</a></li>
              <li><a href="portfolio.php">OFERTA</a></li>
              <li><a href="gallery.php">GALLERY</a></li>
              <li><a href="login/login.php">LOGIN</a></li>
              <li><a href="#">MORE</a>
                  <ul>
                      <li><a href="sendmail.php">SEND EMAIL</a></li>
                      <li><a href="game.php">GAME</a></li>
                  </ul>
              </li>
          </ul>
        </nav>
        <div class="clear"></div>
      </header>
    </div>

    <div class="wrapper col3">
      <!--<br><button style="float:left; margin-right: 20px; margin-left: 20px;" class="btn1">Fsheh Sherbimet</button>
      <button style="float:left" class="btn2">Shfaq Sherbimet</button></br>-->
      <div id="container" class="clear">
        <!-- main content -->
        <div id="homepage">
          <!-- services area -->
          <section id="service" style="display: inline">
            <div class="text-center">
              <h2 class="h-bold">Sherbimet</h2>
              <p>Me poshte jane disa nga sherbimet te cilat mundesohen nga kompania jone!</p>
            </div>

            <div class="text-center">
              <div class="kontaineri">

                <div class="row">
                  <div class="col-md-3" >
                    <div>
                      <div class="service-box" >
                        <div class="service-icon">
                          <span><img id="14" style="width: 100%;" src="../images/Akomodim.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5>Akomodim</h5>
                          <p>

                            Jolilu Travel krenohet duke u dhënë klientëve një zgjedhje të
                            nevojave specifike të akomodimit, pa marrë parasysh se ku - në aspektin rajonal,
                            kombëtar dhe ndërkombëtar.Duke ju ofruar akomodim sa me te mire dhe te rahatshem per
                            familjen dhe miqte tuaj,
                            ne ju sjellim ofertat tona me te mira dhe me te sigurta!

                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="service-box">
                        <div class="service-icon">
                          <span><img id="15" style="width: 100%;" src="../images/Travelinsurance.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5 style="margin-top: -15px;">Siguri Udhetimi</h5>
                          <p>
                            Jolilu Travel siguron ligjet e sigurimit të udhëtimit të mbikqyrura nga AIG, Hollard dhe
                            TIC.
                            Me një policë të shëndetit në udhëtim, Scardian, jua kompenson shpenzimet që mund të
                            rezultojnë për shërim apo hospitalizim emergjent gjatë qëndrimit tuaj në ndonjë shtet të
                            huaj.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="service-box">
                        <div class="service-icon">
                          <span><img id="16" style="width: 100%;" src="../images/Linja.jpg"
                              alt="Imazhi nuk eshte ende ne dispozicion!" /></span>
                        </div>
                        <div>
                          <h5>Linja Ajrore dhe rezervimet </h5>
                          <p>
                            JOLILU Travel ofron rezervime me kosto efektive të fluturimit për të gjitha destinacionet.
                            Preferenca për çdo linjë të veçantë ajrore sigurisht që merret në konsideratë sa herë që
                            bëhen rezervime.
                            Bashkpunimi e Jolilu Travel me Aria Travel i jep Julilu Travel një përfaqësim me të fortë në
                            arenën ndërkombëtare.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h1 style="text-align: center; font-size: 28px; margin-bottom: 30px;">Ekipa e jon&euml;</h1>
              <div class="row">
                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn4-1.fna.fbcdn.net/v/t1.0-9/70349862_2877915908904493_2950854458923286528_n.jpg?_nc_cat=105&_nc_sid=09cbfe&_nc_ohc=YlrCTINRxwwAX__JXjV&_nc_ht=scontent.fprn4-1.fna&oh=9c641cd3dbc6a23ca23ef392e7b6c72c&oe=5EE73ED0"
                      alt="Jane" style="width:100%" style="height:25%">
                    <div class="bashkimi">
                      <h2>Lum Pireva</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p></p>
                      <a href="https://www.facebook.com/lumprv" target="_blank" style="margin-top:25px"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:pireva.lum@hotmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn4-1.fna.fbcdn.net/v/t1.0-9/44336071_2389549424405498_7189547813510840320_n.jpg?_nc_cat=106&_nc_sid=174925&_nc_ohc=akWYYh19jl4AX_RHw9d&_nc_ht=scontent.fprn4-1.fna&oh=7b9eeb4827453e3335b3bb685c8bc4a3&oe=5EE89427"
                      alt="Mike" style="width:100%">
                    <div class="bashkimi">
                      <h2>Jon Hajdini</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p></p>
                      <a href="https://www.facebook.com/jonhajdini" target="_blank" style="margin-top:25px;"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:jonhajdini99@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn4-1.fna.fbcdn.net/v/t1.30497-1/c59.0.200.200a/p200x200/84241059_189132118950875_4138507100605120512_n.jpg?_nc_cat=1&_nc_sid=7206a8&_nc_ohc=SRoV1a8-7WkAX_zfPVP&_nc_ht=scontent.fprn4-1.fna&oh=12dfc3849150f6d0415e29fe9a369e2b&oe=5EE5AA04"
                      alt="John" style="width:100%">
                    <div class="bashkimi">
                      <h2>Lirim Beka</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p> </p>
                      <a href="https://www.facebook.com/lirim.beka.4000" target="_blank" style="margin-top:25px"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:beka.lirim@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>
				<div class="column">
                  <div class="card">
                    <img
                      src="https://scontent.fprn4-1.fna.fbcdn.net/v/t1.0-9/67153572_1125954954281970_3124587037097721856_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=_6I6sUuw-vwAX9zkr61&_nc_ht=scontent.fprn4-1.fna&oh=c5e3aa0755f12644ecf8961af37339c0&oe=5EDA79B2"
                      alt="John" style="width:100%">
                    <div class="bashkimi">
                      <h2>Mergim Graiqevci</h2>
                      <p class="title">Student and part time Web Developer</p>
                      <p></p>
                      <a href="https://www.facebook.com/mergimgraiqevci" target="_blank" style="margin-top:25px"
                        class="fab fa-facebook-f"></a>
                      <p><a href="mailto:mergograiqevci@gmail.com"><button class="button">Contact</button></a></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section>


        </div>
        <div class="icons">
          <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
          <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
          <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
          <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
          <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
        </div>

      </div>
    </div>



      <?php

      include "footer.php";

      ?>
  </div>
  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>


</body>

</html>
