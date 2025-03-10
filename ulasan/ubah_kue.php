<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="POST">
<table border="1"
<tr>
    <td colspan="2" align="center">INPUT DATA ULASAN</td>
</tr>
<tr>
    <td>Nama Kue</td>
    <td><input type="text" name="namakue" required placeholder="Masukkan Nama Kue"></td>
</tr>
<tr>
    <td>Rating</td>
    <td><select name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </td>
</tr>
<tr>
<td>CATATAN</td>
    <td><textarea name="catatan" required placeholder="Masukkan Catatan"></textarea></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="simpan" value="SIMPAN">
                    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
<?php

include "config/koneksi.php";

$id = $_GET['id_ubah'];
$nama = $_POST ['namakue'];
$rating = $_POST ['rating'];
$catatan = $_POST ['catatan'];
$simpan = mysqli_query($koneksi,"UPDATE tbkue SET namakue='$nama',rating='$rating',catatan='$catatan'WHERE kodekue='$id'");
if ($simpan){
    echo "<script>alert('Data makanan berhasil disimpan');
    window.location.href='data_kue.php';</script>";
}else{
    echo "<script>alert('Data makanan gagal disimpan');
    window.location.href='data_kue.php';</script>";
}

?>
</table>
</form>
</html>