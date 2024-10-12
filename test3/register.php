<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>
    <form action="Function/register_c.php" method="post">
        <h1>สมัครสมาชิก</h1>
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
            <a href="login.php">มีบัญชีผู้ใช้เเล้ว</a>
        </div>
    </form>    





</body>
</html>