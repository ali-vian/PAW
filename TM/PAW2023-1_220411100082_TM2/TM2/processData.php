<?php

function validate(&$errors,$post){
    foreach($post as $key => $value ){
        if(empty($value) || !isset($post[$key])){
            $errors[$key] = "$key tidak boleh kosong";
        }else if($key == 'Nama'){
            if(!preg_match("/^[A-Za-z ]{3,}$/",$value)){
                $errors[$key] = "$key hanya boleh menggunakan huruf dan spasi min 3 karakter";
            }
        }else if($key == 'NIK'){
            if(!preg_match("/^[0-9]{16}$/",$value)){
                $errors[$key] = "$key hanya boleh mengunakan angka dengan panjang 16 karakter";
            }
        }else if($key == 'Nomor_HP'){
            if(!preg_match("/^[0-9]{10,14}$/",$value)){
                $errors[$key] = "Nomor HP hanya boleh mengunakan angka dengan panjang 10-13 karakter";
            }
        }else if($key == 'NPWP'){
            if(!preg_match("/^[0-9]{16}$/",$value)){
                $errors[$key] = "$key hanya boleh mengunakan angka dengan panjang 16 karakter";
            }
        }else if($key == 'Email'){
            if(!filter_var($value,FILTER_VALIDATE_EMAIL) ){
                $errors[$key] = "Format $key tidak sesuai";
            }
        }else if($key == 'Kode'){
            if(!preg_match("/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{6}+$/",$value)){
                $errors[$key] = "$key harus mengunakan kombinasi alfanumerik dengan panjang 6 karakter";
            }
        }else if($key == 'Alamat' || $key == 'Nama_Usaha'){
            if(!preg_match("/^[a-zA-Z0-9 ,.-]+$/",$value)){
                $errors[$key] = "$key tidak boleh menggunakan simbol";
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
        if(!isset($_POST['gender'])){
            $errors['gender'] = 'Harus memilih jenis kelamin';
        }
        if($errors){
            include 'index.php';
        }else{
            $success = True;
            include 'index.php';
;        }
    }else{
        $_POST = [];
        include 'index.php';
    }
}else{
    include 'index.php';
}