
<?php
session_start();

// Redirect if already logged in
if(isset($_SESSION['role'])) {
    header('Location: index.php');
    exit;
}

$error = '';

// Process login form
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? 'admin';
    
    // Simple validation
    if(empty($username) || empty($password)) {
        $error = 'Username and password are required';
    } else {
        // Check credentials (in a real app, this would check against a database)
        if($role === 'admin' && $username === 'admin' && $password === 'admin123') {
            $_SESSION['role'] = 'admin';
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else if($role === 'member' && $username === 'member' && $password === 'member123') {
            $_SESSION['role'] = 'member';
            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            $error = 'Invalid credentials';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Role-Based Auth App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="form-container">
            <h1>Login</h1>
            <p>Sign in to access restricted pages</p>
            
            <?php if($error): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username">
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                </div>
                
                <div class="form-group">
                    <label>Role</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="role" value="admin" checked> Admin
                        </label>
                        <label>
                            <input type="radio" name="role" value="member"> Member
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn primary">Login</button>
            </form>
            
            <div class="demo-credentials">
                <p>Demo Credentials:</p>
                <p>Admin: admin / admin123</p>
                <p>Member: member / member123</p>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
