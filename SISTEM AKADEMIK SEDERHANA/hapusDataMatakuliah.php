<html>
<body>
    <h1>Hapus Data Matakuliah </h1>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Kode   = $db->escape_string($_GET["Kode_Matkul"]);
        $sql = "DELETE FROM matakuliah
        WHERE Kode_Matkul= '$Kode'";
        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Hapus Data Berhasil <br>
                <a href="tampildataMatakuliah.php"><button>Lihat Data Matakuliah</button></a>
        <?php
            } else{
    ?>
            Hapus Data Gagal <br>
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