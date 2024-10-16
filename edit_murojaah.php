<?php

require "db/db.php";

$get_id = $_GET['id'];
function data_murojaah(){
    global $db;
    global $get_id;

    $ambil_data_murojaah="SELECT * FROM murojaah WHERE id='$get_id'";
    $ambil_murojaah = $db->query($ambil_data_murojaah);
    $ambil = $ambil_murojaah->fetchArray();

    return $ambil;
}

    if(isset($_POST['surah']) && $_POST['surah'] !='')
    {
        $get_tanggal=$_POST['tanggal'];
        $get_juz=$_POST['juz'];
        $get_surah=$_POST['surah'];
        $get_ayat=$_POST['ayat'];
        $get_halaman=$_POST['halaman'];

        $edit_data_murojaah="UPDATE murojaah SET 
                            tanggal='$get_tanggal', juz='$get_juz', surah='$get_surah', 
                            ayat='$get_ayat', halaman='$get_halaman' WHERE id='$get_id'";
        $edit_murojaah= $db->query($edit_data_murojaah);

        if(data_murojaah())
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
            <form action="edit_murojaah.php?id=<?php echo data_murojaah()['id'];?>" method="POST">
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" value="<?php echo data_murojaah()['tanggal'];?>" required>
                    <label for="">Juz</label>
                    <input type="number" name="juz" value="<?php echo data_murojaah()['juz'];?>" required>
                    <label for="">Surah</label>
                    <input type="text" name="surah" value="<?php echo data_murojaah()['surah'];?>" required>
                    <label for="">Ayat</label>
                    <input type="text" name="ayat" value="<?php echo data_murojaah()['ayat'];?>" required>
                    <label for="">Halaman</label>
                    <input type="text" name="halaman" value="<?php echo data_murojaah()['halaman'];?>" required>
                    <input type="submit" name="submit" value="Edit">
                    <a href="index.php">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>