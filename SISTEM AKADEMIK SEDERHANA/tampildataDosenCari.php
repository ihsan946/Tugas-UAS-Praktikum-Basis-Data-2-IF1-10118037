<html>
<body>
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariNamaDosen"]);

$sql = "SELECT * FROM dosen WHERE Nama_Dosen LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

 
?>
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataDosen.php">KLIK DISINI UNTUK TAMBAH DATA DOSEN</a></button>
<table>
</table>
<Table border = "2">
<tr><th colspan = "5">Data Dosen</th></tr>
<tr>
	<th>NIK</th>
	<th>Nama Dosen</th>
	<th>Alamat</th>
	<th>No_telp</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["NIK"];?></td>
	<td><?php echo $barisdata["Nama_Dosen"];?></td>
	<td><?php echo $barisdata["Alamat"];?></td>
	<td><?php echo $barisdata["No_telp"];?></td>
	<td><a href="ubahDataDosen.php?NIK=<?php echo $barisdata["NIK"]?>">Edit</a> 
        <a href="hapusDataDosen.php?NIK=<?php echo $barisdata["NIK"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>