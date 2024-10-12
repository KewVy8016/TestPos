<?php
    $id = $_GET['id'];
    require("../con_db.php");
    $s ="DELETE FROM member WHERE member_id = $id";
    $q =mysqli_query($conn,$s);
    if(!$q){
        echo mysqli_error($conn);
    }else{
        header("Location:../admin.php?act=mng_usr");
    }