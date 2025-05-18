<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Role-Based Auth App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="welcome-box">
            <h1>Welcome to the Role-Based Auth App</h1>
            <p>A simple application with different access levels for users</p>
            
            <div class="info-box">
                <h2>Available Pages:</h2>
                <ul>
                    <li><a href="page-a.php">Page A (Admin Only)</a></li>
                    <li><a href="page-b.php">Page B (Admin and Member)</a></li>
                    <li><a href="page-c.php">Page C (Public)</a></li>
                </ul>
            </div>
            
            <div class="info-box">
                <h2>Authentication:</h2>
                <?php if(isset($_SESSION['role'])): ?>
                    <p>You are logged in as: <strong><?php echo $_SESSION['role']; ?></strong></p>
                    <a href="logout.php" class="btn">Logout</a>
                <?php else: ?>
                    <p>You are not logged in.</p>
                    <a href="login.php" class="btn primary">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
