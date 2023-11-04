
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./home.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>College Kart</title>
</head>
<body>
<div class="navbar">
        <a href="#default" class="logo">College Kart</a>
        <a  href="./home.php">Home</a>
        <!-- <a href="./User/view_product.php">products</a> -->
        <a href="./about.php">About</a>
        </div>
    <div class="login-container">
        <h1>College Kart</h1>
        <h2>Admin Login</h2>
        <form class="login-form" action="" method="post">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <label><input type="checkbox"> Remember Me</label>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>

<?php
include "db_conn.php";
// Database credentials
// $hostname = "localhost";
// $username = "root";
// $password = "ROOT";
// $database = "user";

// Create a database connection
//$connection = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// Handle the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to validate the credentials
    $query = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        // Redirect to the desired page or perform further actions
        header("Location: admin.php");
        echo "Login successful!";
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
        // Close the database connection
    mysqli_close($connection);
}
?>