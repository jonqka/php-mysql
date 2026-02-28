<?php

    $host = "localhost";
    $db = "testJoni";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

        $sql = "ALTER TABLE products DROP COLUMN name";

        $conn->exec($sql);
        echo("Column Deleted");
        
    }catch(Exeption $e){


        echo("Column not deleted");


    }
?>