<?php

$foo = [36,19,27,9,10,10,-89];
echo $foo[0];
echo $foo[2];
$foo[3] = 42;
echo $foo[3];
$i = 4;
$foo[$i] = 34 ;
echo $foo[$i];

$bar = [42,3.14,'fired',True];
$bar = [];

$person = array('nama'=>'ali','umur'=>17,'pelajar'=>True);
if(array_key_exists('hobi',$person)){
    echo $person['hobi'];
}