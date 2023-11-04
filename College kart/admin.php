<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }
        .image-container img {
            display: block;
            max-width: 100%;
        }
        .image-text {
            position: absolute;
            top: 50%;
            left: 48%;
            transform: translate(-50%, -50%);
            font-size: 54px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
    <title>College Kart</title>
</head>
<body>
    <div class="navbar">
        <a href="#default" class="logo">College Kart</a>
        <a  href="./insert.php">Add Student</a>
        <a href="show_student.php">Remove Student</a>
        <a href="show_products.php">View Products</a>
        <a href="./home.php" style="float: right;">Logout</a>
    </div>
    <div>
        <div>
            <img src="./image/admin.jpg" alt="A beautiful landscape" width="99.80%" height="600" style="border: 2px solid black;">
            <div class="image-text">Welcome to Admin Work Place !</div>
        </div>
    </div>
</body>
</html>