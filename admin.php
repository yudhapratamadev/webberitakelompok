<?php
//include verifikasi.php pada file Administrasi
include("verifikasi.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div>
	<marquee><h1><tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr></h1></marquee>
	
</div><br>
<div id="nav">
<div align="center"><a href="form_berita.php">EDIT BERITA</a></div><br>
<div align="center"><a href="index.php">LANJUT KE BERANDA</a></div><br>
<div align="center"><a href="logout.php">Logout</a></div>

</div> 
</body>
</html>

