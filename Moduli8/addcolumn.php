<?php

    $host = "localhost";
    $db = "testJoni";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql = "ALTER TABLE users ADD tel INT(12)";

        $conn->exec($sql);
        echo("Column Added");
        
    }catch(Exeption $e){


        echo("Column not added");


    }
?>