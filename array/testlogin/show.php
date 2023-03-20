<?php
require 'cn.php';?>

<html>
<style>
    .row {
        gap: 10px; 
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <body>
        <div class="container">
    <div class="row">
        <?php
        $sql ="SELECT *FROM person";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            ?>
            
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'];?></h5>
                        <p class="card-text"><?php echo $row['pass'];?></p>
                        <a href="http://localhost/PHP_MYSQL/array/testlogin/update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" >updata</a>
                        <a href="http://localhost/PHP_MYSQL/array/testlogin/signup.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" >add</a>
                    </div>
                </div>
            
        <?php
        }
        ?>
        </div>
        </div>
    </body>
</html>