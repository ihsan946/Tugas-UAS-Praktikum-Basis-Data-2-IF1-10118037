<html>
<body>
<?php
include_once("koneksi.php");
?>
    <h1>Tambah Data Mahasiswa</h1>
    <a href="tampildataMahasiswa.php"><button>Lihat Data Mahasiswa</button></a>
    <form action="mahasiswaSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM" maxlength="8" size="8"></td>
            </tr>
			<tr>
                <td>NAMA MAHASISWA</td>
                <td>:</td>
                <td><input type="text" name="Nama_Mahasiswa" maxlength="40" size="40"></td>
            </tr>
			<tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="Alamat" maxlength="60" size="60"></td>
            </tr>
            <tr>
                <td>NO TELP</td>
                <td>:</td>
                <td><input type="text" name="No_Telp" maxlength="14" size="14"></td>
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