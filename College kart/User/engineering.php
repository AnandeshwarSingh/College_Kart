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
</head>
<body>
    <?php 
    include "header.php";
    ?>
    <div class="image">
        <img src="./../image/two.jpg" alt="Image Description">
    </div>
    <div class="content">
        <div class="categories">
            <ul>
                
                <a href="./engineering.php">Engineering</a>
                <!-- <li>Engineering</li>
                <li>MCA</li>
                <li>MBA</li> -->
            </ul>
        </div>
    </div>
</body>
</html>