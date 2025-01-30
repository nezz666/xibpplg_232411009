<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];
$kentang = $_POST['kentang'];
$nasi = $_POST['nasi'];
$telur = $_POST['telur'];
$biaya = 0;

$tgl= date('d/m/y');
$jam= gmdate('h:i:s',time()+60*60*7);

if ($paket=='Paket 1')
{
    $paket='Nasi, Ayam Goreng, Teh Botol';
    $harga=12000;
}
elseif ($paket=='Paket 2')
{
    $pilihan='Nasi, Lele Goreng, Es Teh Manis';
    $harga=10000;
}
elseif ($paket=='Paket 3')
{
    $pilihan='Nasi, Ayam Goreng, Lele Goreng, Teh Botol';
    $harga=20000;
}

if ($nasi==true)
{
    $nasi='Nasi';
    $biaya+=2500;
}else{
    $nasi=' ';
    $biaya+=0;
}
if ($kentang==true)
{
    $kentang='Kentang Goreng';
    $biaya+=3000;
}else{
    $kentang='';
    $biaya+=0;
}
if ($telur==true)
{
    $telur='Telur Rebus';
    $biaya+=2000;
}else{
    $telur+=0;
}

$subtotal=$harga+$biaya;
if ($subtotal>=15000)
{
    $potongan=$subtotal*0.1;
    $total=$subtotal-$potongan;
}else{
    $total=$subtotal;
    $potongan=0;
}

echo "<pre>
      <h1>BUKTI PEMBAYARAN PECEL LELE LELO</h1>
      Tanggal Cetak      : $tgl<br>
      Jam Cetak          : $jam<br>
      Nama Pembeli       : $nama<br>
      =======================================<br>
      Pilihan Paket      : $pilihan<br>
      Menu Tambahan      : $nasi $kentang $telur<br>
      Harga Paket        : $harga<br>
      Biaya Tambahan     : $biaya<br>
      =======================================(+)<br>
      Subtotal           : $subtotal<br>
      Potongan           : $potongan<br>
      =======================================(-)<br>
      Total Bayar        : $total<br>
      </pre>
      ";

?>

