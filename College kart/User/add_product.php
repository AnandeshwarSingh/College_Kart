<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./SDashboard.css">
   
    <title>Add Product</title>
     <style>
        input[type=text], select {
  width: 100%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
       
.apartment-container{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.add{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    cursor:pointer;
    background-color: blue;
    
}
    </style>
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
    <div class="apartment-container">
<form action="" method="POST" enctype="multipart/form-data">
<h2 style="text-align: center; color:#E7BC2B; background-color:#AF5643">Add Product</h2>
    <fieldset>
       
        <legend> Add Product</legend>
        <table>
        <tr>
                <td><label for="Pname">NAME</label> </td>
                <td>  <input type="text" name="INAME" required>   <br></td>
                
            </tr>
            <tr>
                <td>        <label for="price">Description</label></td>
                <td>        <input type="text" name="Description" required>  <br></td>
            </tr>
            
            <tr>
                <td>        <label for="price">  PRICE</label></td>
                <td>        <input type="text" name="PRICE" required>  <br></td>
            </tr>
            <tr>
                <td><label for="">CATEGORY</label></td>
               <td><select name="category" id="category">
                <option value="MCA">MCA</option>
                <option value="MBA">MBA</option>
                <option value="ENGINEERING">ENGINEERING</option>
                </select>
                </td>
            </tr>
            <tr>
                <td> <label for="image">Product Image</label></td>
                <td><input type="file" name="IMAGE" required></td>
            </tr>
        </table>
        
      
        
       
        
    </fieldset>

    <input type="submit" class="add" name="submit" value="Add Product"> <br> <br>

  

</form>
</div>
</body>
</html>

<?php
        include "./db_conn.php";
    $id = $_SESSION['SID'];
    $image="";
    $valid = false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
        if(empty($_FILES["IMAGE"]["name"]))
        {
            $valid = true;
        }
        else
        {
          
        move_uploaded_file($_FILES["IMAGE"]["tmp_name"], "../image/products/".$_REQUEST["INAME"].".jpg");
        $image= $_REQUEST["INAME"].".jpg";
        }

    if (!$valid) {
       
        $name=$_POST['INAME'];
        $desc=$_POST['Description'];
        $price=$_POST['PRICE'];
        $category=$_POST['category'];

        // echo $name."<br>";
        // echo  $desc."<br>";
        // echo $price."<br>";
        // echo $category."<br>";
        // echo $id."<br>";
        // echo $image."<br>";
         $sql = "insert into products (`sid`,`Pname`, `Description`, `category`, `price`,`image`) values('$id','$name','$desc','$category','$price','$image')";
         
         $result = $connection->query($sql);
         if($result)
         {
           
            header("Location: ./sDashboard.php");
            die();
         }
         else
         {
            
         }
     die();
        
       
    
    
  
      
    }
}




?>