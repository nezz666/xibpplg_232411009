<?php

$nama = $_POST['nama'];
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

$tgl= date('d/m/Y');
$jam= gmdate('H:i:s', time()+60*60*7);

if ($kode=='JB')
{
    $jurusan='Jakarta-Bali';
    $biaya=1500000;
}
elseif ($kode=='JS')
{
    $jurusan='Jakarta-Singapore';
    $biaya=1300000;
}
elseif ($kode=='JK')
{
    $jurusan='Jakarta-Kuala Lumpur';
    $biaya=1400000;
}

$total=$jumlah*$biaya;

echo "<pre>
      <h3>BUKTI PEMESANAN PESAWAT</h3>
      <hr width=20% align=left>
      Nama Pemesan      : $nama<br>
      Kode Jurusan      : $kode<br>
      Jurusan           : $jurusan<br>
      Biaya             : Rp. $biaya<br>
      Jumlah Pesan      : $jumlah<br>
      <hr width=20% align=left>
      Total Biaya       : $total<br>
      <hr width=20% align=left>
      Tanggal Pesan     : $tgl<br>
      Jam Pesan         : $jam<br>
      </pre>

     ";

?>