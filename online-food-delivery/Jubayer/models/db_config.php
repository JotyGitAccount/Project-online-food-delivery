<?php
    $db_server = "localhost";
    $db_user   = "root";
    $db_pass   = "";
    $db_name   = "delivery_db";

 

    function getConnection()
         {
            global $db_server,$db_user,$db_pass,$db_name;
            $conn   = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
             return $con;
         }

 

?>