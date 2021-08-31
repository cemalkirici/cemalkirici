<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
    $say1 = $_POST['sayi1'];
    $say2 = $_POST['sayi2'];
    echo $say1;
    echo "<br />";
    echo $say2;
    $toplam= $say1+$say2;
    echo "<br />";
    echo ' Bu sayıların toplamı: '.$toplam; 
    ?>    
</div>
</body>
</html>
