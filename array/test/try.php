<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="ad.css">
    <style>
  
    .row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 5em;
        
        
    }
   .card-body{
    padding: 9px 90px 10px;
   }
   .header-navi{
    padding: 3%;

   }
    </style>
 
</head>
<body>
   <div class="header-navi">
    <?php
    $product=array();
    $product[0]['name']="quang";
    $product[0]['price']="120";
    $product[0]['img']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSULRnrhs_FZcAE40nOxnoW9k1IpRmoC905TA&usqp=CAU";



    $product[1]['name']="tu";
    $product[1]['price']="120";
    $product[1]['img']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSULRnrhs_FZcAE40nOxnoW9k1IpRmoC905TA&usqp=CAU";


    

    $product[2]['name']="bo";
    $product[2]['price']="120";
    $product[2]['img']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSULRnrhs_FZcAE40nOxnoW9k1IpRmoC905TA&usqp=CAU";


    $product[3]['name']="cute";
    $product[3]['price']="12000";
    $product[3]['img']="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlLvjwKSdyAPXSVhZymRZjaWPxCzpiEUfC3w&usqp=CAU";
    ?>

<div class="container">
    <div class="row"> 
    <?php
    for($i=0;$i<count($product);$i++){
    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $product[$i]['img'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php  echo $product[$i]['name']?></h5>
        <p class="card-text"><?php echo $product[$i]['price']  ?> </p>
        <form action="" method="post">
        <input type="submit" name="btn btn-primary" value="Mua">
        <?php
        if(isset($_POST['btn btn-primary'])){
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        };
        ?>
        </form>
       
        </div>
    </div>

    <?php
    }
    ?>
    </div>
</div>
</div>
    
 
</body>
</html>