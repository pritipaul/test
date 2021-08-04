<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server,$username,$password);

    if (!$conn) {
        die("Error Connection" . mysqlp_connect_error());

    }
    // echo("Successfully Connect");
    
    
?>