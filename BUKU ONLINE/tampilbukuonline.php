<?php

$nama = $_POST['nama'];
$judul = $_POST['judul'];
$jenis = $_POST['jenis'];
$pembayaran = $_POST['pembayaran'];
$catatan = $_POST['catatan'];

echo "<pre>";
echo "<h1>TAMPIL BUKU ONLINE<h1/><br>";
echo "===========================<br>";
echo "Nama           : $nama<br>";
echo "Judul          : $judul<br>";
echo "Jenis          : $jenis<br>";
echo "Pembayaran     : $pembayaran<br>";
echo "Catatan        : $catatan<br>";
echo "===========================<br>";
echo "</pre>";

?>
<a href="inputbukuonline.php">Saya Nak Input Lagi</a>
