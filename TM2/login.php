<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Login</h2>
    <fieldset>
        <legend><h3>Isi Data Berikut:</h3></legend>
        <form action="processLogin.php" method="post">
            <div class="field">
                <label for="username">Username</label>
                <div class="inp">
                    <input size="31" type="text" name="username" id="username" 
                    value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>">
                </div>
                <span><?= isset($errors['username']) ? $errors['username'] : ''?></span>
            </div>
            <div class="field">
                <label for="password">Password</label>
                <div class="inp">
                    <input type="text" name="password" id="password"
                    value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>">
                </div>
                <span><?= isset($errors['password']) ? $errors['password'] : ''?></span>
            </div>
            <div class="field">
                <input type="hidden" name='username1' value="<?=
                isset($_POST['username1']) ? $_POST['username1'] : $newData['username'] ?>">
                <input type="hidden" name='password1' value="<?= 
                isset($_POST['password1']) ? $_POST['password1'] : $newData['password'] ?>">
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Reset">
                <input type="submit" name="submit" value="Kirim">
            </div> 
        </form>
    </fieldset>
</body>
</html>