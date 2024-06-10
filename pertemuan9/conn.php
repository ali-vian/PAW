<?php

$dbc =  new PDO('mysql:host=localhost;dbname=customerdb','root','');

$statement = $dbc->query("SELECT customerID,firstname, address FROM customer");

foreach($statement as $row){
    echo "<h1>{$row['customerID']}, {$row['firstname']}</h1>";
    echo "<p>{$row['address']}</p>";
}