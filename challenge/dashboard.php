<?php
include("config/config.php");
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Users Dashboard</h2>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['surname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td class="text-center">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" 
                               class="btn btn-sm btn-warning me-2">
                               Edit
                            </a>

                            <a href="delete.php?id=<?php echo $row['id']; ?>" 
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Delete this user?')">
                               Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>