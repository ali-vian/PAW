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


$a=19;
$n=1;
for($i=$a;$i>=$n;$i--){
    if(($a-$i+1)%5==0){
        echo "Iteration number ".($a-$i+1)." = <span class='red'>$i</span> <br>";
    }else{
        echo "Iteration number ".($a-$i+1)." = $i <br>";
    }
}


echo "<hr>";

$a=1;
$n=28;
$b=3;
for($i=$a;$i<=$n;$i+=$b){
    echo "Iteration number $i<br>";
}

echo "<hr>";

$a=28;
$n=1;
$b=3;
for($i=$a;$i>=$n;$i-=$b){
    echo "Iteration number $i<br>";
}
?>
</body>
</html>