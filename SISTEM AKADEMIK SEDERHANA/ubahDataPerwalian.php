<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Perwalian</h1>
    <a href="tampildataPerwalian.php"><button>Lihat Data Perwalian</button></a>
    <?php
    if (isset($_GET["Kode_Matkul"]) AND isset($_GET["NIM"])) {
        $db = dbConnect();
        $Kode_Matkul 	= $db->escape_string($_GET["Kode_Matkul"]);
		$NIM         	= $db->escape_string($_GET["NIM"]);
		$NIK			= $_GET["NIK"];
        $dataPerwalian 	= getDataPerwalian($NIM);
		$dataMahasiswa  = getDataMahasiswa($NIM);
		$dataDosen      = getDataDosen($NIK);
		$dataMatakuliah = getDataMatakuliah($Kode_Matkul); 

        if ($dataPerwalian) {
    ?>
            <form action="perwalianUbah.php" method="post" name="frm">
                <table>
					<tr>
						<td><input type = "text" Name = "Id_Perwalian" value = "<?php echo $_GET["Id_Perwalian"];?>" readonly size = "3" hidden></td>
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
						<td>
							<select name="Kode_Matakuliah">
										<option value="<?php echo $_GET["Kode_Matkul"];?>"><?php echo $_GET["Kode_Matkul"];?></option>
										<?php
										$data = getListKodeMatkul();
										
										foreach ($data as $barisdata) {
											echo "<option value= '".$barisdata["Kode_Matkul"]."'>".$barisdata["Kode_Matkul"]."</option>\n";
										}
										?>
									</select>
						</td>
					</tr>
					<tr>
						<td>NAMA MATAKULIAH</td>
						<td>:</td>
						<td><input type="text" name="Nama_Matakuliah" value="<?php echo $dataMatakuliah["Nama_Matkul"];?>" maxlength="30" size="30" readonly></td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>
							<select name="NIK">
										<option value="<?php echo $_GET["NIK"];?>"><?php echo $_GET["NIK"];?></option>
										<?php
										$data = getListNik();
										
										foreach ($data as $barisdata) {
											echo "<option value= '".$barisdata["NIK"]."'>".$barisdata["NIK"]."</option>\n";
										}
										?>
									</select>
						</td>
					</tr>
					<tr>
						<td>NAMA DOSEN</td>
						<td>:</td>
						<td><input type="text" name="Nama_Mahasiswa" value="<?php echo $dataDosen["Nama_Dosen"];?>" maxlength="30" size="30" readonly></td>
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