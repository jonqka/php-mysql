<?php

    $host = "localhost";
    $db = "testJoni";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

       $username = "joni";
       $password = "joni123";

       $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";



        $conn->exec($sql);
        echo("Row Added");
        
    }catch(Exeption $e){


        echo("Row not added");


    }
?>