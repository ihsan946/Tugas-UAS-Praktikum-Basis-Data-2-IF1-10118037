<html>
<body>
    <h1>Proses Penyimpanan Data Fakultas</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Kode_Fakultas   	= $db->escape_string($_POST["Kode_Fakultas"]);
        $Nama_Fakultas    = $db->escape_string($_POST["Nama_Fakultas"]);

        $sql = "INSERT INTO fakultas(Kode_Fakultas,Nama_Fakultas)
        VALUES ('$Kode_Fakultas','$Nama_Fakultas')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Peyimpanan Data Berhasil <br>
                <a href="tampildataFakultas.php"><button>Lihat Data Fakultas</button></a>
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