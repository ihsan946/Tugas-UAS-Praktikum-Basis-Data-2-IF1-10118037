<html>

<body>
    <h1>Hapus Data Dosen</h1>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $NIK   = $db->escape_string($_GET["NIK"]);
        $sql = "DELETE FROM dosen
        WHERE NIK= '$NIK'";
        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Hapus Data Berhasil <br>
                <a href="tampildataDosen.php"><button>Lihat Data Dosen</button></a>
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