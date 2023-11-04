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
    <div class="navbar">
        <a href="#default" class="logo">College Kart</a>
        <a  href="./home.php">Home</a>
        <a href="#">Categories</a>
        <a href="./about.php">About</a>
        <a href="./index.php">Admin</a>
        <a href="./student_login.php" style="float: right;"><?php echo $_SESSION['username'] ?></a>
    </div>
</body>
</html>
