<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="./home.css">
	<style>
#apartment-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#apartment-details td, #apartment-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#apartment-details tr{
	transition: all 0.6s;
}

#apartment-details tr:nth-child(even){background-color: #f2f2f2;}

#apartment-details tr:hover {background-color: #ddd;}

#apartment-details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: brown;
  color: white;
}
	</style>
</head>
<body>
  <?php
   include "./header.php"; ?>
  <!-- <div class="navbar">
        <a href="#default" class="logo">College Kart</a>
        <a  href="./insert.php">Add Student</a>
        <a href="show_student.php">Remove Student</a>
        <a href="./home.php" style="float: right;">Logout</a>
    </div> -->
<table id="apartment-details">
    <thead>
        <tr >
            <th>SId</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Class</th>
            <th>Address</th>
            <th>password</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include"db_conn.php";

        $sql="select * from stduser ";
        $result=$connection->query($sql);
        if($result->num_rows>0)
        {
            while($value=$result->fetch_assoc())
            {
                ?>
                <tr>
                    <td><?php echo $value['SId'] ?> </td>
                    <td><?php echo $value['Name'] ?> </td>
                    <td><?php echo $value['Email'] ?> </td>
                    <td><?php echo $value['contact'] ?> </td>
                    <td><?php echo $value['class'] ?> </td>
                    <td><?php echo $value['location'] ?> </td>
                    <td><?php echo $value['password'] ?> </td>
                    <td><a href="./remove_student.php?sid=<?php echo $value['SId'] ?>" onclick="return confirm('Are you really want to remove this student ?')"><button >Remove</button></a></td>             
         <?php
            }
        }
        ?>