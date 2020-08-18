<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Matakuliah</h1>
    <a href="tampildataMatakuliah.php"><button>Lihat Data Matakuliah</button></a>
    <?php
    if (isset($_GET["Kode_Matkul"])) {
        $db = dbConnect();
        $Kode_Matkul = $db->escape_string($_GET["Kode_Matkul"]);
        $dataMatakuliah = getDataMatakuliah($Kode_Matkul);

        if ($dataMatakuliah) {
    ?>
            <form action="matakuliahUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>KODE MATAKULIAH</td>
                        <td>:</td>
                        <td><input type="text" name="Kode_Matkul" maxlength="8" size="8" 
                                   value="<?php echo $_GET["Kode_Matkul"];?>" readonly></td>     
                    </tr>
					<tr>
						<td>KODE JURUSAN</td>
						<td>:</td>
						<td>
							<select name="Kode_Jurusan">
										<option value="">Pilih Kode Jurusan</option>
										<?php
										$data = getListJurusan();
										
										foreach ($data as $barisdata) {
											echo "<option value= '".$barisdata["Kode_Jurusan"]."'>".$barisdata["Kode_Jurusan"]."</option>\n";
										}
										?>
									</select>
						</td>
					</tr>
					<tr>
						<td>NAMA MATAKULIAH</td>
						<td>:</td>
						<td><input type="text" name="Nama_Matakuliah" value="<?php echo $dataMatakuliah["Nama_Matkul"];?>" maxlength="30" size="30"></td>
					</tr>
					<tr>
						<td>SKS</td>
						<td>:</td>
						<td><input type="text" name="Sks" value="<?php echo $dataMatakuliah["SKS"];?>" maxlength="1" size="1"></td>
					</tr>
					<tr>
						<td>SEMESTER</td>
						<td>:</td>
						<td><input type="text" name="Semester" value="<?php echo $dataMatakuliah["Semester"];?>" maxlength="1" size="1"></td>
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