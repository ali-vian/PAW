<?php 

define("BASEURL", "http://localhost/PAW/praktikum/modul-5-praktikan");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/modul-5-praktikan");
define("DB", mysqli_connect("localhost","root","","paw"));

if (!DB) 
{
        die("Connection failed: " . mysqli_connect_error());
}
  else 
  {
    echo "Connected successfully";
  }