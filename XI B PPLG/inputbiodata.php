<!DOCTYPE html>
<html>
    <title>Biodata Siswa</title>
</head>
<body>
<form action="tampilbiodata.php" method="POST">
<pre>
<h3>INPUT BIODATA SISWA</h3>
<hr>
NISN                 <input type="text" name="nisn"><br>
Nama                 <input type="text" name="nama"><br>
Jurusan              <select name="jurusan">
                         <option value="selected">-Pilih-</option>
                         <option value="TKJ">-TKJ-</option>
                         <option value="RPL">-RPL-</option>
                         <option value="MM">-MM-</option>
                         </select><br>
Jenis Kelamin        <input type="radio" name="jenis" value="Laki-laki">Laki-laki<br>
                     <input type="radio" name="jenis" value="Perempuan">Perempuan<br>
Hobby                <input type="checkbox" name="ngoding" value="Ngoding">Ngoding<br>
                     <input type="checkbox" name="desain" value="Desain">Desain<br>
Alamat               <textarea name="alamat"></textarea>
<input type="submit" name="tampil" value="TAMPIL">     <input type="reset" name="batal" value="BATAL">
</pre>
</form>
</body>
</html>
