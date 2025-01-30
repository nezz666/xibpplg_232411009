<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="output_pecel.php" method="POST"
<h3>RUMAH MAKAN PECEL LELE LELO</h3>
<table border="2">
<tr>
    <td>Nama Pembeli</td>
    <td>:</td>
    <td><input type="text" name="nama" required placeholder="Input Nama"></td>
</tr>
<tr>
    <td>Alamat Pembeli</td>
    <td>:</td>
    <td><textarea name="alamat" required placeholder="Masukkan Alamat"></textarea></td>
</tr>
<tr>
    <td>Paket</td>
    <td>:</td>
    <td>
        <select name="paket">
            <option value="selected">-Pilih</option>
            <option value="Paket 1">Paket 1</option>
            <option value="Paket 2">Paket 2</option>
            <option value="Paket 3">Paket 3</option>
        </select>
    </td>
</tr>
<tr>
    <td>Menu Tambahan</td>
    <td>:</td>
    <td>
        <select name="menu">
        <input type="checkbox" name="kentang" value="Kentang Goreng">Kentang Goreng<br>
        <input type="checkbox" name="nasi" value="nasi" >Nasi<br>
        <input type="checkbox" name="telur" value="Telur Rebus">Telur Rebus<br>
        </select>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
    <input type="submit" name="proses" value="PROSES"> 
    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
</form>
</table>
</body>
</html>