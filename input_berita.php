<html>
<head>
	<title>Form Berita</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php 
	session_start();
 
	?>
<div>
	<tr>selamat datang <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	
	<a href="form_berita.php">kembali</a>
	
</div>
<p>  
<?php
include " koneksi.php";
include "library.php";

 //$lokasi_file = $_FILES['fupload']['tmp_name'];
 //$nama_file   = $_FILES['fupload']['name'];

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){  
    move_uploaded_file($lokasi_file,"img/$nama_file");
    mysqli_query("INSERT INTO berita(judul_berita,
                                    id_kategori,
                                    isi_berita,
                                    username,
                                    jam_berita,
                                    tanggal_berita,
                                    hari,
                                    gambar_berita) 
                           VALUES('$_POST[judul_berita]',
                                  '$_POST[kategori]',
                                  '$_POST[isi_berita]',
                                  '$_SESSION[username]',
                                  '$jam_berita',
                                  '$tanggal_berita',
                                  '$hari_ini',
                                  '$nama_file')");
  }
  // Apabila tidak ada gambar yang di upload
  else{
  mysqli_query("INSERT INTO berita(judul_berita,
                                  id_kategori,
                                  isi_berita,
                                  username,
                                  jam_berita,
                                  tanggal_berita,hari) 
                          VALUES('$_POST[judul_berita]',
                                 '$_POST[kategori]',
                                 '$_POST[isi_berita]',
                                 '$_SESSION[username]',
                                 '$jam_berita',
                                 '$tanggal_berita',
                                 '$hari_ini')");
  }
  header('location:tampil_berita.php');

?>
