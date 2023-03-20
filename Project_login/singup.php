<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Sign up</title>
</head>
<body>
    <div class="content">
        
        <form action="" method="post">
            <label for="">Email</label>
            <input type="text" name="email" id="email">
            <label for="">Phone</label>
            <input type="text" name="phone" id="phone"> <br><br>
            <label for="">Street</label>
            <input type="text" name="street" id="street">
            <label for="">Dist</label>
            <input type="text" name="dist" id="dist">
            <label for="">City</label>
            <input type="text" name="city" id="city"><br><br>
            <label for="">Username</label>
            <input type="text" name="uname" id="uname"><br><br>
            <label for="">Passsword</label>
            <input type="text" name="pass" id="pass"><br><br>
            <input type="submit" name="sub" id="sub" value=" Sign up">
        </form>
    </div>
    <br><br>
    <a href="signin.php">SIgn IN</a>
</body>
</html>
<?php
if(isset($_POST['sub'])){
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $street=$_POST['street'];
    $dist=$_POST['dist'];
    $city=$_POST['city'];
    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    $query="INSERT INTO tttaikhoan(email,phone,street,dist,city,username,pass) VALUES(' $email',' $phone',' $street',' $dist',' $city',' $name',' $pass') ";
    mysqli_query($ketnoi,$query);
    echo 
    "<script> alert ('successfully') </script>";

}
?>