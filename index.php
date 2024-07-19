<?php
// panggil file "database.php" untuk koneksi ke database
require_once "config/database.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CertiDigital</title>
        <link rel="icon" href="./assets/img/CertiDigital.png" type="image/png">

        <!-- Google Web Fonts --> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="./assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <!-- Navbar Start-->
            <div class="container-fluid bg-primary">
                <div class="container">
                    <nav class="navbar navbar-dark navbar-expand-lg py-0">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="text-white fw-bold d-block">
                                Certi<span class="text-secondary">Digital</span>
                            </h1>
                        </a>
                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                            <div class="navbar-nav ms-auto mx-xl-auto p-0">
                                <a href="index.php" class="nav-item nav-link active text-secondary">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                                <a href="login.php" class="nav-item nav-link">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Navbar End-->

            <!-- Carousel Start-->
            <div class="container-fluid px-0">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="./assets/img/landing-1.png" class="img-fluid" alt="First slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">Welcome to CertiDigital!</h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">Unlock Your Potential with Us</h1>
                                    <a href="login.php" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Login</button></a>
                                    <a href="contact.html" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/landing-2.png" class="img-fluid" alt="Second slide">
                            <div class="carousel-caption">
                                <div class="container carousel-content">
                                    <h6 class="text-secondary h4 animated fadeInUp">Your Path to Professional Recognition</h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">Trusted Certifications for a Digital World</h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">Empower your career with verifiable credentials that open doors to new opportunities and demonstrate your expertise globally</p>
                                    <a href="login.php" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Login</button></a>
                                    <a href="contact.html" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </header>
        
        <main>
            <!-- About Start -->
            <div class="container-fluid py-5 my-5">
                <div class="container pt-5">
                    <div class="row g-5">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div class="h-100 position-relative">
                                <img src="./assets/img/about-1.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                                <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                    <img src="./assets/img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h5 class="text-primary">About Us</h5>
                            <h1 class="mb-4">About CertiDigital</h1>
                            <p>CertiDigital is a pioneer in delivering revolutionary solutions in digital certification management. As a trailblazer in this realm, CertiDigital brings transformation in how organizations manage, distribute, and authenticate digital certifications with a focus on efficiency, reliability, and security. Supported by a dedicated team of experts, CertiDigital is committed to providing cutting-edge and trusted solutions for their clients across various industry sectors.</p>
                            <p class="mb-4">CertiDigital presents a fully integrated digital certification management platform. With an intuitive and user-friendly interface, this platform allows organizations to easily create, manage, and deliver digital certifications to participants with high efficiency.</p>
                            <h5 class="text-primary">Innovative Solutions by CertiDigital:</h5>
                            <ol>
                                <li>Integrated Digital Certification Management Platform</li>
                                <li>Blockchain Technology for Maximum Security</li>
                                <li>Personalized User Experience</li>
                                <li>Advanced Analytics for Deep Insights</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Services Start -->
            <div class="container-fluid services py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5" style="max-width: 600px;">
                        <h5 class="text-primary">Our Training and Certification</h5>
                        <h1>Certification Training:</h1>
                        <h1>BNSP and Non-BNSP</h1>
                    </div>
                    <div class="row g-5 services-inner">
                    <?php
                        // Eksekusi query untuk mengambil data
                        $query = $mysqli->query("SELECT `nama_skema`, `deskripsi`, `icon` FROM `tbl_skema`")
                                                or die('Ada kesalahan pada query tampil data : ' . $mysqli->error);

                        // Periksa apakah ada hasil dari query
                        if ($query->num_rows > 0) {
                            // Loop melalui setiap baris hasil query
                            while ($data = $query->fetch_assoc()) {
                                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="services-item bg-light">
                                        <div class="p-4 text-center services-content">
                                            <div class="services-content-icon">
                                                <i class="<?php echo $data['icon']?> fa-7x mb-4 text-primary"></i>
                                                <h4 class="mb-3"><?php echo $data['nama_skema']?></h4>
                                                <p class="mb-4"><?php echo $data['deskripsi']?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
            <!-- Services End -->
        </main>

        <footer>
            <!-- Footer Start -->
            <div class="container-fluid footer bg-dark">
                <div class="container pt-5 pb-4">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <a href="index.html">
                                <h1 class="text-white fw-bold d-block">Certi<span class="text-secondary">Digital</span> </h1>
                            </a>
                            <p class="mt-4 text-light">A leading platform for digital certifications, providing professionals with verifiable credentials that enhance career opportunities.</p>
                            <div class="d-flex hightech-link">
                                <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                                <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                                <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                                <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="h3 text-secondary">Short Link</a>
                            <div class="mt-4 d-flex flex-column short-link">
                                <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                                <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="h3 text-secondary">Help Link</a>
                            <div class="mt-4 d-flex flex-column help-link">
                                <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                                <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <a href="#" class="h3 text-secondary">Contact Us</a>
                            <div class="text-white mt-4 d-flex flex-column contact-link">
                                <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> 1234 Innovation, Tech City, USA</a>
                                <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +123 456 7890</a>
                                <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@certidigital.com</a>
                            </div>
                        </div>
                    </div>
                    <hr class="text-light mt-5 mb-4">
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
        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="./assets/js/main.js"></script>
    </body>
</html>