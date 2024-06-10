<?php

function validate(&$errors,$post){
    foreach($post as $key => $value ){
        if(empty($value) || !isset($post[$key])){
            $errors[$key] = "$key tidak boleh kosong";
        }else if($key == 'username'){
            if(!preg_match("/^(?=.*\d)[^#$@!^&* ]{6,}$/",$value)){
                $errors[$key] = "format $key tidak sesuai";
            }
        }else if($key == 'password'){
            if(!preg_match("/^[0-9]+[a-z#$@!^&*]{7,}$/",$value)){
                $errors[$key] = "format $key tidak sesuai";
            }
        }
    }
}


$errors = [];
$success = False;
if(isset($_POST['submit'])){
    if($_POST['submit']=='Kirim'){
        foreach($_POST as $key => $val){
            $val = trim($val);     
            $_POST[$key]=htmlspecialchars($val);
        }
        validate($errors,$_POST);
        if($errors){
            include 'registrasi.php';
        }else{
            $newData = $_POST;
            include 'login.php';
        }
    }else{
        $_POST = [];
        include 'registrasi.php';
    }
}else{
    include 'registrasi.php';
}