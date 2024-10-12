<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <form action="add-usr_c.php" method="post">
        <h1>เพิ่มสมาชิก</h1>
        <div class="form-group">
            <input type="text" name="username" id="" placeholder="กรอกชื่อผู้ใช้" rered>
        </div>
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="กรอกชื่อ" required>
        </div>
        <div class="form-group">
            <input type="text" name="lastname" id="" placeholder="กรอกนามสกุล" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" placeholder="กรอกรหัสผ่าน" required>
        </div>
        <div class="form-group">
            <input type="password" name="password_conf" id="" placeholder="ยืนยันรหัสผ่าน" requred>
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="" value="ยืนยัน">
        </div>
        <div class="go-to">
            <a href="../admin.php?act=mng_usr">ย้อนกลับ</a>
        </div>
    </form>    
