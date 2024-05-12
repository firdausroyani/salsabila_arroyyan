<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
$ambil = $koneksi->query("SELECT * FROM kepengurusan WHERE npm='$_GET[npm]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if(file_exists("../site/images/dok/$foto"))
{
	unlink("../site/images/dok/$foto");
}

$koneksi->query("DELETE FROM kepengurusan WHERE npm='$_GET[npm]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='kepengurusan.php';</script>";
 ?>
