<?php

$nisn    = $_POST['nisn'];
$nama    = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis   = $_POST['jenis'];
$hobby   = $_POST['hobby'];
$alamat  = $_POST['alamat'];


echo "<pre>";
echo "<h1>TAMPIL BIODATA SISWA</h1><br>";
echo "==================================<br>";
echo "NISN          : $nisn<br>";
echo "Nama          : $nama<br>";
echo "Jurursan      : $jurusan<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Hobby         : $hobby<br>";
echo "Alamat        : $alamat<br>";
echo "==================================<br>";
echo "</pre>";

?>
<a href="inputbiodata.php">Input lagi bisa kali</a>