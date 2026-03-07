<?php
$host = 'localhost';
$db = 'testjoni';
$username = 'root';
$password = '';

try{
    $connect = new PDO ("mysql:host=$host; dbname=$db", $username, $password);
     echo"Connection Succesful";
}
catch (Exeption $e){
    echo "Something went wrong";
}

?>