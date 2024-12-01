<html>
<head>  
<title>Form Barang</title>  
</head>
<link rel="stylesheet" href="style.css" /> 
<body>
	<?php 
	session_start();
 
	?>  
<div>
	<marquee><tr>selamat datang <b><?php echo $_SESSION['username']; ?>!</b></tr></marquee><br>
	
</div>
<div id="nav">
	<a href="form_berita.php">Form Berita</a>
	
</div>
<?php
//session_start();
include "koneksi.php";
include "fungsi_indotgl.php";

  echo "<table align=center>
		<tr><th>Berita</th></tr>
		
        <form method=POST action=form_berita.php>
        <input type=submit value='Tambah Berita'>
        
        <tr><th>No</th><th>Judul</th><th>Tanggal Posting</th><th>Aksi</th></th></tr>";
  $query = mysqli_connect("localhost:3306", "root", "", "berita");
  $tampil=mysqli_query($query, "SELECT * FROM berita ORDER BY id_berita DESC");
  $no=1;
  while ($r=mysqli_fetch_array($tampil)){
    $tgl_posting=tgl_indo($r['tanggal_berita']);
    echo "<tr><td>$no</td>
          <td>$r[judul_berita]</td>
          <td>$tgl_posting</td>
		      <td><a href=edit_berita.php?id=$r[id_berita]>Edit</a> | 
		      <a href=hapus_berita.php?id=$r[id_berita]>Hapus</a></td>
		    </tr>";
    $no++;
  }
  echo "</table>";
  echo "</form>";
?>

