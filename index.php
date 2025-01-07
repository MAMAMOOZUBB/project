<?php
include 'db.php';

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table from Database</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>User Table</h1>
    <h2>Heading 2</h2>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <h5>Heading 5</h5>
    <h6>Heading 6</h6>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No records found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>