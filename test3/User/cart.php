<?php
require("../con_db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="../CSS/cart.css">
</head>
<body>
    <div class="container">
        <form action="../Function/add-cart.php?act=update" method="post">
            <h1>ตระกร้า</h1>
            <table>
                <?php foreach($_SESSION['cart'] as $prd => $qty) :?>
                <tr>
                    <?php  $sql = "SELECT * FROM food WHERE food_id = $prd";?>
                    <?php  $q = mysqli_query($conn,$sql);
                            $current_sum = 0;
                            echo mysqli_error($conn);
                            $row = mysqli_fetch_array($q);
                            $sum = $row['food_price']*$qty;
                            $current_sum += $sum;
                            $total[] = $current_sum ;
                    ?>
                        <th><img src="../Pic/food/<?php echo $row['food_img']?>" alt=""></th>
                        <th><p><?php echo $row['food_name']?></p></th>
                        <th><p>จำนวน <input type="number" name="amount[<?php echo $prd?>]" value="<?php echo $qty?>" min="1" ></p></th>
                        <th><p><?php echo number_format($sum,2)?> บาท</p></th>
                        <th><a href="../Function/add-cart.php?act=remove&id=<?php echo $prd ?>">ลบ</a></th>   
                </tr>
                <?php endforeach ;?>
            </table>
            <div class="submit">
                <a href="../index.php?act=home">ย้อนกลับ</a>
                <div class="total"> <p>ราคา</p> <P><?php echo number_format(array_sum($total),2) ?> บาท</P></div>
                <?php $_SESSION['total'] = array_sum($total) ?>
                <input type="submit" value="อัพเดท">
                <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='checkout.php?act=confirm'" />
            </div>
        </form>
    </div>
</body>
</html>