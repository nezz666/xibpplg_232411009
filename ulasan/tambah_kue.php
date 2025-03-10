<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="tambah_kue_proses.php" method="POST">
<table border="1"
<tr>
    <td colspan="2" align="center">INPUT DATA ULASAN</td>
</tr>
<tr>
    <td>Kode Kue</td>
    <td><input type="text" name="kodekue" required placeholder="Masukkan Kode Kue"></td>
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
</table>
</form>
</html>