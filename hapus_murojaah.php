<?php
require "db/db.php";
require "functions.php"; 

$get_id = $_GET['id'];

$hapus = delete_murojaah($get_id);

if ($hapus) {
    echo "<script>
    alert('Data Berhasil di Hapus');
    window.location='index.php';
    </script>";
} else{ 
    echo "<script>
    alert('Data Gagal di Edit');
    window.location='index.php';
    </script>";
}


?>