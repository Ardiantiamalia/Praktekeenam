<?php
//memanggil file koneksi
include_once("koneksi.php");
//untuk menampilkan id yang akan dihapus
$id = $_GET['id'];
//untuk menghapus data pegawai berdasarkan id
$result = mysqli_query($conn,"DELETE FROM data_pegawai WHERE id=$id");
header("Location:index.php");
?>