<html>
<head></head>
<h1><center>Tampil data Nilai</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();


$sql = "SELECT * FROM nilai";
$res = $db->query($sql);
$data=$res->fetch_all(MYSQLI_ASSOC);
?>
<form method = "GET" action = "tampildataNilaiCari.php">
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataNilai.php">KLIK DISINI UNTUK TAMBAH DATA NILAI</a></button>
<input type = "text" Name = "cariNim" maxlength = "30" size = "30">
<input type = "submit" value = "CARI">

</form>
<Table border = "2">
<tr><th colspan = "7">Data Nilai</th></tr>
<tr>
	<th>NIM</th>
	<th>KODE MATAKULIAH</th>
	<th>NILAI</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["NIM"];?></td>
	<td><?php echo $barisdata["Kode_Matkul"];?></td>
	<td><?php echo $barisdata["Nilai"];?></td>
	<td><a href="ubahDataNilai.php?NIM=<?php echo $barisdata["NIM"]?>&Kode_Matkul=<?php echo $barisdata["Kode_Matkul"];?>&Id_Nilai=<?php echo $barisdata["Id_Nilai"];?>">Edit</a> 
        <a href="hapusDataNilai.php?Id_Nilai=<?php echo $barisdata["Id_Nilai"];?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>