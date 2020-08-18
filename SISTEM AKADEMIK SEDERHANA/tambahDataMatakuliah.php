<html>
<body>
<?php
include_once("koneksi.php");
?>
    <h1>Tambah Data Matakuliah</h1>
    <a href="tampildataMatakuliah.php"><button>Lihat Data Matakuliah</button></a>
    <form action="matakuliahSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>KODE MATAKULIAH</td>
                <td>:</td>
                <td><input type="text" name="Kode_Matakuliah" maxlength="8" size="8"></td>
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
                <td><input type="text" name="Nama_Matakuliah" maxlength="30" size="30"></td>
            </tr>
			<tr>
                <td>SKS</td>
                <td>:</td>
                <td><input type="text" name="Sks" maxlength="1" size="1"></td>
            </tr>
            <tr>
                <td>SEMESTER</td>
                <td>:</td>
                <td><input type="text" name="Semester" maxlength="1" size="1"></td>
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