<html>
<head></head>
<h1><center>Tampil data Jurusan</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariNamaJurusan"]);
$sql = "SELECT * FROM jurusan WHERE Nama_Jurusan LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataJurusan.php">KLIK DISINI UNTUK TAMBAH DATA JURUSAN</a></button>

<Table border = "2">
<tr><th colspan = "5">Data Jurusan</th></tr>
<tr>
	<th>Kode Jurusan</th>
	<th>Kode Fakultas</th>
	<th>Nama Jurusan</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["Kode_Jurusan"];?></td>
	<td><?php echo $barisdata["Kode_Fakultas"];?></td>
	<td><?php echo $barisdata["Nama_Jurusan"];?></td>
	<td><a href="ubahDataJurusan.php?Kode_Jurusan=<?php echo $barisdata["Kode_Jurusan"]?>">Edit</a> 
        <a href="hapusDataJurusan.php?Kode_Jurusan=<?php echo $barisdata["Kode_Jurusan"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>