<?php
    require'connecsion.php';
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
            $fileSize=$_FILES["image"]["size"];
            $tmpName=$_FILES["image"]["tmp_name"];

            $validImageExtension=['jpn','jpeg','png'];
            $imageExtension= explode('.',$fileName);
            $imageExtension=strtolower(end($imageExtension));
            if(!in_array($imageExtension,$validImageExtension)){
                echo
                "<script> alert('invalid image Extension');</script>";
            }
            else{
                $newImageName=uniqid();
                $newImageName='.'.$imageExtension;

                move_uploaded_file($tmpName,'img/'.$newImageName);
                $query="INSERT INTO nhanvien VALUES('','$ten','$tuoi','$newImageName')";
                mysqli_query($conn,$query);
                

                echo
                "<script> alert('Successfully Add');
                document.location.href='data.php';
                </script>";
            }

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
    <a href="data.php">Data</a>
</body>
</html>