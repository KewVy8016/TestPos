<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add menu</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <form action="add-menu_c.php" method="post" enctype="multipart/form-data">
        <h1>เพิ่มเมนู</h1>
        <div class="form-group">
            <input type="file" name="upload" accept=".jpg,.png,.jpeg"id="" required>
        </div>
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="ชื่อ" required>
        </div>
        <div class="form-group">
            <input type="text" name="cate" id="" placeholder="ประเภท" required>
        </div>
        <div class="form-group">
            <input type="number" name="price" id="" placeholder="ราคา" min="1" required>
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="" value="ยืนยัน">
        </div>
        <div class="go-to">
            <a href="../admin.php?act=mng_menu">ย้อนกลับ</a>
        </div>
    </form>    
