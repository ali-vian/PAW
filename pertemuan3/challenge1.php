<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
<?php

$nilai  = 101;
if(80 < $nilai && $nilai <= 100){
    $huruf = "A";
}elseif(75 <= $nilai && $nilai < 80){
    $huruf = "B+";
}elseif(70 <= $nilai && $nilai < 75){
    $huruf = "B";
}elseif(60 <= $nilai && $nilai < 70){
    $huruf = "C+";
}elseif(55 <= $nilai && $nilai < 60){
    $huruf = "C";
}elseif(50 <= $nilai && $nilai < 55){
    $huruf = "D+";
}elseif(45 <= $nilai && $nilai < 50){
    $huruf = "D";
}elseif(30 < $nilai && $nilai <= 45 ){
    $huruf = "E+";
}else{
    $huruf = "E";
}

if (55 <= $nilai && $nilai <= 100){
    echo "Nilai angka: $nilai<br>Nilai huruf: <span class='green'>$huruf<span>";
}if (0 <= $nilai && $nilai < 55){
    echo "Nilai angka: $nilai<br>Nilai huruf: <span class='red'>$huruf<span>";
}else{
    echo "Melebihi batas";
}
?>
</body>
</html>