<?php
$servername	= "localhost:3306";	// host atau IP
$username	= "root";		// nama penggua
$password	= "";			// password login
$database	= "berita";		// database yang digunakan ketika melakukan query
// buat koneksi

$conn = mysqli_connect($servername, $username, $password, $database);
// cek koneksi

if (!$conn) {
    die("Connection failed: " . mysqli_error());
}
?>
