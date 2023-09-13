<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <?php
        $a = 10;
        $n = 0;
        while($a > $n){
            echo "Iteration Number : $a <br>";
            $a--;
        };
        echo "<hr>";
        $count = 10;
        do{
            echo "Iteration Number : $count <br>";
            $count--;
        }while($count > 0);


        echo "<hr>";

        $n = 28;
        $a = 1;
        while($a <= $n){
            echo "Iteration Number : $a <br>";
            $a+=3;
        };
        echo "<hr>";
        $count = 1;
        do{
            echo "Iteration Number : $count <br>";
            $count+=3;
        }while($count <= 28);

        echo "<hr>";

        $a = 28;
        $n = 1;
        while($a >= $n){
            echo "Iteration Number : $a <br>";
            $a-=3;
        };
        echo "<hr>";
        $count = 28;
        do{
            echo "Iteration Number : $count <br>";
            $count-=3;
        }while($count >= 1);
    ?>
    <ul>
        <?php 
        $mylist = ["Apel","Jeruk","Pisang"];
        foreach($mylist as $i):?>
            <li><?= $i ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>