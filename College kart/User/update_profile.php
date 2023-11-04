<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../insert.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./SDashboard.css">
   
    <style>
        input[type="email"],
        input[type="contact"]{
        width: 90%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
}
    </style>
    <title>College Kart</title>
</head>
<body>
<?php
     session_start();
      include "./header.php";

?>
<div>
            <ul>
                <li><a  href="./update_profile.php">Update Profile</a></li>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="my_products.php">My Product</a></li>
                <!-- <li><a href="#contact">Contact</a></li> -->
            </ul>
            
        </div>

    </div>
    <form action="#" method="post">
        
        <?php 

       
    include "./db_conn.php";
    $id = $_SESSION['SID'];
           $query = "SELECT * FROM stduser WHERE sid=$id";

            $result = $connection -> query($query);

            if ($result && mysqli_num_rows($result) > 0) 
            {
                while ($row = $result-> fetch_assoc()) {?>

                    
               
        <label for="id">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['Name'] ;?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['Email'] ;?>" readonly><br><br>
        <label for="contact">Contact No:</label>
        <input type="contact" name="contact" id="contact" value="<?php echo $row['contact'] ;?>" required><br><br>
        <label for="class">Class:</label>
        <input type="text" name="class" id="class" value="<?php echo $row['class'] ;?>" required><br><br>
        <label for="location">Location:</label>
        <input type="text" name="location" value="<?php echo $row['location'] ;?>" required><br><br>
        <label for="location">Password:</label>
        <input type="password" name="password" value="<?php echo $row['password'] ;?>"required><br><br>
        <input type="submit" name="update" value="Update Profile">
        <?php }} ?>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['update']))
  {
    $uid=$_SESSION['SID'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $class=$_POST['class']; 
    $location=$_POST['location'];
    $password=$_POST['password']; 
  $sql="update stduser set Name='$name',Email = '$email', Contact='$contact', class='$class',location='$location',password='$password'  where SId=$id";
     $query = $connection->query($sql);
    if($query)
    {
      echo '<script>alert("Profile has been updated")</script>';

    }
  }
  ?>