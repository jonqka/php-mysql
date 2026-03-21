<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=:id";

$getusers = $conn->prepare($sql);

$getusers->bindParam(':id', $id);

$getusers->execute();

$data = $prep->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$data['id']; ?>">
        <input type="text" name="name" value="<?=$data['name']; ?>"><br>
        <input type="text" name="surname" value="<?=$data['surname']; ?>"><br>
        <input type="email" name="email" value="<?=$data['email']; ?>"><br>
        <button type="submit" name="submit">Edit</button>
    </form> 
</body>
</html>