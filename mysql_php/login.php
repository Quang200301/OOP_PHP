<?php
global $conn;
require 'connect.php';
if(isset($_POST['Login'])){
    $name=$_POST['name'];
    $pass=$_POST['mk'];
    $result=mysqli_query($conn,"SELECT *FROM thanhvien where name_tk='$name' and matkhau='$pass'");
    $row=mysqli_fetch_assoc($result);
    // var_dump($row);
    // die;
    if($row){
        header("location:showthanhvien.php");

    }
    else{
        echo"saiii";
    }

    }
 
  
        
    

?>

<html>
    <style>
        #name{
            margin-left:34px
        }
    </style>
    <body>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="">Tên:</label>
    <input type="text" name="name" id="name"><br>
    <label for="">mật khẩu:</label>
    <input type="text" name="mk"> <br><br>
    <input type="submit" name="Login"  value="Login">

</form>
        
    </body>
</html>

