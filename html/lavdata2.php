<?php include "db.php"; ?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Lavdata 2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/body.css" type="text/css">
    <link rel="stylesheet" href="../css/lavdatat.css" type="text/css">
    <link rel="stylesheet" href="../css/footeri.css" type="text/css">
    <link rel="stylesheet" href="../css/dropdown.css" type="text/css">
    <script src="https://kit.fontawesome.com/af9a262f2e.js" crossorigin="anonymous"></script>
</head>

<body>
<button id="back-to-top-btn"><i class="fa fa-chevron-circle-up"></i></button>

<div class="wrapper">
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

    <div class="wrapper col3" >
        <div id="container" style="background-image: linear-gradient(to bottom right , rgba(198, 233, 159, 0), rgb(231, 233, 143));">
            <h1 style="font-size: 40px; text-align: center; color: blueviolet;">Lavdatat nga konsumatoret tane</h1>
            <div class="testimonial push50 clear">
                <img src="../images/profile-pic.png" style="float:left; padding: 20px; width:200px; height:200px;"
                     alt="">
                <div class="three_quarter">
                    <blockquote>
                        <p style="font-size: 24px;">

                            <?php
                            //-----------------------------read / write a file function------------------------------------------
                            $myFile = "content.txt";
                            $fh = fopen($myFile, 'r');
                            $myFileContents = fread($fh, 200);
                            fclose($fh);
                            echo $myFileContents;


                            //----------------substr Function ------------------------------------------------------------------
                            echo substr("5 Udhetime te paharrueshme !", 1) . "<br>";
                            ?>
                        </p>
                    </blockquote>

                    <?php
                   /*------Converting a file to a docx file in order to read/write it (joni)--------*
                    *  function read_file_docx($filename){
                        $striped_content = '';
                        $content = '';
                        if(!$filename || !file_exists($filename)) return false;
                        $zip = zip_open($filename);
                        if (!$zip || is_numeric($zip)) return false;
                        while ($zip_entry = zip_read($zip)) {
                            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;
                            if (zip_entry_name($zip_entry) != "word/document.xml") continue;
                            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
                            zip_entry_close($zip_entry);
                        }// end while
                        zip_close($zip);
                        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
                        $content = str_replace('</w:r></w:p>', "\r\n", $content);
                        $striped_content = strip_tags($content);
                        return $striped_content;
                    }
                    $filename = "content.txt";// or /var/www/html/file.docx
                    $content = read_file_docx($filename);
                    if($content !== false) {
                        echo nl2br($content);
                    }
                    else {
                        echo 'Couldn\'t the file. Please check that file.';
                    }

                     */ ?>


                    <?php
                    //-----------------------------Implode Function-----------------------------------------------------
                    echo '<br>';
                    $rooms = array('Rehati','Komoditet','Mrekulli!');
                    $newstring=implode(',',$rooms);
                    echo $newstring.'<br/>';

                    //------------------printf Function-----------------------------------------------------------------
                    define("cmimi", "120$");
                    //$cmimi ="120$";
                    print ("Nje cmim i arsyeshem per nje nate qe kushton " .cmimi);
                    echo '<br/>';
                    $PriceArray=array ('price'=>"120$",'qty'=>"7");
                    printf("Kurse cmimi qe qendruam per 7 nete ishte  $%d",($PriceArray['price']*$PriceArray['qty']));
                    ?>
                    <br />
                    <p>

                        Vlera e jashtëzakonshme për para - e vendosur në zemër të Tryavna, fillimisht duket se po hyni në një shtëpi të vjetër, por
                        brenda çdo gjëje është e mobiluar dhe paraqitur moderne. Dhomat ishin të pastra dhe të rehatshme, kishte një lidhje të fortë
                        wi-fi.

                    </p>


                    <?php
                    //-----------------------------Explode Function-----------------------------------------------------
                    define("string", "Best Regards");

                    $newArray=explode(' ',string,);
                    foreach($newArray as $value)
                        echo $value.'<br/>';
                    echo '<br/>';
                    ?>

                </div>
            </div>
            <p style="text-align: center; padding: 20px 0;"><iframe width="760px" height="430"
                                                                    src="https://www.youtube.com/embed/IbmrqYjyBnU" frameborder="0" allowfullscreen></iframe></p>
            <div class="testimonial clear">
                <img src="../images/profile-pic.png"
                     style=" float:right;  width:200px; height:200px; padding: 20px;" alt="">
                <div class="three_quarter">
                    <blockquote>
                        <p style="font-size: 24px;">

                            <?php
                            //------------------------substr function--------------------------------------------------
                            // Positive numbers:
                            echo substr("***********************************************************", 1) . "<br>";
                            echo substr("Aty Ju do te gjeni rehati !", 3) . "<br>";
                            echo "<br>";
                            ?>

                        <p>
                            <?php
                            //-------------------------substr function -----------------------------------------------
                            $fulltext= " Ngjyra, diell, tapas, det, art. Nëse mbyllim sytë dhe mendojme për Barcelonën, këto janë
                            elementet
                            që do ju vijne në mendje. Barcelona është ajo që ne e quajme qytet i përsosur: ajo ka
                            një klimë ideale,
                            njerëzit janë të ngrohtë dhe, sigurisht që nuk mund të neglizhojme, pranine e plazhit
                            dhe detit. Per ata
                            që po planifikojnë të shpenzojnë vetëm një fundjavë, kemi 10 këshilla se çfarë të bëni
                            dhe ku të shkoni
                            dhe shpresojme se do të jenë të dobishme për ju!";

                            //------------------------------strlen Function-------------------------------------------------
                            echo "<br>";
                            $textpart = substr($fulltext, 0, 1000);
                            echo $textpart;
                            echo "<br>";
                            echo "<br>";
                            echo  "Ne kete tekst jane shkruar " .strlen($textpart). " karaktere"
                            ?>

                        </p>
                        <?php
                        //----------------------------trim function-----------------------------------------------------
                        define("text", "My Best regards!");

                        echo trim(text,"My");

                        //---------------------------str_replace function-----------------------------------------------
                        echo "<br>";
                        echo "<br>";
                        echo str_replace("world","Written","world by : ");
                        echo str_replace('old', 'new', 'John Doe');
                        ?>

                        <address >
                            Visit us at:<br>
                            Jolilu.com<br>
                            FIEK, Prishtine<br>
                            KOSOVE
                        </address>
                        </br>
                    </blockquote>
                </div>
            </div>

            <div style="padding-bottom: 20px;">
                <img src="../images/profile-pic.png" style="float:right; padding: 20px; width:200px; height:200px;"
                     alt="">
                <img src="../images/profile-pic.png" style=" padding: 20px; width:200px; height:200px;" alt="">
                <img src="../images/profile-pic.png" style=" padding: 20px; width:200px; height:200px;" alt="">
                <img src="../images/profile-pic.png" style="float:left; padding: 20px; width:200px; height:200px;"
                     alt="">
            </div>



            <div class="icons" style="margin-top: -60px;">
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


</div>

<script src="../js/backtotop.js"></script>
<script src="../js/rregullat.js"></script>

</body>

