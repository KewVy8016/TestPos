<?php
    $host = "localhost";
    $name = "root";
    $pass = "";
    $db = "test3";

    $conn = mysqli_connect($host,$name,$pass,$db);
    
    if(!$conn){
        echo mysqli_error($conn);
    }