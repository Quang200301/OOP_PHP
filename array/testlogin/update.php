<?php
require 'cn.php'
?>
<html>
    <body>
        <?php 
        $id = $_GET['id'];
        $sql=mysqli_query($conn,"SELECT * FROM person WHERE id = '$id' ");
        $row = mysqli_fetch_assoc($sql); 
         ?>
        <form action="" method="post">
            name:
            <input type="text" name="name" require value="<?php echo $row['name']?>"><br>
            pass:
            <input type="text" name="pass"  require value="<?php echo $row['pass']?>">
            <input type="submit" name="up" value="up" >
        </form>
    </body>
</html>

<?php
if(isset($_POST['up'])){
    $na=$_POST['name'];
    $pa=$_POST['pass'];
    $sql="UPDATE person SET name='$na',pass='$pa'";
    mysqli_query($conn,$sql);
    header("location:show.php");
}
?>