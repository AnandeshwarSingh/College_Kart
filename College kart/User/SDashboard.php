<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./SDashboard.css">
    <title>College Kart</title>
</head>
<body>
    <?php 
    include "./header.php";
    ?>

    <div>
            <ul>
                <li><a  href="./update_profile.php">Update Profile</a></li>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="my_products.php">View Product</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
            <div style="margin-left:25%;padding:1px 16px;height:1000px;">
                
            </div>
        </div>

    </div>
</body>
</html>
