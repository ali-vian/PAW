<?php 
define('BASEURL', 'http://localhost:8080/PAW/');
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/PAW/");
define('DB',mysqli_connect('localhost','root','','paw'));

if(!DB){
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected Successfuly !";
