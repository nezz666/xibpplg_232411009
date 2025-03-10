<?php

include "config/koneksi.php";

$id = $_GET['id_hapus'];
$simpan = mysqli_query($koneksi,"DELETE FROM tbkue WHERE kodekue = '$id'");
if ($simpan){
    echo "<script>alert('Data makanan berhasil disimpan');
    window.location.href='data_kue.php';</script>";
}else{
    echo "<script>alert('Data makanan gagal disimpan');
    window.location.href='data_kue.php';</script>";
}

?>