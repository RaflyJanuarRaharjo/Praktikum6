<?php
session_start();
// No access check needed - public page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page C - Public Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="public-page">
    <?php include 'header.php'; ?>
    
    <div class="container">
        <div class="public-content">
            <h1>Public Information (Page C)</h1>
            <p class="page-description">This page can be accessed by anyone, regardless of authentication status.</p>
            
            <div class="alert public-alert">
                <p>This is a public page that anyone can view.</p>
            </div>
            
            <div class="public-sections">
                <section class="info-section">
                    <h2>About Our Company</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl.</p>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </section>
                
                <section class="info-section">
                    <h2>Our Services</h2>
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">🚀</div>
                            <h3>Fast Delivery</h3>
                            <p>Quick and reliable delivery to your doorstep.</p>
                        </div>
                        <div class="service-card">
                            <div class="service-icon">💼</div>
                            <h3>Professional Support</h3>
                            <p>24/7 customer support for all your needs.</p>
                        </div>
                        <div class="service-card">
                            <div class="service-icon">🔒</div>
                            <h3>Secure Payments</h3>
                            <p>Your transactions are always protected.</p>
                        </div>
                    </div>
                </section>
                
                <section class="info-section">
                    <h2>Contact Us</h2>
                    <p>Have questions? Reach out to us using the contact form below:</p>
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn primary">Send Message</button>
                    </form>
                </section>
            </div>
            
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
