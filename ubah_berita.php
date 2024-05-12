<?php 
$koneksi = new mysqli("localhost", "root", "" , "gp");
session_start();

$ambil = $koneksi->query("SELECT * FROM berita WHERE id_ber='$_GET[id]'");
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
              <h4 class="fw-bold py-3 mb-4">berita</h4>

              <!-- Basic Bootstrap Table -->
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>judul</label>
                    <input type="text" class="form-control" name="jdl" value="<?php echo $pecah['judul']; ?>">
                </div>
                <div class="form-group">
                    <img src="../images/<?php echo $pecah['foto']; ?>" width="200" alt="">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" class="form-control" name="foto" value="<?php echo $pecah['foto']; ?>">
                </div>
                <div class="form-group">
                    <label>isi</label>
                    <input type="text" class="form-control" name="isi" value="<?php echo $pecah['isi']; ?>">
                </div>
                <br>
                <button class="btn btn-primary" name="ubah">Ubah</button>
                <a href="berita.php" class="btn btn-warning" name="batal">Batal</a>
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

                    $koneksi->query("UPDATE berita SET judul='$_POST[jdl]',isi='$_POST[isi]',foto='$namafoto' WHERE id_ber='$_GET[id]'");
                }
                else
                {
                    $koneksi->query("UPDATE berita SET judul='$_POST[jdl]',isi='$_POST[isi]' WHERE id_ber='$_GET[id]'");
                }
                echo "<script>alert('Data konten berhasil diubah')</script>";
                echo "<script>location='berita.php';</script>";
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
