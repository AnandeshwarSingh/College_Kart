    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	
</head>
<body>
    <div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			<?php
				

            //    session_start();
                   include "./db_conn.php";

                $sql = "SELECT * from products ";
                 $result=$connection -> query($sql);
               
                if($result->num_rows>0)   
                { 
                ?>

                                        <div class="w3ls-titles text-center mb-2">
                                <h3 class="title">All Products</h3>
                                <span>
                                    <i class="fas fa-user-md"></i>
                                </span>
                            
                            </div>
                            <div class="d-flex">
                                
                                <div class="row package-grids mt-4" style="padding-left: 50px;">
                            <?php	
                            while($value=$result->fetch_assoc())
                                {     
                                ?>
                                    <div class="col-md-4 pricing">
                                    
                                    <div class="price-top col-md-10" >
                                        
                                            <img src="../image/products/<?php echo $value['Pname']; ?>.jpg" alt="" style="border:1px #000 solid; width:370px; height:300px; box-sizing: border-box; padding: 5px; " class="img-fluid" />
                                    
                                        <h3><?php echo htmlentities($value['Pname']);?> 
                                        </h3>
                                    </div>
                                    <div class="price-bottom p-3 col-md-10 ">
                                <table class="table table-bordered">

                    <tbody>
                    <tr>
                        <th>Description</th>
                        <td><?php echo htmlentities($value['Description']);?></td>
                    </tr>
                    <tr>
                        <th>price</th>
                        <td><?php echo htmlentities($value['price']);?></td>
                    </tr>
                    <?php
                    $id=$value['sid'];
                     $sql1 = "SELECT * from stduser where SId=$id";
                    $result1=$connection -> query($sql1);
               
                if($result1->num_rows>0)   
                { 
                    if($value1=$result1->fetch_assoc())
                    {?>
                     <tr>
                        <th>Seller Name</th>
                        <td><?php echo htmlentities($value1['Name']);?></td>
                    </tr>

                        <tr>
                        <th>Contact</th>
                        <td><?php echo htmlentities($value1['contact']);?></td>
                    </tr>

                            <tr>
                           
                    </tbody>
                </table>
            </div>
                                </div> <?php }}}}
                else
                {
                echo htmlentities("No Record Found");

                }


             ?>
</div>
        </div>
        </div>
        </div>
</body>
</html>