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
    <?php
    $ketnoi=mysqli_connect('localhost','root','','user');
    $sql="select*from thanhvien";
    $result=mysqli_query($ketnoi,$sql)or die("câu truy vấn sai!");
    echo"<table><tr><th>ma_tv</th><th>Tài khoản</th><th>Mật khẩu</th><th>Ghi chú</th><th>Avata</th><th>Hàn động</th></tr>";
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['id_tk']."</td>";
        echo "<td>".$row['name_tk']."</td>";
        echo "<td>".$row['matkhau']."</td>";
        echo"<td>".$row['ghichu']."</td>";
        echo"<td>";
        echo "<img src='".$row['avata']."'>";
        echo "</td>";
        echo "<td>";
        echo "<a href ='text1.php?id=".$i."'>delete</a> ||"; 
        echo "<a href ='themthanhvien.php?id=".$i."'>Add</a>"; 
        echo "</td>";
        
        $i++;
    }
    echo "</table>";
    ?>
</body>
</html>