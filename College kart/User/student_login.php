<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <h1>College Kart</h1>
        <form class="login-form" action="" method="post">
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <label><input type="checkbox"> Remember Me</label>
            <button type="submit">Login</button>
            <!-- <a href="#">Forgot Password?</a> -->
            <!-- <p>New to College Kart? <a href="#">Register Here</a></p> -->
        </form>
    </div>
</body>
</html>

<?php
include "db_conn.php";
// Handle the login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to validate the credentials
    $query = "SELECT * FROM stduser WHERE email = '$email' AND password = '$password'";

    // Execute the query
    // $result = mysqli_query($connection, $query);
    $result = $connection -> query($query);


    // Check if the query was successful
    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        session_start();
        while ($row = $result-> fetch_assoc()) {
            $_SESSION["SID"]=$row['SId'];
            $_SESSION['username']=$row['Name'];
            //echo $_SESSION["SID"];
        }
        // Redirect to the desired page or perform further actions
        
        header("Location: SDashboard.php");
        exit();
    } else {
        // Authentication failed
        echo "<script>alert('Invalid username or password.');</script>";
    }
        // Close the database connection
    mysqli_close($connection);
}


?>