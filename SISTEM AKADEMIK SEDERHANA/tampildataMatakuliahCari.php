<html>
<head></head>
<h1><center>Tampil data Matakuliah</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariNamaMatakuliah"]);
$sql = "SELECT * FROM matakuliah WHERE Nama_Matkul LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataMatakuliah.php">KLIK DISINI UNTUK TAMBAH DATA MATAKULIAH</a></button>

<Table border = "2">
<tr><th colspan = "7">Data Matakuliah</th></tr>
<tr>
	<th>KODE MATAKULIAH</th>
	<th>KODE JURUSAN</th>
	<th>NAMA MATAKULIAH</th>
	<th>SKS</th>
	<th>SEMESTER</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["Kode_Matkul"];?></td>
	<td><?php echo $barisdata["Kode_Jurusan"];?></td>
	<td><?php echo $barisdata["Nama_Matkul"];?></td>
	<td><?php echo $barisdata["SKS"];?></td>
	<td><?php echo $barisdata["Semester"];?></td>
	<td><a href="ubahDataMatakuliah.php?Kode_Matkul=<?php echo $barisdata["Kode_Matkul"]?>">Edit</a> 
        <a href="hapusDataMatakuliah.php?Kode_Matkul=<?php echo $barisdata["Kode_Matkul"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>