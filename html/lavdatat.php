<?php include "db.php"; ?>

<?php

    /* *OOP in PHP* */
    /*-----------------------------------------------------------------*/
    // Sort indexed or Associative Arrays
    class SortedArrays
    {
        public $IndexedArray;
        public $AssociativeArray;


        public function set_numbers($IndexedArray)                                  // set indexed array
        {
            $this->numbers = $IndexedArray;
        }
        public function set_people($AssociativeArray)                               // set associative array
        {
            $this->people = $AssociativeArray;
        }
        /* gets constructed and setted members */
        public function get_numbers()
        {
            return $this->numbers;
        }
        public function get_people()
        {
            return $this->people;
        }

        /* ------------------------------------- */
    }


    $indarrays = array(200, 220, 80, 120, 150);
    $assarrays = array("Hotel Paradise" => 600, "Hotel Maria" => 400, "Hotel Aria" => 350);

    $sortoVargjet = new SortedArrays();                       // declare new object from class
    $sortoVargjet -> set_numbers($indarrays);                 // set indexed array  in object
    $sortoVargjet -> set_people($assarrays);                  // set associative array in object
    $numbers = $sortoVargjet->get_numbers();                  // gets indexed array from class
    $people = $sortoVargjet->get_people();                    // gets associative array from class


    rsort($numbers);                            // gets descending order of indexed array from class
    asort($people);                             // Ascending order according to the value(price)
    //arsort($people);                                 // Descending order according to the value(price)
    //krsort($people);                                 // Descending order according to the key(Name)
    //ksort($people);                                  // Ascending order according to the key(Name)


    // manual sorting (Manupilimi me vargje)                  // manual sorting of indexed array
    for($x = 0; $x < count($numbers); $x++)
    {
        for ($y = $x + 1; $y < count($numbers); $y++)
        {
            if($numbers[$x] < $numbers[$y])
            {
                $tempValue = $numbers[$y];
                $numbers[$y] = $numbers[$x];
                $numbers[$x] = $tempValue;
                // ascending order

            }
        }
    }



    /* ------------------------------------------------------------------------- */

    // PHP OOP - Inheritance //
    class Vargjet extends SortedArrays
    {
        public $MulDimArray;

        /*---Konstruktimi ne klasa---*/
        function __construct($IndexedArray, $AssociativeArray, $MulDimArray)
        {
            $this->indexed = $IndexedArray;
            $this->associative = $AssociativeArray;
            $this->multidimensional = $MulDimArray;
            $this->length = count($IndexedArray);
        }

        /*      get constructed variables       */
        function get_indexed()
        {
            return $this->indexed;
        }
        function get_associative()
        {
            return $this->associative;
        }
        function get_length()
        {
            return $this->length;
        }
        function get_multidimensional()
        {
            return $this->multidimensional;
        }
        /* ------------------------------------ */
        //--------- Destruct object ------------//
        function __destruct()
        {
            return "Klasa u prish!";
        }
    }


    $indArray = array("HOME", "SHERBIMET", "REZERVO", "MORE");             //  indexed array

    $assoArray = array("OPTION" => "(Opsionale)", "Data" => 18);              //  associative array

    $mulArray = array                                                        // multidimensional array
    (
        array("No: ",0101404101),
        array("Address: ","Julian Park st.101"),
        array("City: ", "Prishtine"),
    );


    $vargjet = new Vargjet($indArray, $assoArray, $mulArray);               // construct object
    $name =  $vargjet->get_indexed();                                       // declare indexed array from class
    $arrlength = $vargjet->get_length();                                    // declare length of indexed array from class
    $agency = $vargjet->get_associative();                                  // declare associative array from class
    $contact = $vargjet->get_multidimensional();                            // declare multidimensional array from class

    // basic loop
    for($x = 0; $x < $arrlength; $x++)
    {

        if($name[$x] == "HOME")
        {
            continue;
        }
    }


?>


<!DOCTYPE html>


