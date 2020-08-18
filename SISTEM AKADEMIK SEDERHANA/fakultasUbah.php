<html>
<body>
    <h1>Ubah Data Fakultas</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Kode  		= $db->escape_string($_POST["Kode_Fakultas"]);
        $Nama       = $db->escape_string($_POST["Nama_Fakultas"]);
		
        $sql = "UPDATE fakultas
        SET 
        Nama_Fakultas='$Nama'
        WHERE Kode_Fakultas='$Kode'";

        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Fakultas Berhasil <br>
                <a href="tampildataFakultas.php"><button>View Data Fakultas</button></a>
            <?php
            } else {
            ?>
                Update Data Fakultas Gagal <br>
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