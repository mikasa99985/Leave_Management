<?php require_once "_dbcon.php"?>
<?php session_start(); ?>

<?php
echo "hello world!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Welcome to Our Website</title>
    
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<header>
        <h1>Welcome to Our Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>
    
    <main>
        <section>
            <h2>About Us</h2>
            <p>Welcome to our website. We are a dedicated team of professionals...</p>
        </section>
        <section>
            <h2>Our Services</h2>
            <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
            </ul>
        </section>
        
        </main>
        <footer>
        <p>&copy; 2023 Our Website. All rights reserved.</p>
    </footer>
</body>
</html>

<?php

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
        
?>