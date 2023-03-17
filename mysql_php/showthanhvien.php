<?php
   require 'connect.php';
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanhvien</title>
    <style>
    table, th, td {
        border: 1px solid black;
    }
    img{
        width: 70px;
        height: 70px;
    }
</style>
</head>
<body>
    <table border="1px">
    <thead>
        <tr>
            <td>ID </td>
            <td>Taikhoan</td>
            <td>matkhau</td>
            <td>ghichu</td>
            <td>anh</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
    <?php
  
    $sql="SELECT* FROM thanhvien";
    $result=mysqli_query($conn,$sql)or die("câu truy vấn sai!");
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id_tk']; ?></td>
        <td><?php echo $row['name_tk']; ?></td>
        <td><?php echo $row['matkhau']; ?></td>
        <td><?php echo $row['ghichu']; ?></td>
        <td><img src=" <?php echo $row['avata']; ?>"  width="50px"width="50px"></td>
        <td><a href="http://localhost/PHP_MYSQL/mysql_php/xoatv.php?id=<?php echo $row['id_tk'] ?>">xoa</a></td>
    </tr>
  
    <?PHP
    }
   ?>
    </tbody>
    </table>
   <a href="themthanhvien.php"> Thêm</a>

</body>

</html>