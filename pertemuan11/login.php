<?php
    if(isset($_POST['login']))
    {
        function checkPassword($username,$password){
            $dbc =  new PDO('mysql:host=localhost;dbname=customerdb','root','');
            $statement = $dbc->prepare("SELECT * FROM admins WHERE username = :username and password = SHA2(:password,0)");
            $statement->bindValue(':username',$username);
            $statement->bindValue(':password',$password);
            $statement->execute();
            return $statement->rowCount()>0;
        };
      if(checkPassword($_POST['username'],$_POST['password'])){
        echo "Login berhasil !";
        session_start();
        $_SESSION['isAdmin'] = true;
        header("Location: http://{$_SERVER['HTTP_HOST']}/PAW/pertemuan11/private.php");
        exit();
      }else{
        echo "Password Salah !";
      }
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="login" name="login">
        </form>
    </body>
    </html>
