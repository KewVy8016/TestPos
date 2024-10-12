<?php
$id = $_GET['id'];
    require("../con_db.php");
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $status  = $_POST['status'];
    if(isset($_POST['submit'])){
        $s ="UPDATE member SET member_username='$username',member_name='$name',member_lastname='$lastname',member_status='$status' WHERE member_id = '$id'";
        $q = mysqli_query($conn,$s);
        if(!$q){
            echo mysqli_error($conn);
        }else{
            header("Location:../admin.php?act=mng_usr");
        }

    }
