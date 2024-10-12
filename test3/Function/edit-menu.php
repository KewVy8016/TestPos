<?php
    $id = $_GET['id'];
    require("../con_db.php");
    $s ="SELECT * FROM food WHERE food_id = $id";
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
    <form action="edit-menu_c.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <h1>เเก้ไขเมนู</h1>
        <div class="form-group">
            <input type="file" name="upload" id="" placeholder="กรอกชื่อผู้ใช้"  value="<?php echo $row['food_img'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="กรอกชื่อผู้ใช้"  value="<?php echo $row['food_name'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="cate" id="" placeholder="กรอกชื่อ"  value="<?php echo $row['food_caterogy'] ?>">
        </div>
        <div class="form-group">
            <input type="text" name="price" id="" placeholder="กรอกนามสกุล"  value="<?php echo $row['food_price'] ?>">
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