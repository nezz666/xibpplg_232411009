<?php

include "config/koneksi.php";

$kode   = $_POST['kodekue'];
$nama  = $_POST['namakue'];
$rating  = $_POST['rating'];
$catatan  = $_POST['catatan'];

$simpan = mysqli_query($koneksi, "INSERT INTO tbkue VALUES ('$kode','$nama','$rating','$catatan')");
if ($simpan)
{
    echo "<script>alert('Data makanan berhasil disimpan');
    window.location.href='data_kue.php';</script>";
}
else
{
    echo "<script>alert('Data makanan gagal disimpan');
    window.location.href='tambah_kue.php';</script>";
}

?>