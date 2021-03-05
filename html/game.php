<html>

<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Homepage</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  <link rel="stylesheet" href="../css/body.css" type="text/css">
  <link rel="stylesheet" href="../css/game.css" type="text/css">
  <link rel="stylesheet" href="../css/footeri.css" type="text/css">
  <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
  <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="wrapper" style="background-color: #FDEDEC;" >
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
    <div class="wrapper col3" style="background-image: radial-gradient( rgb(71, 185, 219) , rgb(187, 187, 186));">

      
      <div id="game1" >
        <h1 id="snake">You are playing Snake Game. Good Luck!</h1>
        <canvas width="400" height="400" id="game"></canvas>

        <div id="score1">Score: <span id="score"></span></div>
        
      </div>

      <p style="font-size: 16px; color: rgb(173, 42, 42); margin-left:20px; padding-bottom: 10px;">Llogarit sa kohe po shpenzon: <output id="result" ></output>
      <button onclick="startWorker()">Fillo </button>
      <button onclick="stopWorker()">Ndalo</button> </p>

      
      <script>
        var w;

        function startWorker() {
          if (typeof (Worker) !== "undefined") {
            if (typeof (w) == "undefined") {
              w = new Worker("../js/timeCounter.js");
            }
            w.onmessage = function (event) {
              document.getElementById("result").innerHTML = event.data;
            };
          } else {
            document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
          }
        }

        function stopWorker() {
          w.terminate();
          w = undefined;
        }
      </script>
    </div>

      <?php

      include "footer.php";

      ?>
  </div>

  <script src="../js/game.js"></script>
  <script src="../js/rregullat.js"></script>

</body>

</html>