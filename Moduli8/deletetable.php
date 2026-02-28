<?php

    $host = "localhost";
    $db = "testJoni";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql = "DROP TABLE products";

        $conn->exec($sql);
        echo("Table Deleted");
        
    }catch(Exeption $e){


        echo("Table not deleted");


    }
?>