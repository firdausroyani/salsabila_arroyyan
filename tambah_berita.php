<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
    />

    <title>Tambah berita</title>

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
            <h2>Tambah berita</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>judul</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>
                <div class="form-group">
                    <label>isi</label>
                    <input type="text" class="form-control" name="keterangan">
                </div>
                <br>
                <button class="btn btn-primary" name="save">simpan</button>
                <a href="berita.php" class="btn btn-warning">kembali</a>
            </form>

            <?php 
            if (isset($_POST['save'])) 
            {
                $nama = $_FILES['foto']['name'];
                $lokasi = $_FILES['foto']['tmp_name'];
                move_uploaded_file($lokasi, "../site/images/dok/".$nama);

                $koneksi->query("INSERT INTO berita (nm_dok,keterangan,gambar) VALUES('$_POST[nama]','$_POST[keterangan]','$nama')");

                echo "<div class='alert alert-info'>Data Tersimpan</div>";
                echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";
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
