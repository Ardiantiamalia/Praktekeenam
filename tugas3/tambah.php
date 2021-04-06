<html>
<head>
<title>Tambah data</title>
</head>
<body>
<a href="index.php">Kembali</a>
<br></br>
<!--memasukkan data-->
<form action="tambah.php" method="post" name="form1">
<table width="20%" border="0">
    <tr>
        <td>Nomor Pegawai</td>
        <td><input type="number" name="nomor_pegawai"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Tambah"></td>
    </tr>
    </table>
    </form>
<?php

//mengecek isi inputan
if(isset($_POST['Submit'])) {
    $nopeg = $_POST['nomor_pegawai'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
//memanggil file koneksi
    include_once("koneksi.php");
//menambah inputan
    $result = mysqli_query($conn, "INSERT INTO data_pegawai(nomor_pegawai,nama,email,alamat) VALUES('$nopeg','$nama','$email','$alamat')");
   
    echo "data pegawai telah dirubah <a href='index.php'>Lihat data pegawai</a>";
}
?>
</body>
</html>