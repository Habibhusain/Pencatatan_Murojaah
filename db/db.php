<?php

$db= new SQLite3("murojaah.sqlite");
if(!$db){
    echo $db->lastErrorMsg();
    exit();
}else{
    // echo "Open database berhasil";
}



$db->query("CREATE TABLE IF NOT EXISTS murojaah (id INTEGER PRIMARY KEY AUTOINCREMENT, tanggal TEXT NOT NULL ,juz INTEGER NOT NULL,surah TEXT NOT NULL,ayat TEXT NOT NULL,halaman INTEGER NOT NULL)");

