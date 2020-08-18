<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Jurusan</h1>
    <a href="tampildataJurusan.php"><button>Lihat Data Jurusan</button></a>
    <?php
    if (isset($_GET["Kode_Jurusan"])) {
        $db = dbConnect();
        $Kode_Jurusan = $db->escape_string($_GET["Kode_Jurusan"]);
        $dataJurusan = getDataJurusan($Kode_Jurusan);
		$namaJurusan = $dataJurusan[2];
        if ($dataJurusan) {
    ?>
            <form action="jurusanUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>KODE JURUSAN</td>
                        <td>:</td>
                        <td><input type="text" name="Kode_Jurusan" maxlength="8" size="8" 
                                   value="<?php echo $_GET["Kode_Jurusan"];?>" readonly></td>     
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
                        <td><input type = "text" name = "Nama_Jurusan" value = "<?php echo $namaJurusan;?>" size = "30" Maxlength = "30"></td>
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