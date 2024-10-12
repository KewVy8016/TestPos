<?php
    $id = $_GET['id'];
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
    <title>Edit user</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <form action="edit-usr_c.php?id=<?php echo $id ?>" method="post">
        <h1>เเก้ไขข้อมูลผู้ใช้</h1>
        <div class="form-group">
            <input type="text" name="username" id="" placeholder="กรอกชื่อผู้ใช้" required value="<?php echo $row['member_username'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="กรอกชื่อ" required value="<?php echo $row['member_name'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="lastname" id="" placeholder="กรอกนามสกุล" required value="<?php echo $row['member_lastname'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="status" id="" placeholder="สถานะ" required value="<?php echo $row['member_status'] ?>">
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="" value="ยืนยัน">
        </div>
        <div class="go-to">
            <a href="../admin.php?act=mng_usr">ย้อนกลับ</a>
        </div>
    </form>    





</body>
</html>