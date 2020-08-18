<html>
<body>
    <h1>Ubah Data Jurusan</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Kode_Jurusan		= $db->escape_string($_POST["Kode_Jurusan"]);
		$Kode_Fakultas  	= $db->escape_string($_POST["Kode_Fakultas"]);
        $Nama_Jurusan       = $db->escape_string($_POST["Nama_Jurusan"]);
		
        $sql = "UPDATE jurusan
        SET 
		Kode_Fakultas = '$Kode_Fakultas',
        Nama_Jurusan ='$Nama_Jurusan'
        WHERE Kode_Jurusan='$Kode_Jurusan'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Jurusan Berhasil <br>
                <a href="tampildataJurusan.php"><button>Lihat Data Jurusan</button></a>
            <?php
            } else {
            ?>
                Update Data Jurusan Gagal <br>
                <a href="javascript:history.back();"><button>Kembali</button></a>
    <?php
            }
        } else
            echo "Error Query : " . $db->error . "<br>";
    } else
        echo "Error : " . $db->conncet_errno . "<br>";
    ?>
</body>

</html>