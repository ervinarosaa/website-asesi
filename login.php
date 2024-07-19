<?php
// panggil file "database.php" untuk koneksi ke database
require_once "config/database.php";
if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = $_POST['pswd'];

    // Menggunakan prepared statements untuk mencegah SQL Injection
    $sql = "SELECT * FROM tbl_admin WHERE USERNAME = ? AND PASSWORD = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            header("Location: ./crud/dashboard.php");
            exit();
        } else {
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }

        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }

    $mysqli->close();
}
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
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                                <a href="login.php" class="nav-item nav-link active text-secondary">Login</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Navbar End-->
        </header>
        
        <main>
            <!-- Form Login -->
            <div class="row justify-content-center mt-5 mb-5">
                <div class="bg-secondary col-lg-3 col-md-6 p-4 rounded">
                    <div class="text-center mb-4">
                        <h1 class="text-white">Login</h1>
                    </div>
                    <form action="" method="POST" class="was-validated">
                        <div class="mb-3">
                            <label for="uname" class="form-label text-white">Username:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        </div>
                        <div class="mb-3">
                            <label for="pswd" class="form-label text-white">Password:</label>
                            <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" name="submit" class="btn btn-primary rounded-pill">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Fact End -->
        </main>
        
        <footer>
            <!-- Footer Start -->
            <div class="container-fluid footer bg-dark">
                <div class="container pt-5 pb-4">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <a href="index.php">
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

        <!-- Template Javascript -->
        <script src="./assets/js/main.js"></script>
    </body>

</html>