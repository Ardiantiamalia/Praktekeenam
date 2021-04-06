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
$sql = "CREATE DATABASE bukutamu";
if(mysqli_query($conn, $sql)) {
    echo "Databse created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
//membuat tabel buku_tamu
$query = "CREATE TABLE  buku_tamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(200), EMAIL VARCHAR(50), ISI TEXT)";
$hasil_query = mysqli_query($conn, $query); //membuat variabel untuk menampung query
if(!$conn) { //menampilkan kondisi jika koneksi error dan memastikan query berjalan
    die ("Query Error: " . mysqli_errno($conn).
    " - " . mysqli_error($conn));
} else {
    echo "Tabel buku_tamu berhasil dibuat";
}
mysqli_close($conn); //menghentikan koneksi php ke server mysql
?>