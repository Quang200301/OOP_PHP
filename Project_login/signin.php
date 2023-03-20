<?php
require 'connect.php';?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="">Username</label>
    <input type="text" name="name"><br><br>
    <label for="">Passsword</label>
    <input type="text" name="mk">
    <input type="submit" name="sm"value="sm">
</form>
</body>
</html>


<?php
if(isset($_POST['sm'])){
    $n=$_POST['name'];
    $p=$_POST['mk'];
    $sql="SELECT * FROM tttaikhoan";
    $query=mysqli_query($ketnoi,$sql);
    $row=mysqli_fetch_assoc($query);
    
    // echo"A";
        if($n==$row['username'] && $p==$row['pass']){
            echo"THANHCONG";
        }

    }
?>