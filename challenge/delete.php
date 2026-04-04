<?php
include("config/config.php");

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: dashboard.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>