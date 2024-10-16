<?php

require "db/db.php";
require "function.php";

$get_id = $_GET['id'];


    if(isset($_POST['surah']) && $_POST['surah'] !='')
    {
        $get_tanggal=$_POST['tanggal'];
        $get_juz=$_POST['juz'];
        $get_surah=$_POST['surah'];
        $get_ayat=$_POST['ayat'];
        $get_halaman=$_POST['halaman'];

        $update = edit_murojaah($get_id,$get_tanggal,$get_juz,$get_surah,$get_ayat,$get_halaman);

        if($update)
        {
            echo "<script>
                alert('Data Berhasil di Edit');
                window.location='index.php';
                </script>";
        }else{
            echo "<script>
                alert('Data Gagal di Edit');
                window.location='edit_murojaah.php';
                </script>";
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Murojaah</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="edit-body">
    <div class="edited">
    <div class="create-judul">
            <h1>Edit Murojaah</h1>
        </div>
        <div class="container">
            <div class="edited-box">
            <form action="edit_murojaah.php?id=<?php echo data_murojaah($get_id)['id'];?>" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" value="<?php echo data_murojaah($get_id)['tanggal'];?>" required>
                    <label for="">Juz</label>
                    <input type="number" name="juz" value="<?php echo data_murojaah($get_id)['juz'];?>" required>
                    <label for="">Surah</label>
                    <input type="text" name="surah" value="<?php echo data_murojaah($get_id)['surah'];?>" required>
                    <label for="">Ayat</label>
                    <input type="text" name="ayat" value="<?php echo data_murojaah($get_id)['ayat'];?>" required>
                    <label for="">Halaman</label>
                    <input type="text" name="halaman" value="<?php echo data_murojaah($get_id)['halaman'];?>" required>
                    <input type="submit" name="submit" value="Edit">
                    <a href="index.php">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>