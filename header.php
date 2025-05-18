<header>
    <div class="header-container">
        <a href="index.php" class="logo">Role-Based Auth App</a>
        <nav>
            <ul>
                <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <li><a href="page-a.php" class="admin-link">Page A (Admin Only)</a></li>
                <?php else: ?>
                    <li><a href="page-a.php" class="disabled-link" title="Admin access only">Page A (Admin Only)</a></li>
                <?php endif; ?>
                
                <?php if(isset($_SESSION['role'])): ?>
                    <li><a href="page-b.php">Page B (Members)</a></li>
                <?php else: ?>
                    <li><a href="page-b.php">Page B (Members)</a></li>
                <?php endif; ?>
                
                <li><a href="page-c.php">Page C (Public)</a></li>
                
                <?php if(isset($_SESSION['role'])): ?>
                    <li><a href="logout.php" class="nav-btn">Logout (<?php echo $_SESSION['role']; ?>)</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="nav-btn primary">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
