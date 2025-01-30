<!DOCTYPE html>
<html>
    <title>Buku Online</title>
</head>
<body>
<form action="tampilbukuonline.php" method="POST">
<pre>
<h2>INPUT PEMBELIAN BUKU ONLINE</h2>
<hr>
Nama Pembeli                 <input type="text" name="nama"><br>
Judul Buku                   <input type="text" name="judul"><br>
Jenis Buku                   <select name="jenis">
                         <option value="selected">-Pilih-</option>
                         <option value="Novel">-Novel-</option>
                         <option value="Komik">-Komik-</option>
                         <option value="Majalah">-Majalah-</option>
                         </select><br>
Pembayaran               <input type="radio" name="pembayaran" value="COD">COD<br>
                         <input type="radio" name="pembayaran" value="Transfer">Transfer<br>
Catatan                  <textarea name="catatan"></textarea>
<input type="submit" name="tampil" value="TAMPIL">    <input type="reset" name="batal" value="BATAL">
</pre>
</form>
</body>
</html>