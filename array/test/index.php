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
    .container{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
   
    }
    </style>
 
</head>
<body>
    
<?php
    $mang=array();
    $mang[0]['name']="quang";
    $mang[0]['price']="1231";
    $mang[0]['img']="..";

    $mang[1]['name']="quag";
    $mang[1]['price']="121";    

    $mang[2]['name']="quanưerg";
    $mang[2]['price']="123we1";
     ?>

    <div class="container">       
        <table class="table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Pass</td>
                </tr>
            </thead>
            <tbody>
                <?php
                // for($i=0; $i<count($mang);$i++) {
                //     echo "<tr>";
                //         echo "<td>".$mang[$i]['name']."</td>";
                //         echo "<td>".$mang[$i]['pass']."</td>";
                //     echo "</tr>";
                // }

                for($i=0; $i<count($mang);$i++) {

                ?>

                <tr>
                    <td> <?php echo $mang[$i]['name'] ?> </td>
                    <td> <?php echo $mang[$i]['pass'] ?> </td>
                </tr>

                <?php 
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>