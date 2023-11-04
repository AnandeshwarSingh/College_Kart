<?php
$sname = "localhost";
$uname = "root";
$password ="ROOT";

$db_name="col_db";

$connection = mysqli_connect($sname, $uname, $password, $db_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>