<html>
    <head>
        <title>Tiket Pesawat</title>
    </head>
    <body>
        <form action="cetak_pesawat.php" method="POST">
        <table border="2">
            <tr>
                <td colspan="2" align="center">PEMESANAN TIKET PESAWAT</td>
            </tr>
            <tr>
                <td>Nama Pemesanan</td>
                <td><input type="text" name="nama" required placeholder="Input Nama"></td>
            </tr>
            <tr>
                <td>Kode Jurusan</td>
                <td><select name="kode">
                    <option value="selected">-Pilih-</option>
                    <option value="JB">JB</option>
                    <option value="JS">JS</option>
                    <option value="JK">JK</option>
            </td>
            </tr>
            <tr>
                <td>Jumlah Pesan</td>
                <td><input type="text" name="jumlah" required placeholder="Input Jumlah"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="cetak" value="CETAK">
                                <input type="reset" name="batal" value="BATAL">
            </td>
            </tr>
            </form>
        </table>
    </body>
</html>