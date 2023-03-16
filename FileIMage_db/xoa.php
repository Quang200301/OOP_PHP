<?php
    require 'connecsion.php';

    $id=$_GET['id'];
    $sql = "DELETE FROM nhanvien WHERE nv_id = '$id'" ;
    $result = mysqli_query($conn,$sql);

    header("Location: data.php");
?>
