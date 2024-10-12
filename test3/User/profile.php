<?php
    session_start();
    $id = $_SESSION['usr_id'];
    require("../con_db.php");
    $s ="SELECT * FROM member WHERE member_id = $id";
    $q = mysqli_query($conn,$s);
    $row = mysqli_fetch_array($q);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <form action="../Function/edit-pro.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <h1>เเก้ไขโปรไฟล์</h1>
        <div class="form-group">
            <img src="../Pic/user/<?php echo $row['member_img']?>" style="width:150px; height:150px; object-fit:cover;">
        </div>
        <div class="form-group">
            <input type="file" name="upload" accept=".jpg,.jpeg,.png">
        </div>
        <div class="form-group">
            <input type="text" name="username" id="" placeholder="กรอกชื่อผู้ใช้" required value="<?php echo $row['member_username'] ?>" disabled>
        </div>
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="กรอกชื่อ" required value="<?php echo $row['member_name'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="lastname" id="" placeholder="กรอกนามสกุล" required value="<?php echo $row['member_lastname'] ?>">
        </div> 
        <div class="submit">
            <input type="submit" name="submit" id="" value="ยืนยัน">
        </div>
        <div class="go-to" style="display:flex; gap:20px;">
            <a href="../index.php?act=home">ย้อนกลับ</a>
            <a href="../Function/edit-pass.php">เเก้ไขรหัสผ่าน</a>
        </div>
    </form>    





</body>
</html>