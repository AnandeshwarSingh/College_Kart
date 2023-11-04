<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./insert.css">
    <link rel="stylesheet" href="./home.css">
    <title>College Kart</title>
</head>
<body>
    <?php

    include "./header.php";
    ?>
    <h1>Insert data of student</h1>
    <form action="" method="POST">
        <label for="id">Email ID:</label>
        <input type="text" name="email" id="id" required><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
include"db_conn.php";

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Prepare the INSERT statement
    $query = "INSERT INTO stduser (email, name, password) VALUES ('$email', '$name', '$password')";

    // Execute the INSERT query
    if (mysqli_query($connection, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    // Close the database connection
    mysqli_close($connection);
}

?>