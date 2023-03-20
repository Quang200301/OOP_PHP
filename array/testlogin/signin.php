<?php
require 'cn.php';
?>
<form action="" method="post">
    name:
    <input type="text" name="name"><br>
    pass:
    <input type="text" name="pass">
    <input type="submit" name="ok" value="ok">
</form>
<?php
if(isset($_POST['ok'])){
    $n=$_POST['name'];
    $p=$_POST['pass'];
    $sql="SELECT *FROM person";
    $query=mysqli_query($conn,$sql);
    $u=mysqli_fetch_assoc($query);
        if($n==$u['name']&&$p==$u['pass']){
            echo "thanhcong";
        }else{
            echo"thatbai";
        }
    
}
?>