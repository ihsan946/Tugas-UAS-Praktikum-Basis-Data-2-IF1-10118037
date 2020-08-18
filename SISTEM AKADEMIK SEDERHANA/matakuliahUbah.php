<html>
<body>
    <h1>Ubah Data Matakuliah</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Kode_Matkul	  	  = $db->escape_string($_POST["Kode_Matkul"]);
        $Kode_Jurusan	  	  = $db->escape_string($_POST["Kode_Jurusan"]);
		$Nama_Matakuliah	  = $db->escape_string($_POST["Nama_Matakuliah"]);
        $SKS                  = (int)($_POST["Sks"]);
		$SEMESTER             = (int)($_POST["Semester"]);
		
        $sql = "UPDATE matakuliah
        SET 
		Kode_Jurusan = '$Kode_Jurusan',
		Nama_Matkul = '$Nama_Matakuliah',
        SKS ='$SKS',
		Semester = '$SEMESTER'
        WHERE Kode_Matkul='$Kode_Matkul'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Matakuliah Berhasil <br>
                <a href="tampildataMatakuliah.php"><button>Lihat Data Matakuliah</button></a>
            <?php
            } else {
            ?>
                Update Data Matakuliah Gagal <br>
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