<html lang="">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Lavdatat</title>
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
                    <a href="../index.php"><img src=../images/jlml.png  width="200px" height="50px"/></a></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="../index.php"><?php echo $name[0] ?></a></li>
                        <li><a href="Sherbimet.php"><?php echo $name[1] ?></a></li>
                        <li><a href="Kontakti.php"><?php echo $name[2] ?></a></li>
                        <li><a href="portfolio.php">OFERTA</a></li>
                        <li><a href="gallery.php">GALLERY</a></li>
                        <li><a href="login/login.php">LOGIN</a></li>                        
                        <li><a href="#"><?php echo $name[3] ?></a>
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
            <div id="container">
                <h1 style="font-size: 40px; text-align: center; color: blueviolet;">Dubai, 6 Dite - €629</h1>
                <div class="testimonial push50 clear">
                    <img src="../images/dubai.jpg" style="float:left; padding: 20px; width:200px; height:200px;"
                        alt="">
                    <div class="three_quarter">
                        <blockquote>
                            <p style="font-size: 24px;">
                               <?php $text = "Dita e Parë: Nisja me Áutobus nga Prishtina në Áeroportin e Shkupit. Fluturimi Shkup –
                                Dubai. Paraqitja ne Check in 2 ore para nisjes dhe njohja me Guiden. Nisja nga Shkupi në
                                orën 13.35, Mbrritja në Dubai në orën 20.35. Transferta me Áutobus nga Aeroporti në
                                Hotel. Sistemimi dhe Fjetje në Hotel.\n";

                               //--------------------preg_replace function------------------------------------------
                            function remove_accent($text)
                            {
                                $a = array
                                ('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó',
                                    'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é',
                                    'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā',
                                    'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ',
                                    'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ',
                                    'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ',
                                    'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ',
                                    'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ',
                                    'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż',
                                    'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ',
                                    'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
                                $b = array
                                ('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O',
                                    'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e',
                                    'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y',
                                    'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd',
                                    'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H',
                                    'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K',
                                    'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O',
                                    'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S',
                                    's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u',
                                    'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u',
                                    'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE',
                                    'ae', 'O', 'o');
                                return str_replace($a, $b, $text);

                            }

                            function post_slug($text)
                            {
                                return (preg_replace(array('/[^a-zA-Z0-9 -,.:]/', '/[ -]+/', '/^-|-$/'),
                                    array('', ' ', ''), remove_accent($text)));
                            }
                                   echo post_slug($text);
                            //------------------------preg_split-------------------------------------------------
                                   $result = preg_split("/[\n]+/", "Hotel Maria> \n Hotel Aria> \n Hotel Paradise> ");
                                   echo "<br>Hotelet ne dispozicion: ";
                                   // Display result
                                   foreach($result as $a)
                                   {
                                       print $a;

                                       foreach($people as $p)
                                       {
                                           print $p."$"."|\n";
                                           break;
                                       }


                                   }

                                   print "<br>Cmimet per person varojne nga: \n";
                                   foreach($numbers as $s)
                                   {
                                        print $s . "$" . "**";
                                   }
                                   ?>

                                <br />
                                <br />
                                <?php
                                //-------------------------/write function -------------------------------
                                $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
                                $txt = "Dita e dyte\n";
                                fwrite($myfile, $txt);
                                $txt = "Dita e dyte\n";
                                fwrite($myfile, $txt);
                                fclose($myfile);
                                ?>
                                Dita e Dytë: Mëngjesi në Hotel. Një vizitë panoramike në Dubai ku vizitohen: Pallati e
                                Sheikut të Dubait Mohammed Al-Maktum, lagja me e vjetër në Dubai Al Bastakiya, Hoteli me
                                7 yje Burj Al Arab, Qëndra Madinat Jumeirah, Palma e Jumeiras, Sheikh Zayed Road, Qëndra
                                Mall of Emirates, ku mund të bëni ski në dëborë artificiale. Në fund do
                                të udhëtojl tek Kompleksi Downtown Dubai i cili përfshin: Kullën më të lartë në Botë
                                Burj Khalifa, Qëndra tregtare më madhe në botë Dubai Mall si dhe një nga shfaqjet më të
                                bukura në qytetit Shatervani Kërcimtar.
                                (Opsionale), Xhiro në perëndim tek rreth 2 orë me pije jo alkolike me Anije Catamaran në
                                lagjen më luksoze të Dubait – në Dubai Marina. M
                                Kthimi dhe Fjetje në Hotel.

                                </br>
                                <br>
                                Dita e Tretë: Mëngjesi në Hotel.
                                </br>
                                <br>
                                (Opsionale), Ngjitje në Ndërtesën më të lartë në botë – Burj Khalifa.
                                </br>
                                <br>
                                (Opsionale) Mbasdite, nisja në drejtim të Dunave ku shoferi i specializuar i
                                shkretetirave do ju bëjë një tur në shkretëtirë me fuoristradë. Mundësi për të bërë një
                                foto me gamile dhe me kostumet tradicionale Arabe. Përfshirë në cmim Darkë me Zgarë
                                Barbeque në ambjentet karakteristike dhe tradicionale arabe në shoqërinë e kërcimtareve
                                dhe tingujve të bukur të muzikës orientale.
                                </br>
                                <br>
                                **SHENIM. Ekskursioni në Shkretëtirë i datës 6 Maj 2019, do të zhvillohet pa shfaqjet
                                Tanoura, Belly Dancing dhe me Zjarr. Kjo për shkak të politikës për oraret e qetësisë
                                gjatë muajit të shenjtë të Ramazanit.
                                </br>
                                <br>
                                Kthimi dhe Fjetje në Hotel.
                                </br>
                                <br>
                                Dita e Katërt: Mëngjesi në Hotel. Vizitë në Abu Dhabi me autobus. Vizitë panoramike e të
                                gjitha pikave interesante të qytetit, si Xhamia e Sheikut Zayed*, Poli Flamurit, Fshati
                                Heritage, Ishulli Yas (me pistën e Garave Formula 1, Parku Ferrari,etj). Kthimi në
                                Dubai.
                                Fjetje në Hotel.
                                </br>
                                <br>
                                Dita e Pestë: Mëngjesi në Hotel. Dite e lirë për Plazh dhe Shopping.
                                <br>
                                <?php echo $agency['OPTION']?>, Hyrje ditore në Aquaparkun më të famshëm ne Dubai quajtur Aquaventure
                                Atlantis the Palm, në të cilin ndodhet rrëshkitsja me e famshme nënujore quajtur Leap of
                                Faith, kompleks i cili ndodhet në ishullin më të madh articificial të ndërtuar
                                ndonjëherë quajtur Palm Jumeirah.
                                </br>
                                <br>
                                <?php echo $agency['OPTION']?>, Bilete hyrje për tek Dubai Frame (nga Anglishtja Korniza e Dubait)
                                Eksperienca në këtë kompleks fillon me informimin mbi historine e qytetit, të tashmes së
                                tij duke pasur nje panoramike të pjesës së re dhe të vjeter të Dubait dhe mbaron me të
                                ardhmen e qytetit-mrekulli
                                </br>
                                <br>
                                Kthimi dhe Fjetje në Hotel.
                                </br>
                                <br>
                                Dita e Gjashtë: Mëngjesi në Hotel. Transferta në Aeroportin e Dubait. Fluturimi Dubai –
                                Shkup. Nisja nga Dubai në orën 09.00. Mbrritja në Shkup në orën 12.35. Nisja nga Shkupi
                                me Autobus për në Tiranë. Mbrritja ne Tirane.
                                </br>
                                <br>
                                Nisja më <?php echo $agency['Data']?> Maj nga Vendi:
                                <?php
                                    // echo out multidimensional array
                                    for ($row = 0; $row < 3; $row++)
                                    {
                                        for ($col = 0; $col < 2; $col++)
                                        {
                                             echo "\n".$contact[$row][$col]."\n";

                                        }
                                        echo ";";

                                    }
                                    ?>
                                </br>
                            </p>
                        </blockquote>

                    </div>
                </div>
                <p style="text-align: center; padding: 20px 0;"><iframe width="760px" height="430"
                        src="https://www.youtube.com/embed/9OwZo6xrWKE" frameborder="0" allowfullscreen></iframe></p>
                <div class="testimonial clear">

                    <div class="three_quarter">
                        <blockquote>
                            <br>
                            <div style="column-count: 3; column-gap: 30px; column-rule-style: solid; column-rule-width: 1px; column-rule-color:forestgreen; font-size: 20px; color: black; background-image: url(../images/painting.jpg); background-origin: content-box;">

                            </div>

                        </blockquote>
                    </div>
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

</html>