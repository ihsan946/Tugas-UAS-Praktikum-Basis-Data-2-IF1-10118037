<html>

<body>
    <h1>Proses Penyimpanan Data Dosen</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $NIK   		= $db->escape_string($_POST["NIK"]);
        $Nama       = $db->escape_string($_POST["Nama"]);
        $Alamat	 	= $db->escape_string($_POST["Alamat"]);
        $NoTelp     = $db->escape_string($_POST["NoTelp"]);
        

        $sql = "INSERT INTO dosen(NIK,Nama_Dosen,Alamat,No_Telp)
        VALUES ('$NIK','$Nama','$Alamat','$NoTelp')";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Peyimpanan Data Berhasil <br>
                <a href="tampildataDosen.php"><button>Lihat Data Dosen</button></a>
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

