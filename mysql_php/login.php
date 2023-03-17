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
    <link rel="stylesheet" href="stylelogin.css">
    <style>
        #name{
            margin-left:34px
        }
        #login{
            margin-left:14%
    
        }
    </style>
    <body>
    <div class="content">

    <form action="" method="post" enctype="multipart/form-data">
        <h1>FORM</h1>
    <label for="">Tên:</label>
    <input type="text" name="name" id="name"><br>
    <!-- <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span> -->
    <label for="">mật khẩu:</label>
    <input type="text" name="mk"> <br><br>
    <input type="submit" name="Login"  id="login"value="Login">
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->

</form>
</div>
        
    </body>
</html>

