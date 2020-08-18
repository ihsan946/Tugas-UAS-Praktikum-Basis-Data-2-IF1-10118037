<html>
<head></head>
<h1><center>Tampil data Fakultas</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();
$nama = $db->escape_string($_GET["cariNamaFakultas"]);

$sql = "SELECT * FROM fakultas WHERE Nama_Fakultas LIKE '%$nama%'";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataFakultas.php">KLIK DISINI UNTUK TAMBAH DATA FAKULTAS</a></button>


<Table border = "2">
<tr><th colspan = "4">Data Fakultas</th></tr>
<tr>
	<th>Kode Fakultas</th>
	<th>Nama Fakultas</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["Kode_Fakultas"];?></td>
	<td><?php echo $barisdata["Nama_Fakultas"];?></td>
	<td><a href="ubahDataFakultas.php?Kode=<?php echo $barisdata["Kode_Fakultas"]?>">Edit</a> 
        <a href="hapusDataFakultas.php?Kode=<?php echo $barisdata["Kode_Fakultas"]?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>