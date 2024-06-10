<?php

// client : web browser
// Server : Web server

// Web Statis : Sifatnya Tetap, client-side, Tech (HTML,CSS,JS)
// Web Dinamis : Sifatnya Dinamis, Akses Basis Data, Server-side,Tech (PHP,Node.js,Python,ASP,dll)

// SDLC (Software Development Life Cycle) loop
// Waterfall
// Spiral
// Iterative
// V
// Agile

/* 
Multiline Comment
*/

# ini juga Comment

$value = 10;
echo 'hello world<br>',42,'<br>'.'hello world'.'<br>'.'hello',42,'world'.'<br>',sqrt($value*19),'<br>';

?>

<table border="1" cellpadding="5">
    <?php
    if($value%2==1){
        $value=$value+1;
    }
    for($i=$value;$i>=0;$i--):?>
        <tr>
            <?php for($j=0;$j<=$value;$j++){
                if($i==0&&$j==0){
                    echo "<td>$i</td>";
                }elseif($i==0){
                    if($j==$value){
                        echo "<td>".$j."</td>";
                    }else{
                        echo "<td bgcolor='yellow'>".$j."</td>";
                    }
                }elseif($j==0){
                    if($i==$value){
                        echo "<td></td>";
                    }else{
                    echo "<td bgcolor='yellow'>".$i."</td>";
                    }
                }else{
                    if($i+$j==$value ){
                        echo "<td>".$j+$i."</td>";
                    }elseif($i==$j){
                        echo "<td>".$j+$i."</td>";
                    }else{
                        echo "<td bgcolor='yellow'>".$j+$i."</td>";
                    }
                }
            }
            ?>
        </tr>
    <?php endfor?>
</table>

<table border="1" cellpadding="5">
    <?php
    if($value%2==1){
        $value=$value+1;
    }
    for($i=$value;$i>=0;$i--):?>
        <tr>
            <?php for($j=0;$j<=$value;$j++){
                    if($i+$j==$value/2 ){
                        echo "<td>".$j+$i."</td>";
                    }elseif($i+$j==$value+$value/2){
                        echo "<td>".$j+$i."</td>";
                    }elseif($i-$j==$value/2){
                        echo "<td>".$j+$i."</td>";
                    }elseif($j-$i==$value/2){
                        echo "<td>".$j+$i."</td>";
                    }
                    else{
                        echo "<td bgcolor='yellow'>".$j+$i."</td>";
                    }
            }
            ?>
        </tr>
    <?php endfor?>
</table>
<table border="1" cellpadding="5">
    <?php
    if($value%2==1){
        $value=$value+1;
    }
    for($i=$value;$i>=0;$i--):?>
        <tr>
            <?php for($j=0;$j<=$value;$j++){
                    if($i+$j==$value){
                        echo "<td>X</td>";
                    }elseif($i==$j){
                        echo "<td>X</td>";
                    }
                    elseif($i==$value/2){
                        echo "<td  bgcolor='yellow'>".$j+$i."</td>";
                    }elseif($j==$value/2){
                        echo "<td  bgcolor='yellow'>".$j+$i."</td>";
                    }
                    else{
                        echo "<td>".$j+$i."</td>";
                    }
            }
            ?>
        </tr>
    <?php endfor?>
</table>
<?php

echo 'Today is Paul\'s A <br>';

// Array 
$foo = array(36,19,27,9,10,10,-9);
echo $foo[0];
$foo[2]=4;
echo $foo[2];
// beda tipe
$bar = [36,'abc',3.6,True];
var_dump($bar);
// beda tipe index 
$person = array('nama' => 'Adi',
'usia' => 15, 11 => True);
echo $person['usia'];
$person['usia'] = 44;
$person['hobi'] = 'Bersepeda';
if (array_key_exists('hobi', $person))
echo $person['hobi']; 
// index tak terurut
$foo = array(36, 19, 27, 9, 10, 10, -89);
$foo[99] = 3; // OK
echo $foo[99]."<br>"; // 3

$warna = "red";
if ($warna == "green") {
    $warna = "hijau";
} elseif ($warna == "blue") {
    $warna = "biru";
} else {
    $warna = "merah";
}
echo $warna; 


$warna = "red";
switch ($warna){
    case "green":
        $warna = "hijau";
        break;
    case "blue":
        $warna = "biru";
        break;
    case "red":
        $warna = "merah";
        break;
    default:
        $warna="";
}
echo $warna;

$str = "abc";
echo strlen($str); // len
echo substr($str,0,2).'<br>'; //[:]

$arr = [1,77,3,4,5,99];
$arr[0]=20;
echo count($arr); //len
sort($arr); // sort , rsort
// asort ksort ,arsort,krsort
var_dump($arr);

