<?php include "db.php" ?>

<html>

<head>
  <title>Portfolio</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/portfolio.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper" style="background-image: url(../images/globi.png), url(../images/bota.png); background-repeat: no-repeat;background-size: 200px 200px; background-position: top 250px left 10px, bottom 600px right 10px; background-attachment: scroll; ">
    <button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>
    <div class="wrapper row1">
      <header id="header" class="clear">
        <div id="hgroup">
            <a href="../index.php"><img src=../images/jlml.png  width="200px" height="50px"/></a>
        </div>
        <nav>
          <ul>
              <li><a href="../index.php">HOME</a></li>
              <li><a href="Sherbimet.php">SHERBIMET</a></li>
              <li><a href="Kontakti.php">REZERVO</a></li>
              <li><a href="portfolio.php" class="active">OFERTA</a></li>
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

    <?php
    // I merr te gjitha te dhenat nga tabela ofertat
    $query = "SELECT * FROM ofertat";
    $select_all_ofertat_query = mysqli_query($connection, $query);

    // Me while loop e mbush tere faqen me te dhenat e marra nga databaza
    while($row = mysqli_fetch_assoc($select_all_ofertat_query)) {

      // Ruaj te dhenat e fushave ne variabla te reja
      $oferta_id = $row['oferta_id']; // 'oferta_id' eshte emri i kolones ne tabelen ofertat
      $emri_oferta = $row['emri_oferta'];
      $foto_oferta = $row['foto_oferta'];

    ?>


    <div class="wrapper col3" >
      <div id="container" class="clear">
        <h1 style="text-align: center; color:steelblue; font-size: 30px; padding-top: 35px;"><strong> Oferta <?php echo $oferta_id ?></strong></h1>
        <section id="portfolio" class="clear">
          <ul>
            <li>
              <article>
                <figure><a href="<?php echo $emri_oferta; ?>.php"><img src="../images/<?php echo $foto_oferta; ?>" alt=""></a>
                  <figcaption><strong> <?php echo ucfirst($emri_oferta); ?> </strong></figcaption>
                </figure>
              </article>
            </li>
            <!-- <li>
              <article>
                <figure><a href="stamboll.php"><img src="../images/stamboll.jpg" alt=""></a>
                  <figcaption><strong>Stambolli</strong></figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="doha.php"><img src="../images/doha.jpg" alt=""></a>
                  <figcaption><strong>Doha</strong></figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Amsterdam.php"><img src="../images/amsterdam.jpg" alt=""></a>
                  <figcaption>Amsterdam</figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Barcelona.php"><img src="../images/barcelona.jpg" alt=""></a>
                  <figcaption>Barcelona</figcaption>
                </figure>
              </article>
            </li>
            <li>
              <article>
                <figure><a href="Paris.php"><img src="../images/paris.jpg" alt=""></a>
                  <figcaption><strong>Parisi</strong></figcaption>
                </figure>
              </article>
            </li> -->

            <div class="icons">
              <a href="https://www.facebook.com/" target="_blank" class="fab fa-facebook-f"></a>
              <a href="https://www.pinterest.com/" target="_blank" class="fab fa-pinterest"></a>
              <a href="https://www.linkedin.com/" target="_blank" class="fab fa-linkedin"></a>
              <a href="https://twitter.com/" target="_blank" class="fab fa-twitter"></a>
              <a href="https://plus.google.com/discover" target="_blank" class="fab fa-google"></a>
            </div>
      </div>
    </div>
    <?php }?>

    <!-- Thirre file 'footer.php', ku eshte i ruajtur footer-i -->
    <?php include "footer.php" ?>
    

  </div>
  <script src="../js/backtotop.js"></script>
  <script src="../js/rregullat.js"></script>

</body>

</html>