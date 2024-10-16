<?php

function database()
{
        
        $db= new SQLite3("db/db_murojaah.sqlite");
        if(!$db){
            echo $db->lastErrorMsg();
            exit();
        }else{
            // echo "Open database berhasil";
        }

        return $db;
}


function table()
{
    $db = database();
    $table= $db->query("CREATE TABLE IF NOT EXISTS murojaah 
    (id INTEGER PRIMARY KEY AUTOINCREMENT, tanggal TEXT NOT NULL ,juz INTEGER NOT NULL,
    surah TEXT NOT NULL,ayat TEXT NOT NULL,halaman INTEGER NOT NULL)");

    return $table;
}
function get_total_murojaah() {
    $db = database();

    $hitung_data_murojaah = "SELECT COUNT(*) FROM murojaah";
    $hitung_murojaah = $db->query($hitung_data_murojaah);
    $hitung = $hitung_murojaah->fetchArray();

    return $hitung[0];
}

function tampil_murojaah() {
    $db = database();

    $tampil_murojaah = "SELECT * FROM murojaah ORDER BY tanggal DESC";
    $result = $db->query($tampil_murojaah);

    $murojaah_list = [];
    while ($row = $result->fetchArray()) {
        $murojaah_list[] = $row;
    }

    return $murojaah_list;
}

function tambah_murojaah($tanggal, $juz, $surah, $ayat, $halaman)
{
    $db = database();

    $tambah_data_murojaah="INSERT INTO murojaah (tanggal,juz,surah,ayat,halaman) VALUES ('$tanggal','$juz','$surah','$ayat','$halaman')";
    $tambah_murojaah= $db->query($tambah_data_murojaah);
    
    return $tambah_murojaah;

}
function data_murojaah($get_id)
{
    $db= database();
    $tampil_murojaah="SELECT * FROM murojaah WHERE id ='$get_id' ";
    $tampil=$db->query($tampil_murojaah);
    $result = $tampil->fetchArray();

    return $result;
}

function delete_murojaah($get_id){
        $db= database();
        $hapus_murojaah="DELETE FROM murojaah WHERE id='$get_id'";
        $hapus_data=$db->query($hapus_murojaah);

        return $hapus_data;
}
function edit_murojaah($get_id, $get_tanggal,$get_juz,$get_surah,$get_ayat,$get_halaman)
{
        $db = database();

        $edit_data_murojaah="UPDATE murojaah SET 
        tanggal='$get_tanggal', juz='$get_juz', surah='$get_surah', 
        ayat='$get_ayat', halaman='$get_halaman' WHERE id='$get_id'";
        $edit_murojaah= $db->query($edit_data_murojaah);

        return $edit_murojaah;
}
