<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <title>College Kart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2em;
            line-height: 1.6;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #3498db;
        }
        p {
            margin: 1em 0;
        }
    </style>
</head>
<body>
     <?php 
    include "header.php";
    ?>
    <div class="content">
        <div class="categories">
            
        </div>
    </div>
    <header>
        <h1>About Us</h1>
    </header>
    <div class="container">
        <h2>Welcome to College Kart</h2>
        <p>At College Kart, we are passionate about fostering a vibrant community of students who share a common love for books and knowledge. Our platform provides a seamless and user-friendly experience for buying and selling books within your college community. Whether you're a student looking for affordable course materials or a book enthusiast wanting to share your collection, College Kart is the perfect destination for you.</p>

        <h2>Our Mission</h2>
        <p>Our mission is to empower college students by providing them with an accessible and efficient platform to exchange books, enhance their academic journey, and connect with fellow learners. We believe that education should be accessible to all, and through College Kart, we're committed to making course materials more affordable and readily available.</p>

        <!-- More content goes here -->

        <h2>Contact Us</h2>
        <p>Have questions, suggestions, or feedback? We'd love to hear from you! Contact our support team at <a href="mailto:support@collegekart.com">support@collegekart.com</a> for assistance.</p>

        <p>Thank you for choosing College Kart as your go-to platform for all things books. Together, let's make learning affordable, accessible, and enjoyable.</p>
        <p><strong>The College Kart Team</strong></p>
    </div>
</body>
</html>