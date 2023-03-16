<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
    <body>
        <?php

        $ketnoi=mysqli_connect("localhost","root","","product1");
        $sql="select*from sanpham";
        $result=mysqli_query($ketnoi,$sql) or die("câu truy vấn sai!");
        echo"<table><tr><th>ID</th><th>Name</th><th>price</th></tr>";
        $i=1;
        while($row=mysqli_fetch_assoc( $result))
       
        {
            echo"<tr><td>".$i."</td><td>".$row['ten']."</td><td>".$row['gia']."vnđ<br/>"."</td></tr>";
            $i++;
        }
        echo "</table>";
        ?>
    </body>
</html>