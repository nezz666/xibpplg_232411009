<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="cetak_obat.php" method="POST">
<table border="1"
<tr>
    <td colspan="2" align="center">INPUT DATA OBAT</td>
</tr>
<tr>
    <td>Kode Obat</td>
    <td><input type="text" name="kode"></td>
</tr>
<tr>
    <td>Nama Obat</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td>Jenis Obat</td>
    <td><select name="jenis">
            <option value="Kapsul">Kapsul</option>
            <option value="Puyer">Puyer</option>
            <option value="Tablet">Tablet</option>
        </select>
    </td>
</tr>
<tr>
    <td>Harga</td>
    <td><input type="radio" name="harga" value="Rp.5.000,-">Rp.5.000,-</br>
        <input type="radio" name="harga" value="Rp.10.000,-">Rp.10.000,-
    </td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="cetak" value="CETAK">
                    <input type="reset" name="batal" value="BATAL">
    </td>
</tr>
</table>
</form>
</form>
</html>