



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Mã thành viên:
        <input type="text" name="ma"><br>
        tài khoản:
        <input type="text" name="ten"><br>
        Mật khẩu:
        <input type="text" name="mk"><br>
        Ghi chú:
        <input type="text" name="ghichu"><br>
        <label>Avata: </label>
        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png"  value=""> <br><br>
        <br><br>
        <button type="submit" name="submit"> thêm</button>
            
      
    </form>
</body>
</html>
<?php
global $conn;
require 'connect.php';
if(isset($_POST["submit"])){
    $ma=$_POST['ma'];
    $tentk=$_POST['ten'];
    $mk=$_POST['mk'];
    $ghichu=$_POST['ghichu'];
    $fileName=$_FILES["image"]["name"];
    $query="INSERT INTO thanhvien(id_tk,name_tk,matkhau,ghichu,avata) VALUES('$ma','$tentk','$mk','$ghichu',' $fileName')";
    
    mysqli_query($conn,$query);
    header( "location:showthanhvien.php");
    }

?>