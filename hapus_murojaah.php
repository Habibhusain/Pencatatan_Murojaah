<?php

require "db/db.php";

$get_id = $_GET['id'];
$hapus_murojaah="DELETE FROM murojaah WHERE id ='$get_id'";
$hapus=$db->query($hapus_murojaah);
if($hapus)
{
    echo "<script>
    alert('Data Berhasil di Hapus');
    window.location='murojaah.php';
    </script>";
}else{
    echo "<script>
    alert('Data Gagal di Edit');
    window.location='murojaah.php';
    </script>";
}


?>