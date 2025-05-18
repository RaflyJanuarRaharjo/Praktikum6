<?php
require_once 'auth.php';
// Check if user has admin or member role
checkAccess(['admin', 'member']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page B - Content Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="member-page">
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="content-management">
            <h1>Content Management (Page B)</h1>
            <p class="page-description">This page can be accessed by both administrators and members.</p>
            
            <div class="alert member-alert">
                <p>You are viewing this page because you are logged in as an admin or member.</p>
            </div>
            
            <div class="content-tools">
                <div class="tool-section">
                    <h2>Your Content</h2>
                    <div class="content-list">
                        <div class="content-item">
                            <div class="content-info">
                                <h3>Getting Started Guide</h3>
                                <p>Last updated: May 5, 2023</p>
                            </div>
                            <div class="content-actions">
                                <button class="btn small">Edit</button>
                                <button class="btn small outline">Delete</button>
                            </div>
                        </div>
                        
                        <div class="content-item">
                            <div class="content-info">
                                <h3>Product Documentation</h3>
                                <p>Last updated: April 18, 2023</p>
                            </div>
                            <div class="content-actions">
                                <button class="btn small">Edit</button>
                                <button class="btn small outline">Delete</button>
                            </div>
                        </div>
                        
                        <div class="content-item">
                            <div class="content-info">
                                <h3>User Manual</h3>
                                <p>Last updated: March 30, 2023</p>
                            </div>
                            <div class="content-actions">
                                <button class="btn small">Edit</button>
                                <button class="btn small outline">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tool-section">
                    <h2>Create New Content</h2>
                    <form class="simple-form">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" placeholder="Enter content title">
                        </div>
                        
                        <div class="form-group">
                            <label for="content-type">Content Type</label>
                            <select id="content-type" name="content-type">
                                <option value="article">Article</option>
                                <option value="guide">Guide</option>
                                <option value="documentation">Documentation</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" rows="4" placeholder="Enter your content here..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn primary">Create Content</button>
                    </form>
                </div>
            </div>
            
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
