<html>
<body>
<?php
include_once("koneksi.php");
?>
    <h1>Tambah Data Jurusan</h1>
    <a href="tampildataJurusan.php"><button>Lihat Data Jurusan</button></a>
    <form action="jurusanSimpan.php" method="post" name="frm">
        <table>
            <tr>
                <td>KODE JURUSAN</td>
                <td>:</td>
                <td><input type="text" name="Kode_Jurusan" maxlength="8" size="8"></td>
            </tr>

			<tr>
				<td>KODE FAKULTAS</td>
				<td>:</td>
				<td>
					<select name="Kode_Fakultas">
								<option value="">Pilih Kode Fakultas</option>
                                <?php
                                $data = getListFakultas();
								
                                foreach ($data as $barisdata) {
                                    echo "<option value= '".$barisdata["Kode_Fakultas"]."'>".$barisdata["Kode_Fakultas"]."</option>\n";
                                }
                                ?>
                            </select>
				</td>
			</tr>
            <tr>
                <td>NAMA JURUSAN</td>
                <td>:</td>
                <td><input type="text" name="Nama_Jurusan" maxlength="30" size="30"></td>
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