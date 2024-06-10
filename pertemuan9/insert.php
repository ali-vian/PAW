<?php
try{
    $dbc =  new PDO('mysql:host=localhost;dbname=customerdb','root','');

    $dbc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $statement = $dbc->prepare("INSERT INTO customer (firstname,address,balance) 
    VALUES (:firstname,:address,:balance)");
    $statement->bindValue(':firstname',$_GET['firstname']);
    $statement->bindValue(':address',$_GET['address']);
    $statement->bindValue(':balance',0);
    $statement->execute();
}
catch(PDOException $err)
{
    echo $err->getMessage();
}