<?php
    require("../con_db.php");
    $name = $_POST['name'];
    $cate = $_POST['cate'];
    $price = $_POST['price'];
    echo $_FILES['upload']['name'];
    if(isset($_POST['submit'])){
        if(isset($_FILES['upload'])){
            $filename = $_FILES['upload']['name'];
            $tar_dir = "../Pic/food/";
            $tar_file = $tar_dir . $filename;
            move_uploaded_file($_FILES['upload']['tmp_name'],$tar_file);
                $s_in ="INSERT INTO food(food_id, food_img, food_name, food_caterogy, food_price) VALUES (Null,'$filename','$name','$cate','$price')";
                $q_in = mysqli_query($conn,$s_in);
            echo "<script>alert('เพิ่มเมนูสำเร็จ') </script>";
            echo "<script>window.location.href='../admin.php?act=mng_menu' </script>";
        }

    }
