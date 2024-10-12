<?php
session_start();
    require("../con_db.php");
    $username = $_POST['username'];  
    $pass = $_POST['password'];
    $pass_md = md5($pass);

    if(isset($_POST['submit'])){
        $s ="SELECT * FROM member WHERE member_username = '$username' AND member_password ='$pass_md'";
        $q = mysqli_query($conn,$s);
        $row = mysqli_fetch_array($q);

        if($row['member_level'] == 'member' && $row['member_status'] == 'unidentify'){
            echo "<script>alert('รออนุมัติการเข้าใช้') </script>";
           echo "<script>window.location.href='../login.php' </script>";
        }elseif($row['member_level'] == 'member' && $row['member_status'] == 'access'){
            $_SESSION['usr_name'] = $username;
            $_SESSION['usr_id'] = $row['member_id'];
            echo "<script>alert('เข้าสู่ระบบสำเร็จ') </script>";
           echo "<script>window.location.href='../index.php?act=home' </script>";
        }elseif($row['member_level'] == 'admin' && $row['member_status'] == 'access'){
            $_SESSION['usr_name'] = $username;
            $_SESSION['usr_id'] = $row['member_id'];
            echo "<script>alert('เข้าสู่ระบบสำเร็จ') </script>";
           echo "<script>window.location.href='../admin.php?act=mng_usr' </script>";
        }else{
            echo "<script>alert('รหัสผ่านหรือชื่อผู้ใช้ผิด') </script>";
            echo "<script>window.location.href='../login.php' </script>";
        }
              


    }