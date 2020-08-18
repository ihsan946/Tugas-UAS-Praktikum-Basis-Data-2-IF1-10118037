<html>
<body>
    <h1>Hapus Data Mahasiswa</h1>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $NIM   = $db->escape_string($_GET["NIM"]);
        $sql = "DELETE FROM mahasiswa
        WHERE NIM= '$NIM'";

        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Hapus Data Berhasil <br>
                <a href="tampildataMahasiswa.php"><button>Lihat Data Mahasiswa</button></a>
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