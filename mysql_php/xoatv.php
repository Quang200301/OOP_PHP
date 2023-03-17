<?php
require 'connect.php';
$id=$_GET['id'];
$sql= "DELETE FROM thanhvien WHERE id_tk='$id'";
$result=mysqli_query($conn,$sql);
header("location:showthanhvien.php");
?>



