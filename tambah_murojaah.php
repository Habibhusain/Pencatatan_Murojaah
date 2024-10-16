<?php

require "db/db.php";


if(isset($_POST['surah']) && $_POST['surah'] !=''){

    $tanggal=$_POST['tanggal'];
    $juz = $_POST['juz'];
    $surah = $_POST['surah'];
    $ayat = $_POST['ayat'];
    $halaman = $_POST['halaman'];

    $tambah_data_murojaah="INSERT INTO murojaah (tanggal,juz,surah,ayat,halaman) VALUES ('$tanggal','$juz','$surah','$ayat','$halaman')";
    $tambah_murojaah= $db->query($tambah_data_murojaah);
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
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
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