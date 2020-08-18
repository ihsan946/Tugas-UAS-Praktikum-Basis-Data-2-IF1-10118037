<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <a href="tampildataMahasiswa.php"><button>Lihat Data Mahasiswa</button></a>
    <?php
    if (isset($_GET["NIM"])) {
        $db = dbConnect();
        $NIM = $db->escape_string($_GET["NIM"]);
        $dataMahasiswa = getDataMahasiswa($NIM);

        if ($dataMahasiswa) {
    ?>
            <form action="mahasiswaUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="text" name="NIM" maxlength="8" size="8" 
                                   value="<?php echo $_GET["NIM"];?>" readonly></td>     
                    </tr>
					<tr>
						<td>NAMA MAHASISWA</td>
						<td>:</td>
						<td><input type="text" name = "Nama_Mahasiswa" value = "<?php echo $dataMahasiswa["Nama_Mhs"];?>" size ="40" Maxlength="40"></td>
					</tr>
                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td><input type = "text" name = "Alamat" value = "<?php echo $dataMahasiswa["Alamat"];?>" size = "60" Maxlength = "60"></td>
                    </tr>
					<tr>
                        <td>NO TELP</td>
                        <td>:</td>
                        <td><input type = "text" name = "No_Telp" value = "<?php echo $dataMahasiswa["No_telp"];?>" size = "60" Maxlength = "60"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" value="Simpan" name="TblUpdate">
                        <input type="reset" value="Reset"></td>

                    </tr>
                </table>
            </form>
    <?php
        } else
            echo "Data Jurusan tidak ditemukan";
    } else
        echo "Data Tidak ada";
    ?>
</body>
</html>