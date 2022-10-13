<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "assignment_satu";
    
    $link = mysqli_connect($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()){
        throw new Exception("MySQL connection error : " .mysqli_connect_error());
    }
?>
