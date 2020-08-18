<html>
<body>
    <h1>Ubah Data Perwalian</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Id_Perwalian		  = $_POST["Id_Perwalian"];
		$NIM	  	  		  = $_POST["Nim"];
		$Kode_Matkul		  = $_POST["Kode_Matakuliah"];
        $NIK	  	 		  = $_POST["NIK"];
		
        $sql = "UPDATE perwalian
        SET 
		Kode_Matkul = '$Kode_Matkul',
		NIK = '$NIK'
        WHERE Id_Perwalian='$Id_Perwalian'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Perwalian Berhasil <br>
                <a href="tampildataPerwalian.php"><button>Lihat Data Perwalian</button></a>
            <?php
            } else {
            ?>
                Update Data Nilai Gagal <br>
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