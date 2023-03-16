<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Mã thành viên 
        <input type="text" name="matv"><br>
        tài khoản
        <input type="text" name="name_tk"><br>
        Mật khẩu
        <input type="text" name="matkhau"><br>
        Ghi chú
        <input type="text" name="ghichu"><br>
        <label>Chọn hình ảnh: </label>
            <input class="form-control form-control-sm" type="file" name="file_anh">
            <br>
            <button type="submit" name="btn" class="btn btn-primary">Thêm mới</button>
        <?php
        if(isset($_POST['btn'])){
            $matv=$_POST['matv'];
            $taikhoan=$_POST['name_tk'];
            $matkhau=$_POST['matkhau'];
            $ghichu=$_POST['ghichu'];

            $FILESHA=$_FILES['file_anh'];
            $ten_file=$FILESHA['name'];

                if($ten_file=="") {echo
                  "vui lòng chọn file hình ảnh cho sản phẩm !"; }
                else{
                    move_uploaded_file($FILESHA['tmp_name'],$ten_file);

                    $ketnoi=mysqli_connect("localhost","root","","user") or die("kết nối thất bại!");
                    $check_name_tk="select*from thanhvien where name_tk='$taikhoan'";
                    $ketqua=mysqli_query($ketnoi,$check_name_tk);
                    $dem=mysqli_num_rows($ketqua);
                    if($dem>0)
                    {
                        echo "mã sản phẩm đã tồn tại !";
                    }
                    else
                    {
                        $sql= mysqli_query($ketnoi, "INSERT INTO thanhvien (id_tk,name_tk,matkhau, ghichu, avatar) values ('$matv','$taikhoan','$matkhau','$ghichu','$ten_file'");
                        if($sql)
                        {
                            header("Location: showthanhvien.php");
                        }
                    }
                }
           
    }
        
        ?>
    </form>
</body>
</html>