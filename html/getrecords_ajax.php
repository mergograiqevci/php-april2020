<?php

    if(isset($_GET['function'])) {
        if($_GET['function'] == 'Barcelona') {
            $destinacioni = 'Barcelona';
            query($destinacioni);
        } elseif($_GET['function'] == 'Stamboll') {
            $destinacioni = 'Stamboll';
            query($destinacioni);
        } elseif($_GET['function'] == 'Doha') {
            $destinacioni = 'Doha';
            query($destinacioni);
        } elseif($_GET['function'] == 'Dubai') {
            $destinacioni = 'Dubai';
            query($destinacioni);
        } elseif($_GET['function'] == 'Paris') {
            $destinacioni = 'Paris';
            query($destinacioni);
        } elseif($_GET['function'] == 'Amsterdam') {
            $destinacioni = 'Amsterdam';
            query($destinacioni);
        }
    }

    function query($destinacioni)
    {
        $host         = "localhost";

        $username     = "root";

        $password     = "";

        $dbname       = "travel";


        $result_array = array();

        $conn = mysqli_connect($host, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection to database failed: " . $conn->connect_error);
        }
        /* SQL query to get results from database */
        $sql = "SELECT  user_emri, user_mbiemri FROM rezervimet  WHERE user_destinacion = '$destinacioni'";

        $result = $conn->query($sql);
        /* If there are results from database push to result array */
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($result_array, $row);
            }
        }
        /* send a JSON encded array to client */
        echo json_encode($result_array);
        $conn->close();
    }