<html>
<body>
    <h1>Proses Penyimpanan Data Perwalian</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
		$NIM	  	  		  = $_POST["NIM"];
        $Kode_Matkul	  	  = $_POST["Kode_Matkul"];
		$NIK				  = $_POST["NIK"];

        $sql = "INSERT INTO perwalian(NIM,Kode_Matkul,NIK)
        VALUES ('$NIM','$Kode_Matkul','$NIK')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Peyimpanan Data Berhasil <br>
                <a href="tampildataPerwalian.php"><button>Lihat Data Perwalian</button></a>
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