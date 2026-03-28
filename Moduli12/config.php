<?php
$host = 'localhost';
$db = 'mod13';
$username = 'root';
$password = '';


try{
    $connect = new PDO("mysql:host=$host; dbname=$db", $username, $password);
    echo"sucess";

}
catch(Exeption $e){
    echo "Something went wrong";
}


?>