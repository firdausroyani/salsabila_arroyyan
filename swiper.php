<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil=$koneksi->query("SELECT * FROM swiper"); 
$konten = $ambil->fetch_assoc();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
    />

    <title>Konten Swiper</title>

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

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h2 class="card-header text-center">Konten Swiper</h2>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>No.</th>
                      <th>Judul</th>
                      <td>Kata</td>
                      <th>Foto</th>
                      <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil=$koneksi->query("SELECT * FROM swiper"); ?>
                      <?php while($pecah=$ambil->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td align="left"><?php echo $pecah['jdl']; ?></td>
                        <td align="left"><?php echo $pecah['kata']; ?></td>
                        <td>
                          <img src="../images/<?php echo $pecah['gambar']; ?>" width="100" alt="">
                        </td>
                        <td>
                          <a href="ubah_swiper.php?id=<?php echo $pecah['id_gambar']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i>ubah</a>
                          <a href="hapus_swiper.php?id=<?php echo $pecah['id_gambar']; ?>" class="btn-danger btn"><i class="fa fa-remove"></i>hapus</a>
                        </td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <br>
              <a href="tambah_swiper.php" class="btn btn-primary">[+] Tambah Swiper</a>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
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
