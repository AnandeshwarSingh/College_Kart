<?php

include"db_conn.php";
    $sid=$_GET['sid'];
        $sql="DELETE FROM stduser WHERE SId ='$sid'";
        $result=$connection->query($sql);
        if($result)
        {
            header('Location: ./show_student.php');
        }

?>