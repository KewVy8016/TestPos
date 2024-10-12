<?php
     $id = $_SESSION['usr_id'];
  
?>


<style>
    .sort{
        width: 100%;
    }
    form{
        width: 100%;
        display:flex;
        justify-content:center;
    }
    form input[type="search"]{
        width: 60%;
        padding:5px;
    }
    table{
        margin-top:10px;
        width:100%;

    }
    th,td{
        padding:10px;
        text-align:center;
    }
    td a{
        text-decoration:none;
    }
    img{
        width:70px;
        height:70px;
        object-fit:cover;
    }
</style>


<div class="content">
    <div class="sort">
        <form action="index.php?act=home" method="get">
            <input type="text" name="sort">
            <input type="hidden" name="act" value="home">
            <input type="submit" value="ค้นหา">
        </form>
    </div>
    <table>
        <tr>
            <th>เมนู</th>
            <th>ภาพ</th>
            <th>ราคา</th>
            <th style="width:10%;"></th>
            
        </tr>
        <?php      
            if(!isset($_GET['sort'])){
                $s ="SELECT * FROM food WHERE 1";
                $q = mysqli_query($conn,$s); 
            }else{
                $sort = $_GET['sort'];
                $s ="SELECT * FROM food WHERE food_caterogy like '%$sort%'";
                $q = mysqli_query($conn,$s);
            }
        ?>
        <?php while($row = mysqli_fetch_array($q)) :?>
        <tr>
           <td><?php echo $row['food_name'] ?></td>
           <td><img src="Pic/food/<?php echo $row['food_img'] ?>" alt=""></td>
           <td><?php echo $row['food_price'] ?> บาท</td>
           <td><a href="Function/add-cart.php?act=add&id=<?php echo $row['food_id'] ?>">เพิ่มลงตระกร้า</a></td>
        </tr>
        <?php endwhile ;?>
    </table>

</div>