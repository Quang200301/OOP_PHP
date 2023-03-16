<?php
    require 'connecsion.php';
?>
<table border="1px solid black">
    <thead>
        <tr>
            <td>ID Nhân viên </td>
            <td>Tên</td>
            <td>Tuổi</td>
            <td>Ảnh</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM nhanvien";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                
        ?>
        <tr>
            <td><?php echo $row['nv_id']; ?></td>
            <td><?php echo $row['ten']; ?></td>
            <td><?php echo $row['tuoi']; ?></td>
            <td>
                <img src=" <?php echo $row['anh']; ?> " width="50px" width="50px">
            </td>
            <td>
                <a href="http://localhost/PHP_MYSQL/FileIMage_db/xoa.php?id=<?php echo $row['nv_id'] ?>">Xóa</a>
                <a href="http://localhost/PHP_MYSQL/FileIMage_db/sua.php?id=<?php echo $row['nv_id'] ?>">Sửa</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
   
</table>
<a href="index.php">Thêm</a>