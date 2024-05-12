<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil = $koneksi->query("SELECT * FROM kegiatan WHERE id_keg='$_GET[id]'");
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
              <h4 class="fw-bold py-3 mb-4">Kegiatan</h4>

              <!-- Basic Bootstrap Table -->
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nm" class="form-control" value="<?php echo $pecah['nm_kegiatan']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="ket" value="<?php echo $pecah['keterangan']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <img src="../images/<?php echo $pecah['gambar']; ?>" width="200" alt="">
                    </div>
                    <div class="form-group">
                        <label>Ganti Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <br>
                    <button class="btn btn-primary" name="ubah">Ubah</button>
                    <a href="kegiatan.php" class="btn btn-warning" name="batal">Batal</a>
                </form>
                <?php 
                    if (isset($_POST['ubah'])) 
                    {
                        $namafoto=$_FILES['foto']['name'];
                        $lokasifoto=$_FILES['foto']['tmp_name'];
                        //jika foto dirubah
                        if (!empty($lokasifoto))
                        {
                            move_uploaded_file($lokasifoto, "../images/$namafoto");

                            $koneksi->query("UPDATE kegiatan SET nm_kegiatan='$_POST[nm]',keterangan='$_POST[ket]',gambar='$namafoto' WHERE id_keg='$_GET[id]'");
                        }
                        else
                        {
                            $koneksi->query("UPDATE kegiatan SET nm_kegiatan='$_POST[nm]',keterangan='$_POST[ket]' WHERE id_keg='$_GET[id]'");
                        }
                        echo "<script>alert('Data konten berhasil diubah')</script>";
                        echo "<script>location='kegiatan.php';</script>";
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
