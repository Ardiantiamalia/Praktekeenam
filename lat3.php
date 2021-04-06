<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = " CREATE TABLE liga (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL, negara VARCHAR(30) NOT NULL, champion int(3))";
$sql = "CREATE TABLE  buku_tamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(200) NOT NULL, EMAIL VARCHAR(50) NOT NULL, ISI TEXT()";
if(mysqli_query($conn,$sql)) {
    echo "Database created succesfully";
} else {
    echo "Error creating database: " . mysqli_connect_error($conn);
}

mysqli_close($conn);
?>