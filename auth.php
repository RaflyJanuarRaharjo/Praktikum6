<?php
// Check if user has access to a page
function checkAccess($allowedRoles) {
    // Start session if not already started
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    // Check if user is logged in
    if(!isset($_SESSION['role'])) {
        // User is not logged in, redirect to login page
        header('Location: login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
    
    // Check if user has an allowed role
    if(!in_array($_SESSION['role'], $allowedRoles)) {
        // Log the unauthorized access attempt
        logAccessAttempt($_SESSION['username'], $_SESSION['role'], $_SERVER['REQUEST_URI']);
        
        // Redirect to unauthorized page
        header('Location: unauthorized.php?page=' . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
}

// Log unauthorized access attempts
function logAccessAttempt($username, $role, $page) {
    // In a real application, you would log this to a database or file
    // For this example, we'll just create a simple log entry
    $logEntry = date('Y-m-d H:i:s') . " - User: $username, Role: $role, Attempted to access: $page\n";
    
    // You could write this to a log file
    // file_put_contents('access_log.txt', $logEntry, FILE_APPEND);
}
?>
