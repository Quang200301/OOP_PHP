<?php
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $query="INSERT INTO thongtin VALUES('','$ten','$tuoi','$newImageName')";
}

?>


<html>
    <body>
        <form action="" method="post">
            <label for="">Name:</label>
            <input type="text" name="name"><br>
            <label for="">passwork:</label>
            <input type="text" name="pass"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>