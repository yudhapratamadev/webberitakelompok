<html>
<head>
	<title>Form Berita</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php 
	session_start();
	
	?>

<div id="nav">
	
	<a href="form_berita.php">kembali</a>
	
</div>
<p>  
<?php
require "koneksi.php";
  $edit = mysqli_query($conn, "SELECT * FROM berita WHERE id_berita='$_GET[id]'");
  while($r = mysqli_fetch_array($edit)){

  echo "<table align=center>
		<tr><th>Edit Berita</th></th>
        <form method=POST enctype='multipart/form-data' action=update_berita.php>
        <input type=hidden name=id value=$r[id_berita]>    
        <tr><td>Judul</td> <td> : <input type=text name=judul_berita size=40 value='$r[judul_berita]'></td></tr>
        <tr><td>Kategori</td> <td> : <select name=nama_kategori></select></td></tr>
        <tr><td>Isi Berita</td><td> : <textarea name=isi_berita cols=60 rows=15>$r[isi_berita]</textarea></td></tr>
        <tr><td>Gambar</td><td> : <img src=gambar/$r[gambar_berita]'></td></tr>
        <tr><td>Ganti Gbr</td>    <td> : <input type=file name=fupload size=30> *)</td></tr>
        <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
        <tr><td colspan=2><input type=submit value=Update>
        <input type=button value=Batal onclick=self.history.back()></td></tr>
        </table>
        </form>";
  }
?>
