<?php
if($_GET['act'] == 'mng_usr'){
    include("Admin]/manage_usr.php");
}elseif($_GET['act'] == 'mng_menu'){
    include("Admin]/manage_menu.php");
}elseif($_GET['act'] == 'mng_ord'){
    include("Admin]/manage_ord.php");
}