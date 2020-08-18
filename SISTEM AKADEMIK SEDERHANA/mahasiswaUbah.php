<html>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <?php
	include_once("koneksi.php");

    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $NIM				= $db->escape_string($_POST["NIM"]);
		$Nama  			    = $db->escape_string($_POST["Nama_Mahasiswa"]);
        $Alamat             = $db->escape_string($_POST["Alamat"]);
		$No_Telp            = $db->escape_string($_POST["No_Telp"]);
		
        $sql = "UPDATE mahasiswa
        SET 
		Nama_Mhs = '$Nama',
        Alamat ='$Alamat',
		No_telp = '$No_Telp'
        WHERE NIM='$NIM'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
        ?>
                Update Data Mahasiswa Berhasil <br>
                <a href="tampildataMahasiswa.php"><button>Lihat Data Mahasiswa</button></a>
            <?php
            } else {
            ?>
                Update Data Mahasiswa Gagal <br>
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