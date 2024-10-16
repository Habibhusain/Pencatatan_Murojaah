<?php
require "db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murojaah Mandiri</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-text">
                <h1>Sudah Murojaah Hari ini?</h1>
                <h2>Yuk Murojaah dulu</h2>
            </div>
        </div> 
    </nav>
    <section class="content">
            <div class="content-judul">
                <h2>Motivasi</h2>
            </div>
            <div class="container">
                <div class="content-box">
                    <div class="content-boxes">
                            <h3>"Tiap kali kamu murojaah, kamu sedang menabung pahala yang tak ternilai di sisi Allah."</h3>
                    </div>
                    <div class="content-boxes">
                            <h3>"Setiap yang di ulangan adalah peluang untuk memperbaiki dan memperkuat hafalanmu."</h3>
                    </div>
                    <div class="content-boxes">
                            <h3>"Murojaah bukan hanya sekadar mengingat dan menggulang, tapi juga meneguhkan suasana hati akan kecintaanmu kepada Al-Quran."</h3>
                    </div>
                </div>
            </div>
        </section>
    <div class="box">
            <div class="container">
                <div class="boxes">
                                 <h3>Murojaah</h3>
                            <?php
                    $hitung_data_murojaah="SELECT COUNT(*) FROM murojaah  ";
                    $hitung_murojaah = $db->query($hitung_data_murojaah);
                    while($hitung =$hitung_murojaah->fetchArray()):
                    ?>
                                <h4>Total Murojaah : <?php echo $hitung[0];?></h4>
                                <?php endwhile; ?>
                    <table>
                        <thead>
                          
                                <th colspan="7"><a href="tambah_murojaah.php">Tambah Murojaah</a></th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Juz</th>
                                <th>Surah</th>
                                <th>Ayat</th>
                                <th>Halaman</th>
                                <th colspan="1">Optional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tampil_murojaah="SELECT * FROM murojaah ORDER BY tanggal DESC ";
                            $tampil=$db->query($tampil_murojaah);
                            $no=1;
                            while($row = $tampil->fetchArray()):
                            ?>
                            <tr>
                                <td><?php echo $no;?></td>
                                <td><?php echo date ('d-m-Y',strtotime($row['tanggal']));?></td>
                                <td><?php echo $row['juz'];?></td>
                                <td><?php echo $row['surah'];?></td>
                                <td><?php echo $row['ayat'];?></td>
                                <td><?php echo $row['halaman'];?></td>
                                <td><a href="edit_murojaah.php?id=<?php echo $row['id'];?>">Edit Murojaah</a></td>
                                <td><a href="hapus_murojaah.php?id=<?php echo $row['id'];?>">Hapus</a></td>
                            </tr>
                            <?php
                            $no++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <footer class="copy">
            <div class="copy-box">
                <div class="copy-boxes">
                <h3>Jangan Lupa Tambah Murojaahnya ya!!</h3>
                <p>&copy; by: Habib Husain Nurrohim </p>
                
                </div>
            </div>
        </footer>
</body>
</html>