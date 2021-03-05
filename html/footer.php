<?php include "db.php" ?>


<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Footeri</title>
    <meta charset="UTF-8">
</head>  

<body>
    <footer>
            <div class="footer-main">
                <div class="footer-inner">
                    <div class="footer-left">
                        <div class="footer-box">

                            <h6>ABOUT US</h6>
                            <img  src="../images/blonde.jpg" width="215px" height="90px" />


                            <p> JOLILU travel është një udhëzues gjithëpërfshirës për destinacionet
                                më të mira të udhëtimit në botë.Ne ofrojmë përmbajtje të detajuar
                                dhe të saktë të udhëtimit, të dizajnuara për të frymëzuar udhëtarët globalë.</p>
                            <a style="float: left" href="Sherbimet.php">Read more &raquo</a>
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
                                <li style="border-bottom: 1px solid #919090"><a href="../README.md"
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
                                <a style="float: left" href="lavdatat.php">Read more &raquo</a>
                                <br>
                                <br>

                                <div class="latestb">
                                    <h4>Vizitë në Britani</h4>
                                    <p>Asnjë listë destinacionesh pushimi nuk do ishte e plotë pa përfshirë
                                        aty Britaninë e Madhe: jo vetëm Anglinë, por edhe Skocinë...</p>
                                    <a style="float: left" href="lavdata2.php">Read more &raquo</a>
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
        <!-- Ajax - PHP -->
        <script>

            function showHint(str)
            {
                if (str.length == 0)
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                else
                {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function()
                    {
                        if (this.readyState === 4 && this.status === 200)
                        {
                            document.getElementById("txtHint").innerHTML = this.responseText;


                        }
                    };
                    xmlhttp.open("GET", "gethint.php?emri=" + str, true);

                    xmlhttp.send();
                }
            }
        </script>
            <div class="footer-left">
                <div class="footer-box">
                    <h6 id="kontakti">CONTACT US</h6>
                    <form id="contact-form" method="post" action="" autocomplete="on">
                        <input list = "Hint" type="text"  placeholder="Name" name="first_name"  oninput ="showHint(this.value)" tabindex="5" class="required">
                        <datalist id="Hint">
                            <div id = "txtHint"></div>
                        </datalist>
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
</body>
</html>