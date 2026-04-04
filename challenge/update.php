<?php
include("config/config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$query = "UPDATE users 
          SET name='$name', surname='$surname', email='$email' 
          WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: dashboard.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>