<?php
//memanggil file koneksi untuk dihubungkan ke database
include_once("koneksi.php");
//menampilkan data_pegawai dengan id berurutan
$result = mysqli_query($conn, "SELECT * FROM data_pegawai ORDER BY id DESC");
?>
<html>
<head>
<title>Data Peagawai</title>
</head>
<body>
<a href = "tambah.php">Tambah</a><br></br>
<table width = '60%' border = 1>
<tr>
<th>Nomor Pegawai</th> <th>Nama</th> <th>Email</th> <th>Alamat</th> <th>Update</th>
</tr>
<?php
while($pegawai = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $pegawai['nomor_pegawai'] . "</td>";
    echo "<td>" . $pegawai['nama'] . "</td>";
    echo "<td>" . $pegawai['email'] . "</td>";
    echo "<td><a href='update.php?id=$pegawai[id]'>Edit</a> | <a href='hapus.php?id=$pegawai[id]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>