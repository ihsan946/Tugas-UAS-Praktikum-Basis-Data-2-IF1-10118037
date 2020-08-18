<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Nilai</h1>
    <a href="tampildataNilai.php"><button>Lihat Data Nilai</button></a>
    <?php
    if (isset($_GET["Kode_Matkul"]) AND isset($_GET["NIM"])) {
        $db = dbConnect();
        $Kode_Matkul = $db->escape_string($_GET["Kode_Matkul"]);
		$NIM         = $db->escape_string($_GET["NIM"]);
        $dataNilai 		= getDataNilai($NIM);
		$dataMahasiswa  = getDataMahasiswa($NIM);
		$dataMatakuliah = getDataMatakuliah($Kode_Matkul); 

        if ($dataNilai) {
    ?>
            <form action="nilaiUbah.php" method="post" name="frm">
                <table>
					<tr>
						<td><input type = "text" Name = "Id_Nilai" value = "<?php echo $_GET["Id_Nilai"];?>" readonly size = "3" hidden></td>
					</tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><input type="text" name="Nim" maxlength="8" size="8" 
                                   value="<?php echo $_GET["NIM"];?>" readonly></td>     
                    </tr>
					<tr>
						<td>NAMA MAHASISWA</td>
						<td>:</td>
						<td><input type="text" name="Nama_Mahasiswa" value="<?php echo $dataMahasiswa["Nama_Mhs"];?>" maxlength="30" size="30" readonly></td>
					</tr>
					<tr>
						<td>KODE MATAKULIAH</td>
						<td>:</td>
						<td><input type="text" name="Nim" maxlength="8" size="8" 
                                   value="<?php echo $_GET["Kode_Matkul"];?>" readonly></td>
					</tr>
					<tr>
						<td>NAMA MATAKULIAH</td>
						<td>:</td>
						<td><input type="text" name="Nama_Matakuliah" value="<?php echo $dataMatakuliah["Nama_Matkul"];?>" maxlength="30" size="30" readonly></td>
					</tr>
					<tr>
						<td>NILAI</td>
						<td>:</td>
						<td><input type="text" name="Nilai" value="<?php echo $dataNilai["Nilai"];?>" maxlength="1" size="1"></td>
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
            echo "Data Matakuliah tidak ditemukan";
    } else
        echo "Data Tidak ada";
    ?>
</body>
</html>