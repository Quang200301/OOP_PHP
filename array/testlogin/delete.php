<?php
require

$id=$_GET['id'];
$sql="SELECT *FROM person where id='$id'";
$result=mysqli_query($conn,$sql);
header("localhost:show.php");
?>