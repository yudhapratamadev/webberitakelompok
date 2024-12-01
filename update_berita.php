<?php
include "koneksi.php";

  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  //  gambar tidak diganti
  if (empty($lokasi_file)) {
    mysql_query("UPDATE berita SET judul   = '$_POST[judul]',
                               id_kategori = '$_POST[kategori]',
                               isi_berita  = '$_POST[isi_berita]'  
                           WHERE id_berita = '$_POST[id]'");
  }
  //  gambar diganti
  else{
    move_uploaded_file($lokasi_file,"berita/$nama_file");
    mysql_query("UPDATE berita SET judul   = '$_POST[judul]',
                               id_kategori = '$_POST[kategori]',
                               isi_berita  = '$_POST[isi_berita]'  
                               gambar      = '$nama_file'   
                           WHERE id_berita = '$_POST[id]'");
  }
  header('location:tampil_berita.php');						
?>
