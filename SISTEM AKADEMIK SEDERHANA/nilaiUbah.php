<html>
<body>
    <h1>Ubah Data Nilai</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Id_Nilai			  = $_POST["Id_Nilai"];
		$NIM	  	  		  = $_POST["Nim"];
        $Nilai	  	 		  = $_POST["Nilai"];
		
        $sql = "UPDATE nilai
        SET 
		Nilai = '$Nilai'
        WHERE Id_Nilai='$Id_Nilai'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Nilai Berhasil <br>
                <a href="tampildataNilai.php"><button>Lihat Data Nilai</button></a>
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