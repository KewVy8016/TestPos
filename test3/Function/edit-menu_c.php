<?php
$id = $_GET['id'];
    require("../con_db.php");
    $name = $_POST['name'];
    $cate = $_POST['cate'];
    $price = $_POST['price'];
    
        if(isset($_POST['submit'])){
            if(isset($_FILES['upload'])){
                $filename = $_FILES['upload']['name'];
                $tar_dir = "../Pic/food/";
                $tar_file = $tar_dir . $filename;
                move_uploaded_file($_FILES['upload']['tmp_name'],$tar_file);
                    $s_1 ="UPDATE food SET food_img='$filename' WHERE food_id = $id";
                    $q_1 = mysqli_query($conn,$s_1);
                    header("Location:../admin.php?act=mng_menu");                   
            }
        if(isset($name)||isset($cate)||isset($price)){
                $s_2 ="UPDATE food SET food_name='$name',food_caterogy='$cate',food_price='$price' WHERE food_id = $id";
                $q_2 = mysqli_query($conn,$s_2);
                header("Location:../admin.php?act=mng_menu");
        }

    }
