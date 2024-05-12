<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" />

  <title>Tambah Kepengursan</title>

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
          <h2>Tambah Kepengurusan</h2>
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>NPM</label>
              <input type="text" class="form-control" name="npm">
            </div>
            <div class="form-group">
              <label>NA</label>
              <input type="text" class="form-control" name="na">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
              <label>Jabatan</label>
              <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="jbtn">
                <option selected="">Pilih...</option>
                <option value="Ketua">Ketua</option>
                <option value="Wakil Ketua">Wakil Ketua</option>
                <option value="Koordinator">Koordinator</option>
                <option value="Anggota">Anggota</option>
              </select>
            </div>
            <div class="form-group">
              <label>Divisi</label>
              <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="dvs">
                <option selected="">Pilih...</option>
                <option value="Pelatihan">Pelatihan</option>
                <option value="Humas">Humas</option>
                <option value="Kesekretariatan">Kesekretariatan</option>
                <option value="Pembasisan">Pembasisan</option>
                <option value="Sosmed">Sosmed</option>
              </select>
            </div>
            <br>
            <button class="btn btn-primary" name="save">simpan</button>
            <br>
          </form>
          <?php 
          if(isset($_POST['save']))
          {
            $na = $_POST['na'];
            
            if (!empty($na))
            {
            $koneksi->query("INSERT INTO kepengurusan (npm, na, nama, jabatan, divisi) VALUES('$_POST[npm]','$na','$_POST[nama]','$_POST[jbtn]','$_POST[dvs]')");
            }
            elseif(empty($na))
            {
            $koneksi->query("INSERT INTO kepengurusan (npm, nama, jabatan, divisi) VALUES('$_POST[npm]','$_POST[nama]','$_POST[jbtn]','$_POST[dvs]')");
            }
            echo "<br>";
            echo "<div class='alert alert-info'>Data Tersimpan</div>";
            echo "<meta http-equiv='refresh' content='1;url=kepengurusan.php'>";
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
