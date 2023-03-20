<?php
$conn=mysqli_connect("localhost","root","","data")?>

<html>
    <body>
        <form action="" method="post">
            <label for="">name</label>
            <input type="text" name="name"> <br>
            <label for="">pass</label>
            <input type="text" name="pass">
            <input type="submit" name="sub" value="Đăngký">
        </form>
    </body>
</html>
<?php
if(isset($_POST["sub"])){
    $n=$_POST['name'];
    $p=$_POST['pass'];
    $sql="INSERT INTO person(name,pass) VALUES('$n','$p')";
    $query=mysqli_query($conn,$sql);

    if($n!=''&& $p!=''){
        echo"<script> alert('thanhcong')</script>";
        header("location:show.php");
    }
    else{
        echo"<script> alert('thatbai')</script>";
    }
}
?>