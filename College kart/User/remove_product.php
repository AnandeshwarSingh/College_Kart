<?php

include"db_conn.php";
    $pid=$_GET['pid'];
        $sql="DELETE FROM products WHERE pid ='$pid'";
        $result=$connection->query($sql);
        if($result)
        {
            header('Location: ./my_products.php');
        }

?>