<?php
    require 'connecsion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>upfile</title>
</head>
<body>
    <?php 
        $id = $_GET['id'];
        $sql=mysqli_query($conn,"SELECT * FROM nhanvien WHERE nv_id = '$id' ");
        $row = mysqli_fetch_assoc($sql); 
    ?>
    <form action="" method="post" autocomplete="of" enctype="multipart/form-data">
        <label for="Ten">ID nhân viên:</label>
        <input type="text" name="idnv" id="idnv" require value="<?php echo $row['nv_id'] ?>"><br>
        <label for="Ten">Tên:</label>
        <input type="text" name="ten" id="name" require value="<?php echo $row['ten'] ?>"><br>
        <label for="Tuoi">Tuổi:</label>
        <input type="text" name="tuoi" id="tuoi" require value="<?php echo $row['tuoi'] ?>"><br>
        <label for="form">Image:</label>
        <input type="file" name="image" id="image" accept=".jpg,.jpeg,.png"  value=""> <br><br>
        <button type="submit" name="submit"> Submit</button>

    </form>
    
</body>
<?php
    if(isset($_POST['submit'])){
        $idnv= $_POST['idnv'];
        $ten = $_POST['ten'];
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
            $sql= "UPDATE nhanvien SET nv_id = '$idnv', ten = '$ten', tuoi = '$tuoi', anh= '$fileName' WHERE nv_id = '$id' ";
            mysqli_query($conn, $sql);
            header("Location: data.php");

        }
    }
    ?>
</html>