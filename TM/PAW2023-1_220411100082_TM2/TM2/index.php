<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220411100082</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Pendataan Pelaku Usaha Ekonomi Kreatif di Kabupaten Jombang</h2>
    <fieldset>
        <legend><h3>Isi Data berikut :</h3></legend>
        <?php if(isset($success) && $success):?>
            <h3> Form berhasil di submit tidak ada erorr</h3>
        <?php else: ?>
        <form name="myForm" action="processData.php" method="POST">
            <div class="field">
                <label for="Nama">Nama Pemilik</label>
                <div class="inp">
                    <input size="31" type="text" name="Nama" id="Nama" 
                    value="<?= isset($_POST['Nama']) ? $_POST['Nama'] : '' ?>">
                </div>
                <span><?= isset($errors['Nama']) ? $errors['Nama'] : ''?></span>
            </div>
            <div class="field">
                <label for="NIK">NIK Pemilik</label>
                <div class="inp">
                    <input size="31" type="text" name="NIK" id="NIK" 
                    value="<?= isset($_POST['NIK']) ? $_POST['NIK'] : '' ?>">
                </div>
                <span><?= isset($errors['NIK']) ? $errors['NIK'] : ''?></span>
            </div>
            <div class="field">
                <label>Jenis Kelamin</label>
                <div class="inp">
                    <div class="gender">
                        <input size="31" type="radio" name="gender" id="laki"  value="laki" 
                        <?= isset($_POST['gender']) && $_POST['gender']=='laki' ? 'checked' : '' ?> >
                        <label for="laki">Laki - Laki</label>
                        <input size="31" type="radio" name="gender" id="perempuan" value="perempuan" 
                        <?= isset($_POST['gender']) && $_POST['gender']=='perempuan' ? 'checked' : '' ?> >
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <span><?= isset($errors['gender']) ? $errors['gender'] : ''?></span>
            </div>
            <div class="field">
                <label for="Nomor_HP">No Telepon</label>
                <div class="inp">
                    <input size="31" type="text" name="Nomor_HP" id="Nomor_HP" 
                    value="<?= isset($_POST['Nomor_HP']) ? $_POST['Nomor_HP'] : '' ?>">
                </div>
                <span><?= isset($errors['Nomor_HP']) ? $errors['Nomor_HP'] : ''?></span>
            </div>
            <div class="field">
                <label for="NPWP">NPWP (Nomor Pokok Wajib Pajak)</label>
                <div class="inp">
                    <input size="31" type="text" name="NPWP" id="NPWP" 
                    value="<?= isset($_POST['NPWP']) ? $_POST['NPWP'] : '' ?>">
                </div>
                <span><?= isset($errors['NPWP']) ? $errors['NPWP'] : ''?></span>
            </div> 
            <div class="field">
                <label for="Email">Email</label>
                <div class="inp">
                    <input size="31" type="text" name="Email" id="Email" 
                    value="<?= isset($_POST['Email']) ? $_POST['Email'] : '' ?>">
                </div>
                <span><?= isset($errors['Email']) ? $errors['Email'] : ''?></span>
            </div> 
            <div class="field">
                <label for="Nama_Usaha">Nama Usaha</label>
                <div class="inp">
                    <input size="31" type="text" name="Nama_Usaha" id="Nama_Usaha" 
                    value="<?= isset($_POST['Nama_Usaha']) ? $_POST['Nama_Usaha'] : '' ?>">
                </div>
                <span><?= isset($errors['Nama_Usaha']) ? $errors['Nama_Usaha'] : ''?></span>
            </div>
            <div class="field">
                <label for="sektor">Sektor Usaha</label>
                <div class="inp">      
                    <select name="Sektor" id="Sektor">
                        <option value="">  Pilih  </option>
                        <option value="1" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '1'? 'selected' : '' ?>>Seni Rupa</option>
                        <option value="2" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '2'? 'selected' : '' ?>>Desain Produk</option>
                        <option value="3" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '3'? 'selected' : '' ?>>Musik</option>
                        <option value="4" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '4'? 'selected' : '' ?>>Fashion</option>
                        <option value="5" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '5'? 'selected' : '' ?>>Musik</option>
                        <option value="6" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '6'? 'selected' : '' ?>>Film,Animasi,Video</option>
                        <option value="7" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '7'? 'selected' : '' ?>>Fotografi</option>
                        <option value="8" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '8'? 'selected' : '' ?>>Aplikasi</option>
                        <option value="9" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '9'? 'selected' : '' ?>>Kuliner</option>
                        <option value="10" <?= isset($_POST['Sektor']) && $_POST['Sektor'] == '10'? 'selected' : '' ?>>Televisi & Radio</option>
                    </select>
                </div>
                <span><?= isset($errors['Sektor']) ? $errors['Sektor'] : ''?></span>
            </div>
            <div class="field">
                <label for="Alamat">Alamat Usaha</label>
                <div class="inp">
                    <textarea name="Alamat" id="Alamat" cols="32" rows="4"><?= 
                    isset($_POST['Alamat'])? $_POST['Alamat'] : '' ?></textarea>
                </div>
                <span><?= isset($errors['Alamat']) ? $errors['Alamat'] : ''?></span>
            </div> 
            <div class="field">
                <label for="Kode">Kode Usaha</label>
                <div class="inp">
                    <input size="31" type="text" name="Kode" id="Kode" 
                    value="<?= isset($_POST['Kode']) ? $_POST['Kode'] : '' ?>">
                </div>
                <span><?= isset($errors['Kode']) ? $errors['Kode'] : ''?></span>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Reset">
                <input type="submit" name="submit" value="Kirim">
            </div> 
        </form>
        <?php endif; ?>
    </fieldset>
</body>
</html>