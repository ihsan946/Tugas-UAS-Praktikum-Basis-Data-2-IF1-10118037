<html>
<head></head>
<h1><center>Tampil data Perwalian</center></h1>

<body>
<?php
include_once("koneksi.php");
$db = dbConnect();


$sql = "SELECT * FROM perwalian";
$res = $db->query($sql);
$data=$res->fetch_all(MYSQLI_ASSOC);
?>
<form method = "GET" action = "tampildataPerwalianCari.php">
<button><a href = "Utama.php">Kembali ke Halaman Utama</a></button>
<button><a href = "tambahDataPerwalian.php">KLIK DISINI UNTUK TAMBAH DATA PERWALIAN</a></button>
<input type = "text" Name = "cariNim" maxlength = "30" size = "30">
<input type = "submit" value = "CARI">

</form>
<Table border = "2">
<tr><th colspan = "7">Data Perwalian</th></tr>
<tr>
	<th>NIM</th>
	<th>KODE MATAKULIAH</th>
	<th>NIK</th>
	<th colspan = "2">Proses</th>
</tr>
<?php
foreach ($data as $barisdata){
?>
<tr>
	<td><?php echo $barisdata["NIM"];?></td>
	<td><?php echo $barisdata["Kode_Matkul"];?></td>
	<td><?php echo $barisdata["NIK"];?></td>
	<td><a href="ubahDataPerwalian.php?NIM=<?php echo $barisdata["NIM"]?>&Kode_Matkul=<?php echo $barisdata["Kode_Matkul"];?>&NIK=<?php echo $barisdata["NIK"];?>&Id_Perwalian=<?php echo $barisdata["Id_Perwalian"];?>">Edit</a> 
        <a href="hapusDataPerwalian.php?Id_Perwalian=<?php echo $barisdata["Id_Perwalian"];?>">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</body>
</html>