<?php
function dbConnect(){
	$db = new mysqli("localhost:3306","root","janganditebak!!123","akademik");
	return $db;
}

function getDataDosen($NIK)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM dosen WHERE NIK='$NIK'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataFakultas($Kode)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM fakultas WHERE Kode_Fakultas = '$Kode'");
        if ($res) {
			$data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListFakultas()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT Kode_Fakultas FROM fakultas ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataJurusan($Kode_Jurusan)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM jurusan WHERE Kode_Jurusan = '$Kode_Jurusan'");
        if ($res) {
            $data = $res->fetch_row();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataMahasiswa($NIM)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM mahasiswa WHERE NIM = '$NIM'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListJurusan()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT Kode_Jurusan FROM jurusan ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataMatakuliah($KodeMatakuliah)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM matakuliah WHERE Kode_Matkul = '$KodeMatakuliah'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataNilai($NIM)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM nilai WHERE NIM = '$NIM'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListNim()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT NIM FROM mahasiswa ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListKodeMatkul()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT Kode_Matkul FROM matakuliah ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getListNik()
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT NIK FROM dosen ");
        if ($res) {
            $data = $res->fetch_all(MYSQLI_ASSOC);
            return $data;
        } else
            return false;
    } else
        return false;
}

function getDataPerwalian($NIM)
{
    $db = dbConnect();
    if ($db->errno == 0) {
        $res = $db->query("SELECT * FROM perwalian WHERE NIM = '$NIM'");
        if ($res) {
            $data = $res->fetch_assoc();
            return $data;
        } else
            return false;
    } else
        return false;
}
?>