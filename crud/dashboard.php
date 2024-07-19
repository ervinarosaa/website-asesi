<?php
// panggil file "database.php" untuk koneksi ke database
require_once "../config/database.php";
// panggil file "fungsi_tanggal_indo.php" untuk membuat format tanggal indonesia
require_once "../helper/fungsi_tanggal_indo.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CertiDigital</title>
        <link rel="icon" href="../assets/img/CertiDigital.png" type="image/png">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../assets/css/style.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">
        <header>
            <!-- Navbar Start-->
            <div class="container-fluid bg-primary">
                <div class="container" style="margin-right: 0; padding-right:0;">
                    <nav class="navbar navbar-dark navbar-expand-lg py-0">
                        <a href="dashboard.php" class="navbar-brand">
                            <h1 class="text-white fw-bold d-block">
                                Certi<span class="text-secondary">Digital</span>
                            </h1>
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Navbar End-->
        </header>

        <main class="flex-grow-1">
            <div class="container pt-5">
                <?php
                // pemanggilan file konten sesuai "halaman" yang dipilih
                // jika tidak ada halaman yang dipilih atau halaman yang dipilih "data"
                if (empty($_GET["halaman"]) || $_GET['halaman'] == 'data') {
                    // panggil file tampil data
                    include "view_data.php";
                }
                // jika halaman yang dipilih "entri"
                elseif ($_GET['halaman'] == 'entri') {
                    // panggil file form entri
                    include "form_entry.php";
                }
                // jika halaman yang dipilih "ubah"
                elseif ($_GET['halaman'] == 'ubah') {
                    // panggil file form ubah
                    include "form_change.php";
                }
                // jika halaman yang dipilih "detail"
                elseif ($_GET['halaman'] == 'detail') {
                    // panggil file tampil detail
                    include "view_detail.php";
                }
                // jika halaman yang dipilih "pencarian"
                elseif ($_GET['halaman'] == 'pencarian') {
                    // panggil file tampil pencarian
                    include "view_search.php";
                }
                ?>
            </div>
        </main>

        <footer class="mt-auto">
            <!-- Footer Start -->
            <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
                <div class="container pt-3 pb-3">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>CertiDigital</a>, All right reserved.</span>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <span class="text-light">Designed By<a href="https://htmlcodex.com" class="text-secondary">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <!-- Custom Scripts -->
        <script src="assets/js/form-validation.js"></script>
    </body>
</html>