<html>
<head></head>
<h1><center>Tampil data Mahasiswa</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();

$sql = "SELECT * FROM Mahasiswa";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<form method = "GET" action = "tampildataMahasiswaCari.php">
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataMahasiswa.php">KLIK DISINI UNTUK TAMBAH DATA MAHASISWA</a></button>
<input type = "text" Name = "cariNamaMahasiswa" maxlength = "40" size = "40">
<input type = "submit" value = "CARI">

</form>
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