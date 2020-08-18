<html>
<body>
    <h1>Proses Penyimpanan Data Nilai</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
		$NIM	  	  		  = $_POST["NIM"];
        $Kode_Matkul	  	  = $_POST["Kode_Matkul"];
		$Nilai				  = $_POST["Nilai"];

        $sql = "INSERT INTO nilai(NIM,Kode_Matkul,Nilai)
        VALUES ('$NIM','$Kode_Matkul','$Nilai')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Peyimpanan Data Berhasil <br>
                <a href="tampildataNilai.php"><button>Lihat Data Nilai</button></a>
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