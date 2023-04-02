<?php

$conn = mysqli_connect('localhost', 'n1577759_seravina', 'latihanphp123', 'n1577759_seravina');


if(isset($_POST['tambahdata'])) {
    $NamaLengkap        = $_POST['nama'];
    $TempatTanggalLahir = $_POST['tanggallahir'];
    $JenisKelamin       = $_POST['jeniskelamin'];
    $NIK                = $_POST['nik'];
    $sql = "INSERT INTO kuesioner (ID, NamaLengkap, TempatTanggalLahir, JenisKelamin, NIK) VALUES ('', '$NamaLengkap', '$TempatTanggalLahir', '$JenisKelamin', '$NIK')";
    mysqli_query($conn, $sql);
    header("location: index.php");
}

$AmbilData = mysqli_query($conn, "SELECT * FROM kuesioner");

if(isset($_POST['ubahdata'])) {
    $ID                 =  $_POST['id'];
    $NamaLengkap        =  $_POST['nama'];
    $TempatTanggalLahir = $_POST['tanggallahir'];
    $JenisKelamin       = $_POST['jeniskelamin'];
    $NIK                = $_POST['nik'];
    $sql = "UPDATE kuesioner SET NamaLengkap='$NamaLengkap', TempatTanggalLahir='$TempatTanggalLahir', JenisKelamin='$JenisKelamin', NIK='$NIK' WHERE ID=$ID";
    mysqli_query($conn, $sql);
    header('Location: index.php');
}

if (isset($_POST['hapus'])) {
    $ID = $_POST['id']; 
    $query = "DELETE FROM kuesioner WHERE ID = '$ID'";
    $result = mysqli_query($conn, $query);
    header('Location: index.php');
}






?>