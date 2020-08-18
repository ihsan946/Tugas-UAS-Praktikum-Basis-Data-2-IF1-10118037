<html>
<body>
    <h1>Tambah Data Dosen</h1>
    <a href="tampildataDosen.php"><button>View Data Dosen</button></a>
    <form action="dosenSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="NIK" maxlength="15" size="15"></td>
            </tr>

            <tr>
                <td>NAMA DOSEN</td>
                <td>:</td>
                <td><input type="text" name="Nama" maxlength="50" size="50"></td>
            </tr>

            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="Alamat" maxlength="60" size="60"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td><input type="text" name="NoTelp" id="" maxlength="14" size="14"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" value="Simpan" name="TblSimpan"></td>

            </tr>
        </table>
    </form>
</body>	
</html>