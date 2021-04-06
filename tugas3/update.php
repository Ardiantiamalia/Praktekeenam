<?php
//memanggil file koneksi
include_once("koneksi.php");
//mengecek pembaruan
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nopeg = $_POST['nomor_pegawai'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
//update data pegawai
    $result = mysqli_query($conn, "UPDATE data_pegawai SET nomor_pegawai='$nopeg',nama='$nama',email='email',alamat='$alamat' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
//untuk memilih id agar ditampilkan
$result = mysqli_query($conn, "SELECT * FROM data_pegawai WHERE id=$id");
while($pegawai = mysqli_fetch_array($result))
{
    $nopeg = $pegawai['nomor_pegawai'];
    $nama = $pegawai['nama'];
    $email = $pegawai['email'];
    $alamat = $pegawai['alamat'];
}
?>
<html>
<head>
<title>Update data pegawai</title>
</head>

<body>
<a href="index.php">Kembali</a>
<br></br>
<!--untuk mengedit data sebelumnya-->
<form name="update_user" method="post" action="update.php">
<table border="0">
    <tr>
        <td>Nomor Pegawai</td>
        <td><input type="number" name="nomor_pegawai" value=<?php echo $nopeg;?>></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value=<?php echo $name;?>></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" value=<?php echo $email;?>></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
    </tr>
    <tr>
        <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <td><input type="submit" name="update" value="Update"></td>
    </tr>
    </table>
    </form>
</body>
</html>