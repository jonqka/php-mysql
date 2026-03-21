<!DOCTYPE html>
<html lang="en">
<head>

    <title>Dashboard</title>
<style>

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    td, th {
        padding: 10px 20px;
    }
    
</style>
</head>
<body>



<?php
include_once('config.php');
$sql = "SELECT * from user";
$getusers = $conn->prepare($sql);
$getusers->execute();
$users = $getusers->fetchAll();
?>


    <table>
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>

    </thead>
    <tbody>
    <?php 
    foreach($users as $user) {
     ?>
    <tr>
        <td><?=$user['id']; ?></td>
            <td><?=$user['name']; ?></td>
                <td><?=$user['surname']; ?></td>
                    <td><?=$user['email']; ?></td>
    </tr>

<?php
 }
 ?>   
    </tbody>
     </table>
    <a href="add.php">Add User</a>

</body>
</html>