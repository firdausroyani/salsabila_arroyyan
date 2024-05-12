<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
$ambil = $koneksi->query("SELECT * FROM agt_baru WHERE id_nm='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM agt_baru WHERE id_nm='$_GET[id]'");
echo "<script>alert('data terhapus');</script>";
echo "<script>location='agt_baru.php';</script>";
 ?>
