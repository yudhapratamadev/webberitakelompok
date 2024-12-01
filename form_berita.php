<html>
<head>  
<title>Form Barang</title>  
</head>
<link rel="stylesheet" href="style.css" /> 
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	
	?>  
<div>
	<marquee><tr>SELAMAT DATANG <b><?php echo $_SESSION['username']; ?>!</b></tr><br><br></marquee>
	
</div>
<div id="nav">
	<a href="admin.php">KEMBALI</a>
	
</div>
<p>
<div align="center"> 
<form method="post" action="input_berita.php" >  
<table width="600">  
<tr>  
	<th colspan="2">  
	Form Berita  
	</th>  
</tr>
<tr>  
	<td bgcolor="#ffc0cb">Judul Berita</td>  
	<td bgcolor="#ffc0cb">&nbsp;  
	<input name="judul_berita" type="text" size="20"/></td>  
</tr>  

<tr>
	<td>
	Kategori
	</td>
<td>
<select name=kategori>
	<option value=0 selected>- Pilih Kategori -</option>
	<option value=0 selected>- Pilih Kategori -</option>
	
</select>
</td></tr>

<tr>
	<td>Isi Berita</td>
	<td> : <textarea name=isi_berita cols=80 rows=18></textarea></td>
</tr>

<tr>
	<td>Gambar</td>
	<td> : <input type=file name=fupload size=40></td>
</tr>

<tr>  
	<td height="28" bgcolor="#ffc0cb">&nbsp;</td>  
	<td bgcolor="#ffc0cb">  
	<input name="" type="submit" value="Proses" />&nbsp;
	<input name="" type="reset" value="Hapus" onclick=self.history.back()/></td>  
</tr>  
</table>  
</form>
<a href="tampil_berita.php" >View Tabel Berita</a>
</div> 
</body>  
</html>