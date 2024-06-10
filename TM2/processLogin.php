<?php

function validate(&$errors,$post){
    foreach($post as $key => $value ){
        if(empty($value) || !isset($post[$key])){
            $errors[$key] = "$key tidak boleh kosong";
        }else if($key == 'password'){
            if(!preg_match("/^(?=.*\d)[^#$@!^&* ]{6,}$/",$value)){
                $errors[$key] = "$key harus mengunakan kombinasi alfanumerik dengan panjang 6 karakter";
            }
        }else if($key == 'password'){
            if(!preg_match("/^[0-9]+[a-z#$@!^&*]{7,}$/",$value)){
                $errors[$key] = "format $key salah";
            }
        }
    }
}

function cekMatch(&$erorrs,$post){
    if($post['username']!=$post['username1']){
        $erorrs['username'] = 'username tidak terdaftar';
    }
    elseif($post['password']!=$post['password1']){
        $erorrs['password'] = 'password tidak sesuai';
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
        cekMatch($errors,$_POST);
        if($errors){
            include 'login.php';
        }else{
            echo '<script>alert("Login berhasil");</script>';
        }
    }else{
        $_POST = [];
        include 'login.php';
    }
}else{
    include 'login.php';
}