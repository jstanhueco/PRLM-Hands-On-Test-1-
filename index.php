<?php
$user = "Hello this is a example store";
$pagbati = "Wa tol";
$offers =  "bili kang 2 packs of candy and get 20% off discount para sayo";
$reg_price = 500;
$offer = ["Chocolate","Mint Blast","Strawberry","Cocacola"];
$offer_price = 100;
$saving =  $reg_price- $offer_price ;
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styles.css"> 
    <title>PRLM Handson Quiz</title>
</head>
<body>
    <div class = "savings">
    <h2>here is your savings after the purchases <?= $saving;?></h2>
    </div>
    <h1>Welcome sa <?= $user;?> </h1>
    <h2><?=$pagbati;?></h2>
    <h2><?=$offers; ?> Usual price: <?= $reg_price;?></h2>
    <h2>here are the flavors:</h2>
    <p><?=$offer[0];?></p>
    <p><?=$offer[1];?></p>
    <p><?=$offer[2];?></p>
    <p><?=$offer[3];?></p>
</body>
<footer>
    <? include "footer.php"; ?> 
</footer>
</html>