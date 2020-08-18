<html>
<body>
    <h1>Ubah Data Dosen</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $NIK   		= $db->escape_string($_POST["NIK"]);
        $Nama       = $db->escape_string($_POST["Nama"]);
        $Alamat 	= $db->escape_string($_POST["Alamat"]);
        $No_Telp    = $db->escape_string($_POST["No_Telp"]);
        
        $sql = "UPDATE dosen
        SET 
        Nama_Dosen='$Nama',
        Alamat = '$Alamat', 
        No_telp = '$No_Telp'
        WHERE NIK='$NIK'";

        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Dosen Berhasil <br>
                <a href="tampildataDosen.php"><button>View Data Dosen</button></a>
            <?php
            } else {
            ?>
                Update Data Dosen Gagal <br>
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