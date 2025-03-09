<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h2>Welcome to Dashboard</h2>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        <!-- Rest of your dashboard content -->
    </div>
</body>
</html>