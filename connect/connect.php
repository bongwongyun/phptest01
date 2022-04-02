<?php
    $host = "localhost";
    $user = "nexus486";
    $pass = "tuffhr7972!";
    $db = "nexus486";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");
    
    if(mysqli_connect_errno()) {
        echo "DATABASE CONNECT False";
    } else {
        // echo "DATABASE CONNECT True";
    }
?>