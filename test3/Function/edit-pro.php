<?php
    session_start();
    $id = $_SESSION['usr_id'];
    require("../con_db.php");
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];   
    
    if(isset($_POST['submit'])){
        if(isset($_FILES['upload'])){
            $filename = $_FILES['upload']['name'];
            $type = explode(".",$_FILES['upload']['name']);
            $newname = $id .".". $type[1];
            $tar_dir = "../Pic/user/";
            $tar_file = $tar_dir . $newname;
            move_uploaded_file($_FILES['upload']['tmp_name'],$tar_file);
                $s_1 ="UPDATE member SET member_img='$newname' WHERE member_id = $id";
                $q_1 = mysqli_query($conn,$s_1);
                header("Location:../User/profile.php");                  
        }
        $s ="UPDATE member SET member_name='$name',member_lastname='$lastname' WHERE member_id = '$id'";
        $q = mysqli_query($conn,$s);
        if(!$q){
            echo mysqli_error($conn);
        }else{
            header("Location:../User/profile.php");
        }

    }