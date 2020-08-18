<html>
<body>
    <h1>Hapus Data Nilai</h1>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Id_Nilai   = $db->escape_string($_GET["Id_Nilai"]);
        $sql = "DELETE FROM nilai
        WHERE Id_Nilai= '$Id_Nilai'";
        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Hapus Data Berhasil <br>
                <a href="tampildataNilai.php"><button>Lihat Data nilai</button></a>
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