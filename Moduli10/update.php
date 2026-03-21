<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $usrname = $_POST['iusername'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];



    $sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
}


?>