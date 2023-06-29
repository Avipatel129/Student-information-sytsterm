<?php
error_reporting(0);
    $server   = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "student_database";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if($con)
    {
        // echo"connection ok";
    }
    else
    {
        echo("connection failed to the database" .mysqli_connect_error());

    }

    ?>