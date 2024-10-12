<?php
    session_start();
    require("../con_db.php");
    $username = $_SESSION['usr_name'];
    $pass = $_POST['password'];
    $pass_new = $_POST['password_new'];
    $pass_md = md5($pass);
    $pass_newmd = md5($pass_new);
    if(isset($_POST['submit'])){
        $s ="SELECT * FROM member WHERE member_username = '$username' AND member_password ='$pass_md'";
        $q = mysqli_query($conn,$s);
        $row = mysqli_fetch_array($q);

        if($row['member_password'] != $pass_md){
            echo "<script>alert('รหัสผิด') </script>";
            echo "<script>window.location.href='edit-pass.php' </script>";
        }else{
            $s2 ="UPDATE member SET member_password='$pass_newmd' WHERE member_username = '$username'";
            $q2 = mysqli_query($conn,$s2);
            echo "<script>alert('เเก้ไขสำเร็จ') </script>";
            echo "<script>window.location.href='../User/profile.php' </script>";
        }
              


    }