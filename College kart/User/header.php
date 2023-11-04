
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
        <!-- <a href="#">Categories</a> -->
        <a href="./about.php">About</a>

        <!---  -->

        <div class="dropdown" style="float:right;">
            
            <button class="dropbtn"><?php echo $_SESSION['username'] ?></button>
            <div class="dropdown-content">
                <a href="./SDashboard.php">Dashbord</a>
                <a href="./logout.php">Logout</a>
            </div>
        </div>
        
    </div>
</body>
</html>
