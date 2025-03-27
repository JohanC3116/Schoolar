<?php

    include('../config/database.php');

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['e_mail'];
    $password = $_POST['passw'];

        //se crea el query
    $sql = "INSERT INTO users (firstname, lastname, email, password)
                VALUES('$fname', '$lname','$email','$password')
    ";

    $res = pg_query($conn, $sql); //como darle f5

    if ($res){ // es como tener res == true
        echo "User has been created succesfully";
        } else{
            echo "Error";
        }
?>