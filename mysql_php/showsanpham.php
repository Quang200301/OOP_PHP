<html>
<style>
table, th, td {
  border: 1px solid black;
}
img{
    width: 70px;
    height: 70px;
}
</style>
    <body>
        <?php

        $ketnoi=mysqli_connect("localhost","root","","sanpham");
        $sql="select*from products";
        $result=mysqli_query($ketnoi,$sql) or die("câu truy vấn sai!");
        echo"<table><tr><th>ma_sp</th><th>tên</th><th>ảnh</th><th>giá</th><th>đánh giá</th><th>hoạt động</th></tr>";
        $i=1;
        while($row=mysqli_fetch_assoc( $result))
       
        {
            echo "<tr>";
            echo "<td> $i </td>";
            echo "<td>" .$row['prd_name']. "</td>";
            echo "<td>";
            echo "<img src='".$row['image']." '>";
            echo "</td>";
            echo "<td>" .$row['price']. "</td>";
            echo "<td>" .$row['danhgia']. "</td>";
            echo "</tr>";   
            $i++;
        }
        echo "</table>";
        ?>
    </body>
</html>