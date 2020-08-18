<html>
<head></head>
<h1><center>Tampil data Jurusan</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariNamaMahasiswa"]);
$sql = "SELECT * FROM mahasiswa WHERE Nama_Mhs LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataMahasiswa.php">KLIK DISINI UNTUK TAMBAH DATA MAHASISWA</a></button>

<Table border = "2">
<tr><th colspan = "6">Data Mahasiswa</th></tr>
<tr>
	<th>NIM</th>
	<th>NAMA MAHASISWA</th>
	<th>ALAMAT</th>
	<th>NO TELP</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["NIM"];?></td>
	<td><?php echo $barisdata["Nama_Mhs"];?></td>
	<td><?php echo $barisdata["Alamat"];?></td>
	<td><?php echo $barisdata["No_telp"];?></td>
	<td><a href="ubahDataMahasiswa.php?NIM=<?php echo $barisdata["NIM"]?>">Edit</a> 
        <a href="hapusDataMahasiswa.php?NIM=<?php echo $barisdata["NIM"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>