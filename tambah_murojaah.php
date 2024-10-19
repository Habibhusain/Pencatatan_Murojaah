<?php

require "db/db.php";
require "functions.php";


if(isset($_POST['surah']) && $_POST['surah'] !=''){

    $tanggal=$_POST['tanggal'];
    $juz = $_POST['juz'];
    $surah = $_POST['surah'];
    $ayat = $_POST['ayat'];
    $halaman = $_POST['halaman'];

    $tambah_murojaah= tambah_murojaah($tanggal, $juz, $surah, $ayat, $halaman);
    if($tambah_murojaah)
    {
        echo "<script>
        alert('Data Berhasil di Tambah');
        window.location='index.php';
        </script>";
    }else{
        echo "<script>
        alert('Data Gagal di Tambah');
        window.location='tambah_murojaah.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Murojaah</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body-create">

    <div class="create">
        <div class="create-judul">
            <h1>Tambah Murojaah ANDA</h1>
        </div>
        <div class="container">
            <div class="create-box">
                <form action="tambah_murojaah.php" method="POST">
                    <label for="">Tanggal Murojaah</label>
                    <input type="date" name="tanggal" required>
                    <label for="">Juz</label>
                    <select name="juz" required>
                    <option value="1">1</option>
                        <?php for ($i = 2; $i <= 30; $i++): ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <label for="">Surah</label>
                    <input type="text" name="surah" required>
                    <label for="">Ayat</label>
                    <input type="text" name="ayat" required>
                    <label for="">Halaman</label>
                    <input type="text" name="halaman" required>
                    <input type="submit" name="submit" value="Tambah">
                    <a href="index.php">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>