<html>
<body>
    <h1>Hapus Data Perwalian</h1>
    <?php
    include_once("koneksi.php");
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        $Id_Perwalian   = $db->escape_string($_GET["Id_Perwalian"]);
        $sql = "DELETE FROM perwalian
        WHERE Id_Perwalian= '$Id_Perwalian'";
        //echo $sql;
        $res = $db->query($sql);
        if ($res) {
            if ($db->affected_rows > 0) {
                ?>
                Hapus Data Berhasil <br>
                <a href="tampildataPerwalian.php"><button>Lihat Data Perwalian</button></a>
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