<?php
session_start();
$attemptedPage = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'a restricted page';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="unauthorized-box">
            <div class="error-icon">⚠️</div>
            <h1>Access Denied</h1>
            
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'member'): ?>
                <p>You are logged in as a <strong>member</strong>, but the page you attempted to access (<?php echo $attemptedPage; ?>) requires <strong>admin</strong> privileges.</p>
                <div class="alert admin-alert">
                    <p>Members cannot access admin-only pages. Please contact an administrator if you need access.</p>
                </div>
            <?php else: ?>
                <p>You don't have permission to access this page.</p>
            <?php endif; ?>
            
            <div class="action-buttons">
                <?php if(!isset($_SESSION['role'])): ?>
                    <a href="login.php" class="btn primary">Login</a>
                <?php endif; ?>
                <a href="index.php" class="btn">Back to Home</a>
                <a href="page-c.php" class="btn">Go to Public Page</a>
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'member'): ?>
                    <a href="page-b.php" class="btn primary">Go to Member Page</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
