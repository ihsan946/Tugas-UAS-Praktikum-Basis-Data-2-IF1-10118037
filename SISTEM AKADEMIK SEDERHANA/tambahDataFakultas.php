<html>
<body>
    <h1>Tambah Data Fakultas</h1>
    <a href="tampildataFakultas.php"><button>Lihat Data Fakultas</button></a>
    <form action="fakultasSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>KODE FAKULTAS</td>
                <td>:</td>
                <td><input type="text" name="Kode_Fakultas" maxlength="3" size="3"></td>
            </tr>

            <tr>
                <td>NAMA FAKULTAS</td>
                <td>:</td>
                <td><input type="text" name="Nama_Fakultas" maxlength="30" size="30"></td>
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