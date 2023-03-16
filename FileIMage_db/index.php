<?php
    require 'connecsion.php';

    if(isset($_POST['submit'])){
        $ten=$_POST['ten'];
        $tuoi=$_POST['tuoi'];
        if($_FILES['image']["error"]===4){
            echo
            "<script> alert('image does not Exit');</script>";
        }
        else
        {
            $fileName=$_FILES["image"]["name"];
            $tmpName=$_FILES["image"]["tmp_name"];
            move_uploaded_file($tmpName,$fileName);
            $query="INSERT INTO nhanvien( ten, tuoi , anh) VALUES('$ten','$tuoi','$fileName')";
            mysqli_query($conn,$query);
            header("Location: data.php");

        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>upfile</title>
</head>
<body>

    <form action="" method="post" autocomplete="of" enctype="multipart/form-data">
        <label for="Ten">Tên:</label>
        <input type="text" name="ten" id="name" require value=""><br>
        <label for="Tuoi">Tuổi:</label>
        <input type="text" name="tuoi" id="tuoi" require value=""><br>
        <label for="form">Image:</label>
        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png"  value=""> <br><br>
        <button type="submit" name="submit"> Submit</button>

    </form>
    
</body>
</html>