<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220411100082 | TM1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="col">
            <div>NIM</div>
            <div>:</div>
            <div>220411100082</div>
        </div>
        <div class="col">
            <div>Parameter Masukan</div>
            <div>:</div>
            <ol class="ol">
                <li>Batas Ukuran</li>
                <li>Warna filter tampilan</li>
            </ol>
        </div>
        <div class="col">
            <div>Tema</div>
            <div>:</div>
            <div>NIM digit akhir bilangan Genap atau Nol</div>
        </div>
    </header>
<?php 
$n = 10;
$warna = "Cyan";
?>
    <div class="container">        
        <b>Contoh Hasil:</b>
        <ul>
            <li>Parameter Masukan:</li>
        </ul>
        <ol>
            <li>Batas Ukuran: <b class="green"><?=$n?></b></li>
            <li>Warna filter tampilan: <b class="green"><?=$warna?></b></li>
        </ol>
        <span>Hasil Tampilan:</span>
    </div>
    <div class="container1">
        <h2>Tabel penjumlahan Ukuran <?="$n x $n"?></h2>
        <?php require_once "functions.php";?>
        <h4>Tampilan Awal Tabel</h4>
        <?php tabelPenjumlahan($n,$warna); ?>
        <h4>Tampilan Hasil Filter Warna <i>"<?=$warna?>"</i> untuk <i>Heading</i> Baris Ganjil</h4>
        <?php tabelPenjumlahan($n,$warna,"ganjil"); ?>
        <h4>Tampilan Hasil Filter Warna <i>"<?=$warna?>"</i> untuk <i>Heading</i> Kolom Pangkat 3</h4>
        <?php tabelPenjumlahan($n,$warna,'pangkat3'); ?>
        <h4>Tampilan Hasil Filter Warna <i>"<?=$warna?>"</i> untuk Bagian Segitiga Bawah dan Perubahan Nilai pada Bagian Lain Sesuai dengan Digit Terakhir NIM</h4>
        <?php tabelPenjumlahan($n,$warna,'segitigaBawah');?>
    </div>
    
</body>
</html>