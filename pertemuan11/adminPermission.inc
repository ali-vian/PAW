<?php
    session_start();
    if(!isset($_SESSION['isAdmin'])) //isAdmin adalah contoh label/nama session
    {

        //user akan diarahkan ke halaman login untukauthorization
        //header("Location: http://localhost:8080/PAW/pertemuan11/login.php);
        header("Location: http://{$_SERVER['HTTP_HOST']}/PAW/pertemuan11/login.php");
        exit();
    }