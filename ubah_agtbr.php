<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil = $koneksi->query("SELECT * FROM agt_baru WHERE id_nm='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta
    name="viewport"
    />

    <title>Ubah Data</title>

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
              <h4 class="fw-bold py-3 mb-4">Anggota Baru</h4>

              <!-- Basic Bootstrap Table -->
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" class="form-control" name="npm" value="<?php echo $pecah['npm']; ?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" value="<?php echo $pecah['jurusan']; ?>">
                </div>
                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" class="form-control" name="no_hp" value="<?php echo $pecah['no_hp']; ?>">
                </div>
                <br>
                <button class="btn btn-primary" name="ubah">Ubah</button>
                <a href="agt_baru.php" class="btn btn-warning" name="batal">Batal</a>
            </form>
            <?php 
            if (isset($_POST['ubah'])) 
            {
                $koneksi->query("UPDATE agt_baru SET npm='$_POST[npm]',nama='$_POST[nama]',jurusan='$_POST[jurusan]',no_hp='$_POST[no_hp]' WHERE id_nm='$_GET[id]'");
                echo "<script>alert('Data konten berhasil diubah')</script>";
                echo "<script>location='agt_baru.php';</script>";
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
