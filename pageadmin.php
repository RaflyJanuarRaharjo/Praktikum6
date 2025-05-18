<?php
require_once 'auth.php';
// Check if user has admin role - STRICTLY ADMIN ONLY
checkAccess(['admin']);

// Additional security check - belt and suspenders approach
if(isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    header('Location: unauthorized.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page A - Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="admin-page">
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="admin-dashboard">
            <h1>Admin Dashboard (Page A)</h1>
            <p class="page-description">This page can only be accessed by administrators.</p>
            
            <div class="alert admin-alert">
                <p><strong>ADMIN ONLY AREA:</strong> You are viewing this page because you are logged in as an admin.</p>
            </div>
            
            <div class="dashboard-grid">
                <div class="dashboard-card">
                    <h3>User Statistics</h3>
                    <div class="stat">
                        <span class="stat-value">254</span>
                        <span class="stat-label">Total Users</span>
                    </div>
                    <div class="stat">
                        <span class="stat-value">18</span>
                        <span class="stat-label">New Today</span>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <h3>System Status</h3>
                    <div class="status-item">
                        <span class="status-label">Server Load:</span>
                        <span class="status-value">28%</span>
                    </div>
                    <div class="status-item">
                        <span class="status-label">Database:</span>
                        <span class="status-value">Online</span>
                    </div>
                    <div class="status-item">
                        <span class="status-label">Cache:</span>
                        <span class="status-value">Optimized</span>
                    </div>
                </div>
                
                <div class="dashboard-card">
                    <h3>Admin Controls</h3>
                    <button class="btn admin-btn">Purge Cache</button>
                    <button class="btn admin-btn">Backup Database</button>
                    <button class="btn admin-btn">System Settings</button>
                </div>
                
                <div class="dashboard-card">
                    <h3>Recent Activity</h3>
                    <ul class="activity-list">
                        <li>User account created <span class="time">2 min ago</span></li>
                        <li>System update completed <span class="time">1 hour ago</span></li>
                        <li>Database backup <span class="time">3 hours ago</span></li>
                        <li class="access-attempt">Unauthorized access attempt by member <span class="time">5 min ago</span></li>
                    </ul>
                </div>
            </div>
            
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
