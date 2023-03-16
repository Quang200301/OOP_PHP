<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .row{
        padding:5%;
    }
  </style>
</head>
<body>
<?php

$quan = array();
$quan[2]["Name"] = "The Cosmo(ĐEn) Quân short khaiki";
$quan[2]["code"] = "TCDKS03";
$quan[2]["Gia"] = "500.500 đ";
$quan[2]["hinhanh"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYMvSaPl5YF_EQEZqwu4v_Iz6eHFHt_2NuxQ&usqp=CAU";

$quan[5]["Name"] = "The Cosmo(ĐEn) Quân short khaiki";
$quan[5]["code"] = "TCDKS03";
$quan[5]["Gia"] = "500.500 đ";
$quan[5]["hinhanh"] = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIIAggMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAwQGBwIFCAH/xABAEAABAwIDBAcFBQQLAAAAAAABAAIDBBEFEiEGBzFBEyJRcYGhsRQyYZHBM0JScqIVYpLRCBYjJDQ1U4Ky4fD/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQQCAwX/xAAeEQEAAgIDAQEBAAAAAAAAAAAAAQIDERIhMjFBBP/aAAwDAQACEQMRAD8AvFJVX+Gl/I70SqRq9KWb8jvRCPqK4pURU8D5p3tjiYLue42DR2kra7P0zW0Jq4Zo52VLWyR5NWltrgg87gqit4eP1GM41NRQSkUNNJka0HRzhoXHtN72Smy28LF9loWUVOI6ugYTammvdt9eo4e7r3j4JWvT0yX306CHRk3DAT2LIuNtGKA4Vvg2cqmD9osq8PlPEPhMjf4mX8wFvRvB2RcwH9u0jb8MxIPmF0826dLNewZfuSUjamTQt07FG6zeXsjSOv8AtN9Q88BDTyP87W81G8U3yQMu3B8Hlmd/qVUgjb8m3J8lRY8dA95vK+w/C3mmmM7SYDs5GGYjiEFO/iIGnNK/uYOsfkqQxbeDtTizXNnxIUsRFjFRM6IfO5d+pRT3TJI43cdS48XfFQW7U72JcVnqafA8Keyniab1M7gX34XyC4te3E8+SjzNrsYmnELpmTMyiR5MYuGngBa2p5dyj2wOMNwbGYGzOyw1UZgkcToC4ggnxAHitttFT+wY2auNpbDOeuQ3MGOF7G3Zb0XFrRE8Zelazx5RKSbNYzS4ji0dLPFJTSyZujZIQbkcR5HkrcoqcU8AYAAeJt2rm2OQPxETRPbnBc+PrZsx8LaC4/8AWXRmAVZrsDoKt3vTU7Hu7yBdSKRE7hzOS1o1J+hCF05CEIQCSqXNZTyueLtawk91kqmOOuLMExBzTYilkIP+0oOWXvb1nA6vOYnmbrAOYNeaScexYErraHByON82qxytvcapG68LyBxTYXDRe7jqs7Mt7yatcTzWVyeabC570hK8FpbcLFxd2pGQ2U2E5CcoBVn7EV/9YKWGGd/96hIZNf73Y7x9VVrjdSHYPFBg20NNVOdlgLhHPrcZCRr4cfmvO9eUPTFfjLdV0zXY1iAjj6OKKqfG2MC1gw5PMtur02FLjsjhebiIbeFzZUNWVAqcSrKsAt9pqJJRflmcT9V0Ps85jsBw50QDWGljLQBYAZQu/wAcTO5bBCEIBCEIBI1tO2ro56Z5IbNG6MkcQCLfVLIQch11O+kqp6ZzrvgldE4jgS0kH0TUukHNbLHbjGMRa73hVzNPeHuBWqdnHA6IjPpXc150gJ6zbpIudzCxLz2IHYn5BgWYkefuBMmS9YDtThpee5AqCeYCbzOu42Szi5sdzYX4JsUkJnintBl6QA217UyPFOqEAzty8RqgkdO/qtPPQronY1+fZPCCDe1JGPk0Bc10krJrsByTN4tPP4roPdjMZti6DNxaZGfJ5QhKkIQihCEIBCEHgg5W2yjYNrMZbGMrfbpiB8S8381opXMjFvvKWb0IPY9ucYZIwjNMJGfEOa11/MqHSdclxbYKoTdMk3PJWQZnPCw7UODWqKRdfkdVsqOYSs194cVrzqpBsvhArcG2hxBzL+wU8Ja63uOfM3zytcO4lAwndmNhwSLkta5uUlJxRCacQRyRvbJGMzeKbFO6B97xuNtNEDymHtLXSGzJYSQCObf+l0DuhkL9j2tdxZUSN9D9VzvG6bD5+kLc0ROvxuuiN0JadjmFhuDUSG/bwt5IJshCEUIQhALw8F6hBzbvWzP3g43exDXwgX7OgjUJle0GwZe3apnvZjcd4WNXuAXwkfH+wjUNeAzib/BVDdxc7joOwLEssLlKalYyaC3NRSJVybFYR0G47H63LeSsEs/CxyR2A/4OPiqbcbAk8l1Xs3goZu1osHljAMmF9FIzkXPZ1vNxQczu1CQk0S9iGdcWcBr3pF+upRCTl7E7K8LErwHVBtOlax2WbK+nkADvxN/eV77jnSN2RqKaTX2eukY09oLWn6qgIj0xbGbG8ZAPjddAbjnRu2MeG36RtY8S3PE5W2/TlRVhoQhAIQhAIQhBQO++kMG2gnykNqKON9+RILmn0Hkq3cBnKtrf8c+L4Uz8NM8/Nw/kqnkIY024ohF7g0JA3OpWbu1YkX7kC2G0RxHE6OgaTeqqI4dOPWcB9V2Q1oaA1oADRYAcly5unoPb94WDsIBbDI6dwJ/A0kedl1KiuUtq6P2DaTF6TlHWSgDsaXEjyIWmc3qqc74aIUe31a5ot7VFFUfNuT1YVCJBZqIanivFk5eKBWkflqoieGYA9yvvcZHJFhWLBxvEappYfiWC/wBFQMP28f5x6q69xW0DQKnAaiwc49PA7m6wAc0+ABHiqq4UIQgEIQgEIQgpnf7CRX4PPbQwysJ+ILSPUqnZTdxV6b+6SolwzC6mKJz4YZXtkLWk5cwFiewdU+NlREksYcQZGX/Mgxt2ry2i9D2u91wPcUo2CV4uyGRw/dYSoaWN/R+pel2xrak2tBQuHDm57fo0/NdBqjf6O0YOK47JzbBC35uf/JXkqKg394TePDMZjYbtc6llIHI3c2/iHfxKmptRZdI736I1mwOIFnv07o5x3NeM36cy5vl4IGxCxIWZWI4qIyi0mjPIOHqphsmX0u1OFTQOIeK2K1uJBeAR4gkeKht8vWHEaqYYQ/2fG6OouAI6uOQHlYPB+io6dCF4F6ihCEIBCEIGeKxGbD52C98tx3jX6KAyxtkLmuYDzvbirJKhGKUwp62WIcAbjuOoXhmj9av5rR3WWkiomMcSG804bAHSAdqXc2y9g+2Z3rwiWiUswDCKLD45J6aBjJ6gN6aQDV+W9r91z81t00oXDomgdidrZWenz7+jLGsPZi2D1uGyvLGVcD4S8C5bmaRcfEXVL1+5fGoy80mJUU7BctztdG4+Go81eq8K6cuaTu5xBpHT19PGb6hsbnEeifUuwNFGQ6qnqJzzAIY3y181c+0ODCXNVU7Lu4vaPUKLPpiBxWa9rx02Y6Y7RuIRun2UwYRCMYdBbmXtzH5lTnZDCMGpGgx4fTdODpIYwXDuJWn6MMFk4pKh0D7tdZSl52XpCw2OBWa0OF4oJQGSEZlu2PBWiJ2y2rMM0IQunIQhCDwqJbSf5o78jV6heWXy9sHtrJOCRj+0HevULLDZKaYZ9m1Lsc41j2lxt2XQhbKfGDJ6OkFCF24eKH4y1ra2cNaAL8AEIXjm+NH8/qWmfzSLUIWerRY9pCRK2xPEKbUZJiFyhC0UZ8h4OCEIXszv/9k=";

 ?>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>THỜI TRANG NAM</h1>
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3></h3>
        <img src="<?php echo $quan[2]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[2]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[2]["code"] ?></p>
        <p class="card-text"><?php echo $quan[2]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    <div class="col-sm-4">
      <h3></h3>
         <img src="<?php echo $quan[2]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[2]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[2]["code"] ?></p>
        <p class="card-text"><?php echo $quan[2]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    <div class="col-sm-4">
      <h3></h3>
         <img src="<?php echo $quan[2]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[2]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[2]["code"] ?></p>
        <p class="card-text"><?php echo $quan[2]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    
  </div>

  
  <div class="row">
    <div class="col-sm-4">
      <h3></h3>
         <img src="<?php echo $quan[5]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[5]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[5]["code"] ?></p>
        <p class="card-text"><?php echo $quan[5]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    <div class="col-sm-4">
      <h3></h3>
         <img src="<?php echo $quan[5]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[5]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[5]["code"] ?></p>
        <p class="card-text"><?php echo $quan[5]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    <div class="col-sm-4">
      <h3></h3>
         <img src="<?php echo $quan[5]["hinhanh"]; ?>" alt="">
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $quan[5]["Name"] ?></h6>
        <p class="card-text"><?php echo $quan[5]["code"] ?></p>
        <p class="card-text"><?php echo $quan[5]["Gia"] ?></p>
        <button type="button" class="btn btn-warning" name="ok">Đặt mua</button>
    </div>
    
  </div>
  <?php
    if(isset($_SESSION['ok'])){
        
    }
  ?>
</div>

</body>
</html>
