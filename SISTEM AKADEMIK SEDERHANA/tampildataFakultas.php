<html>
<head></head>
<h1><center>Tampil data Fakultas</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();

$sql = "SELECT * FROM fakultas";
$res = $db->query($sql);

$data=$res->fetch_all(MYSQLI_ASSOC);

?>
<form method = "GET" action = "tampildataFakultasCari.php">
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataFakultas.php">KLIK DISINI UNTUK TAMBAH DATA FAKULTAS</a></button>
<input type = "text" Name = "cariNamaFakultas" maxlength = "30" size = "30">
<input type = "submit" value = "CARI">

</form>
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