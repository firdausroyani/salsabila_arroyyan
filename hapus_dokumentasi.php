<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
$ambil = $koneksi->query("SELECT * FROM dokumentasi WHERE id_dok='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto = $pecah['gambar'];
if(file_exists("../site/images/dok/$foto"))
{
	unlink("../site/images/dok/$foto");
}

$koneksi->query("DELETE FROM dokumentasi WHERE id_dok='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='dokumentasi.php';</script>";
 ?>
