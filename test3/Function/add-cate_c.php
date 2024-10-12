<?php
    require("../con_db.php");
    $name = $_POST['name'];
    
   
    if(isset($_POST['submit'])){
            $s_in ="INSERT INTO caterogy(cate_id, cate_name) VALUES (Null,'$name')";
            $q_in = mysqli_query($conn,$s_in);
            echo "<script>alert('เพิ่มเมนูสำเร็จ') </script>";
            echo "<script>window.location.href='../admin.php?act=mng_menu' </script>";

    }