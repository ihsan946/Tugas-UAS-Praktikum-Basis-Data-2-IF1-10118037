<html>
<body>
<?php
include_once("koneksi.php");
?>
    <h1>Tambah Data Perwalian</h1>
    <a href="tampildataPerwalian.php"><button>Lihat Data Perwalian</button></a>
    <form action="perwalianSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
					<select name="NIM">
								<option value="">Pilih NIM</option>
                                <?php
                                $data = getListNim();
								
                                foreach ($data as $barisdata) {
                                    echo "<option value= '".$barisdata["NIM"]."'>".$barisdata["NIM"]."</option>\n";
                                }
                                ?>
                            </select>
				</td>
            </tr>
			<tr>
				<td>KODE MATAKULIAH</td>
				<td>:</td>
				<td>
					<select name="Kode_Matkul">
								<option value="">Pilih Kode Matakuliah</option>
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
                <td>NIK</td>
                <td>:</td>
                <td>
					<select name="NIK">
								<option value="">Pilih NIK</option>
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
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" value="Simpan" name="TblSimpan"></td>

            </tr>
        </table>
    </form>
</body>	
</html>