<?php
     $s ="SELECT * FROM food WHERE 1";
     $q = mysqli_query($conn,$s);
?>

<style>
    .head{
        width: 100%;
        display:flex;
        align-items:center;
        
        gap:25px;
    }
    .head a{
        padding:11px 16px;
        background-color:black;
        text-decoration: none;
        color:white;
    }
    .head a:hover{
        background-color:grey;
        color:white;
    }
    table{
        border-collapse:collapse;
        width: 100%;

    }
    th,td{
        border:1px solid black;
        padding:5px;
        text-align:center;
    }

    th{
        background-color:white;
    }
    img{
        width: 60px;
        height:60px;
        object-fit:cover;
    }

</style>
 <div class="content">
    <div class="head">
        <h1>จัดการเมนู</h1>
        <a href="Function/add-menu.php">เพิ่มเมนู</a>
    </div>
    <table>
        <tr>
            <th style="width:5%;">id</th>
            <th>img</th>
            <th>name</th>
            <th style="width:10%;">price</th>
            <th style="width:10%;">caterogy</th>
            <th style="width:5%;">edit</th>
            <th style="width:5%;">delete</th>

        </tr>
        <?php while($row = mysqli_fetch_array($q)) :?>
        <tr>
            <td><?php echo $row['food_id'] ?></td>
            <td><img src="Pic/food/<?php echo $row['food_img'] ?>" alt=""></td>
            <td><?php echo $row['food_name'] ?></td>
            <td><?php echo $row['food_caterogy'] ?></td>
            <td><?php echo $row['food_price'] ?></td>
            <td><a href="Function/edit-menu.php?id=<?php echo $row['food_id']?>">edit</a></td>
            <td><a href="Function/drop_menu.php?id=<?php echo $row['food_id']?>">delete</a></td>
        </tr>
        <?php endwhile;?>
    </table>
</div>