<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi
$conn = mysqli_connect($servername,$username,$password);

//cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//membuat database
$sql = "CREATE DATABASE pegawai";
if(mysqli_query($conn, $sql)) {
    $conn = mysqli_connect($servername,$username,$password,"pegawai");
    echo "Databse created successfully"."<br>";
    //membuat tabel
    $tabel = "CREATE TABLE data_pegawai(id int (10) not null auto_increment,
    nomor_pegawai int (20) not null, nama varchar (50) not null,
    email varchar (50), alamat varchar (100), primary key (id), unique key (nomor_pegawai))";

if(mysqli_query($conn, $tabel)) {
    echo "Tabel data_pegawai berhasil dibuat";
} else {
    echo "Tabel data_pegawai gagal dibuat: " . mysqli_error($conn);
} 
}else {
    echo "Database gagal dibuat: " . mysqli_error($conn);
} 
mysqli_close($conn);
?>