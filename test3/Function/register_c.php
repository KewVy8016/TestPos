<?php
    require("../con_db.php");
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $pass = $_POST['password'];
    $pass_con = $_POST['password_conf'];
    $check_pass = $pass == $pass_con;

    if(isset($_POST['submit'])){
        $s ="SELECT * FROM member WHERE member_username = '$username'";
        $q = mysqli_query($conn,$s);
        $row = mysqli_fetch_array($q);

        if($row['member_username'] > 0){
           echo "<script>alert('มีบัญชีผู้ใช้นี้เเล้ว') </script>";
           echo "<script>window.location.href='../register.php' </script>";
        }elseif(!$check_pass){
            echo "<script>alert('ยืนยันรหัสไม่ตรงกัน') </script>";
           echo "<script>window.location.href='../register.php' </script>";
        }else{
            $pass_md = md5($pass);
            $s_in ="INSERT INTO member(member_id, member_img, member_username, member_name, member_lastname, member_password, member_level, member_status) VALUES (Null,Null,'$username','$name','$lastname','$pass_md','member','unidentify')";
            $q_in = mysqli_query($conn,$s_in);
            echo "<script>alert('สมัครสมาชิกสำเร็จ') </script>";
           echo "<script>window.location.href='../login.php' </script>";
        }


    }
