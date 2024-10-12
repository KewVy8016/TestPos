<?php
require("con_db.php");
    session_start();
    if(!isset($_SESSION['usr_name'])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
    <div class="container">
        <?php 
            include("Element/admin-navbar.php") ;
        ?>
        <?php 
            include("Element/admin-main.php") ;
        ?>

    </div>
</body>
</html>