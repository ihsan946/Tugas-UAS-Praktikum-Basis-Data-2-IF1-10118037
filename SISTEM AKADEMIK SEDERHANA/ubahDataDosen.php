<html>
<?php
include_once("koneksi.php");
?>
<body>
    <h1>Edit Data Dosen</h1>
    <a href="tampildataDosen.php"><button>View Data Dosen</button></a>
    <?php
    if (isset($_GET["NIK"])) {
        $db = dbConnect();
        $NIK = $db->escape_string($_GET["NIK"]);
        $dataDosen = getDataDosen($NIK);
        if ($dataDosen) {
    ?>
            <form action="dosenUbah.php" method="post" name="frm">
                <table>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="NIK" maxlength="15" size="15" 
                                   value="<?php echo $dataDosen["NIK"];?>" readonly></td>
                    </tr>

                    <tr>
                        <td>NAMA DOSEN</td>
                        <td>:</td>
                        <td><input type="text" name="Nama" maxlength="50" size="50"
                                    value="<?php echo $dataDosen["Nama_Dosen"];?>"></td>
                    </tr>

                    <tr>
                        <td>ALAMAT</td>
                        <td>:</td>
                        <td><input type="text" name="Alamat" maxlength="60" size="60"
                        value="<?php echo $dataDosen["Alamat"];?>"></td>
                    </tr>
                    <tr>
                        <td>NO TELP</td>
                        <td>:</td>
                        <td><input type="text" name="No_Telp" id="" maxlength="14" size="14"
                        value="<?php echo $dataDosen["No_telp"];?>"></td>
                        
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