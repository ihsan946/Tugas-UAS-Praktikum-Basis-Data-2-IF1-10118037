<html>
<body>
    <h1>Proses Penyimpanan Data Matakuliah</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
		$Kode_Matkul	  	  = $db->escape_string($_POST["Kode_Matakuliah"]);
        $Kode_Jurusan	  	  = $db->escape_string($_POST["Kode_Jurusan"]);
		$Nama_Matakuliah	  = $db->escape_string($_POST["Nama_Matakuliah"]);
        $SKS                  = $db->escape_string($_POST["Sks"]);
		$SEMESTER             = $db->escape_string($_POST["Semester"]);

        $sql = "INSERT INTO matakuliah(Kode_Matkul,Kode_Jurusan,Nama_Matkul,SKS,Semester)
        VALUES ('$Kode_Matkul','$Kode_Jurusan','$Nama_Matakuliah',$SKS,'$SEMESTER')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Peyimpanan Data Berhasil <br>
                <a href="tampildataMatakuliah.php"><button>Lihat Data Matakuliah</button></a>
        <?php
            } else{
    ?>
			   Peyimpanan Data Gagal <br>
			   <a href="javascript:history.back();"><button>Kembali</button></a>
    <?php
            }
    } else
        echo "Error Query : " .$db->error. "<br>";
} else
    echo "Error : " .$db->conncet_errno. "<br>";
    ?>
</body>

</html>