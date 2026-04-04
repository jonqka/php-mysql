<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "mydb";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    header("Location: index.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $email   = $_POST['email'] ?? '';
    $id      = $_POST['id'] ?? '';

    if ($name && $surname && $email) {
        if ($id) {
            
            $query = "UPDATE users SET name='$name', surname='$surname', email='$email' WHERE id=$id";
        } else {
            
            $query = "INSERT INTO users (name, surname, email) VALUES ('$name', '$surname', '$email')";
        }

        mysqli_query($conn, $query);
    }
    header("Location: index.php");
    exit;
}


$editUser = null;
if (isset($_GET['edit']) && !empty($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $res = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
    $editUser = mysqli_fetch_assoc($res);
}


$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">

        <h2 class="mb-4">Users Dashboard</h2>

       
        <form method="POST" class="mb-4">
            <input type="hidden" name="id" value="<?php echo isset($editUser['id']) ? $editUser['id'] : ''; ?>">

            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" placeholder="Name" 
                           value="<?php echo isset($editUser['name']) ? $editUser['name'] : ''; ?>" required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="surname" class="form-control" placeholder="Surname" 
                           value="<?php echo isset($editUser['surname']) ? $editUser['surname'] : ''; ?>" required>
                </div>
                <div class="col-md-4">
                    <input type="email" name="email" class="form-control" placeholder="Email" 
                           value="<?php echo isset($editUser['email']) ? $editUser['email'] : ''; ?>" required>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    <?php echo $editUser ? 'Update User' : 'Add User'; ?>
                </button>
                <?php if ($editUser): ?>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                <?php endif; ?>
            </div>
            
        </form>
            <a href="dashboard.php" class="btn btn-secondary">Go to Dashboard</a>
   
</body>
</html>