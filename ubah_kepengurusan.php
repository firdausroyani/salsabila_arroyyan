<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil = $koneksi->query("SELECT * FROM Kepengurusan WHERE npm='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta
    name="viewport"
    />

    <title>Ubah Konten</title>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include 'navbar.php'?>
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">kepengurusan</h4>

              <!-- Basic Bootstrap Table -->
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>NPM</label>
                  <input type="text" class="form-control" name="npm" value="<?php echo $pecah['npm']; ?>">
              </div>
              <div class="form-group">
                  <label>NA</label>
                  <input type="text" class="form-control" name="na" value="<?php echo $pecah['na']; ?>">
              </div>
              <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
              </div>
              <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="jbtn">
                    <option selected="" value="<?php echo $pecah['jabatan']; ?>">Pilih...</option>
                    <option value="Ketua">Ketua</option>
                    <option value="Wakil Ketua">Wakil Ketua</option>
                    <option value="Sekertaris">Sekertaris</option>
                    <option value="Bendahara">Bendahara</option>
                    <option value="Koordinator">Koordinator</option>
                    <option value="Anggota">Anggota</option>
                </select>
            </div>
            <div class="form-group">
              <label>Divisi</label>
              <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="dvs">
                <option selected="" value="<?php echo $pecah['divisi']; ?>">Pilih...</option>
                <option value="Pelatihan">Pelatihan</option>
                <option value="Humas">Humas</option>
                <option value="Kesekretariatan">Kesekretariatan</option>
                <option value="Pembasisan">Pembasisan</option>
                <option value="Sosmed">Sosmed</option>
            </select>
        </div>
        <br>
        <button class="btn btn-primary" name="ubah">Ubah</button>
        <a href="kepengurusan.php" class="btn btn-warning" name="batal">Batal</a>
    </form>
    <?php 
    if (isset($_POST['ubah'])) 
    {
        $na = $_POST['na'];

        if (!empty($na)) 
        {
            $koneksi->query("UPDATE kepengurusan SET npm='$_POST[npm]', na='$na', nama='$_POST[nama]', jabatan='$_POST[jbtn]', divisi='$_POST[dvs]'  WHERE npm='$_GET[id]'");
        }
        elseif(empty($na))
        {
             $koneksi->query("UPDATE kepengurusan SET npm='$_POST[npm]', na='$na', nama='$_POST[nama]', jabatan='$_POST[jbtn]', divisi='$_POST[dvs]'  WHERE npm='$_GET[id]'");
        }
        echo "<br>";
        echo "<script>alert('Data konten berhasil diubah')</script>";
        echo "<script>location='kepengurusan.php';</script>";
    }
    ?>
</div>
</div>
</div>

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
