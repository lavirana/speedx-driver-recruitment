<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include '../db.php';

$result = $conn->query("SELECT * FROM applications ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table { width:100%; border-collapse: collapse; margin-top:20px; }
        table, th, td { border:1px solid #ddd; padding:10px; }
        th { background:#1e90ff; color:white; }
        tr:nth-child(even) { background:#f9f9f9; }
    </style>
</head>
<body>
<div class="container">
    <h2>Driver Applications</h2>
    <p>Welcome, <?php echo $_SESSION['admin']; ?> | <a href="logout.php">Logout</a></p>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>License</th><th>Shift</th><th>Message</th><th>Applied On</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['license'] ?></td>
            <td><?= $row['shift'] ?></td>
            <td><?= $row['message'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
