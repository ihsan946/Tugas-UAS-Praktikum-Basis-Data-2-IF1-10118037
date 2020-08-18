<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Fakultas</h1>
    <a href="tampildataFakultas.php"><button>Lihat Data Fakultas</button></a>
    <?php
    if (isset($_GET["Kode"])) {
        $db = dbConnect();
        $Kode = $db->escape_string($_GET["Kode"]);
        $dataFakultas = getDataFakultas($Kode);
        if ($dataFakultas) {
    ?>
            <form action="fakultasUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>Kode Fakultas</td>
                        <td>:</td>
                        <td><input type="text" name="Kode_Fakultas" maxlength="8" size="8" 
                                   value="<?php echo $dataFakultas["Kode_Fakultas"];?>" readonly></td>
                    </tr>

                    <tr>
                        <td>NAMA Fakultas</td>
                        <td>:</td>
                        <td><input type="text" name="Nama_Fakultas" maxlength="30" size="30"
                                    value="<?php echo $dataFakultas["Nama_Fakultas"];?>"></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" value="Simpan" name="TblUpdate">
                        <input type="reset" value="Reset"></td>

                    </tr>
                </table>
            </form>
    <?php
        } else
            echo "Data dosen tidak ditemukan";
    } else
        echo "Data Tidak ada";
    ?>
</body>
</html>