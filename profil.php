<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil=$koneksi->query("SELECT * FROM profile"); 
$konten = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
    />

    <title>Profil</title>

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

              <form method="POST" enctype="multipart/form-data">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h2 class="card-header text-center">Konten Profil</h2>
                  <div class="table-responsive text-nowrap">
                    <div class="input-group input-group-merge">
                      <textarea class="form-control" name="profil" style="height: 127px;"><?php echo $konten ['isi']; ?></textarea>
                    </div>
                  </div>
                </div>
                <br>
                <button class="btn btn-warning" name="ubah">Ubah</button>
              </form>
              <?php 
                    if (isset($_POST['ubah'])) 
                    {
                      $koneksi->query("UPDATE profile SET isi='$_POST[profil]' WHERE id_prof = 1");
                      echo "<script>alert('Data Berhasil Diubah')</script>";
                      echo "<script>location='profil.php';</script>";
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
