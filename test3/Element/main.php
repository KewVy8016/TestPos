<?php
if($_GET['act'] == 'home'){
    include("User/home.php");
}elseif($_GET['act'] == 'profile'){
    include("User/profile.php");
}elseif($_GET['act'] == 'order'){
    include("User/order.php");
}