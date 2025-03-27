<?php

    //config conection
    $host = "localhost";
    $port = "5432"; //puerto de la base de datos en postgres
    $dbname = "schoolar";
    $user = "postgres";
    $password = "postgres";

    //Create conction 
    $conn = pg_connect("
        host = $host
        port = $port
        dbname = $dbname
        user = $user
        password = $password
    ");

    if(!$conn){
        die("Connection error: " . pg_last_error());
    } else {
        echo "Succes concetion";
    }

?>