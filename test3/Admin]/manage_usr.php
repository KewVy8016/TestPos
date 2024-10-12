<?php
     $s ="SELECT * FROM member WHERE member_level = 'member'";
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


</style>
 <div class="content">
    <div class="head">
        <h1>จัดการผู้ใช้</h1>
        <a href="Function/add-usr.php">เพิ่มผู้ใช้</a>
    </div>
    <table>
        <tr>
            <th style="width:5%;">id</th>
            <th>img</th>
            <th>username</th>
            <th style="width:20%;">name</th>
            <th>lastname</th>
            <th>status</th>
            <th style="width:5%;">edit</th>
            <th style="width:5%;">delete</th>

        </tr>
        <?php while($row = mysqli_fetch_array($q)) :?>
        <tr>
            <td><?php echo $row['member_id'] ?></td>
            <td><?php echo $row['member_img'] ?></td>
            <td><?php echo $row['member_username'] ?></td>
            <td><?php echo $row['member_name'] ?></td>
            <td><?php echo $row['member_lastname'] ?></td>
            <td><?php echo $row['member_status'] ?></td>
            <td><a href="Function/edit-usr.php?id=<?php echo $row['member_id']?>">edit</a></td>
            <td><a href="Function/drop_usr.php?id=<?php echo $row['member_id']?>">delete</a></td>
        </tr>
        <?php endwhile;?>
    </table>
</div>