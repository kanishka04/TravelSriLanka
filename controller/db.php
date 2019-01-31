<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "travel_srilanka";

    $con = new mysqli($host,$user,$pass,$db_name);

    if($con->connect_error){

        die("Connection cannot be established" .$con->connect_error);
    }
?>