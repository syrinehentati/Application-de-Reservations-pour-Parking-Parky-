
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Parky - compte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap1/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons1/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Parky
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/Parky-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  

  <!-- Template Main CSS File -->
  
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Parky<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
       
        <ul>
          <li><a href="index-copy.php">Accueil</a></li>
          <?php
// Establish database connection
$conn1 = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn1));

// Fetch addresses from the database
$result = mysqli_query($conn1, "SELECT ADRESSE FROM terrain_de_parking");

// Display addresses in the HTML list
echo '<li class="dropdown"><a href="#liste"><span>Listes des parkings</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>';
echo '<ul>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<li><a href="listesdesparkings.php">' . $row['ADRESSE'] . '</a></li>';
}

echo '</ul></li>';

// Close database connection
mysqli_close($conn1);
?>
         
          <li><a href="#contacter">Contactez_nous</a></li>
        
        
      </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->
<!-- End Header -->

  <main id="main">
  
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Gérez votre compte</h2>
              <p>Vous pouvez mettre à jour vos informations personnelles, telles que votre adresse e-mail ou votre numéro de téléphone, en quelques clics seulement. </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>Votre compte</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


  </main><!-- End #main -->
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Utilisateur/ compte</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->


  

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <h2>Hentati Syrine</h2>
           
              
            </div>
          </div>

        </div>

        <div style="padding-left:10px;padding-right: 100px;" class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">À propos</button>
                </li>

            

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Détails du profil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nom complet</div>
                    <div class="col-lg-9 col-md-8">Hentati Syrine</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID utilisateur</div>
                    <div for="idU"class="col-lg-9 col-md-8">002</div>
                  </div>
                  

                 

                </div>
                <form method="post">
          <input type="submit" name="logout" value="Logout">
                 </form>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                 
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
    
    
</section>

<?php


if (isset($_POST['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to the login page
    header("Location: login.html");
    exit;
}
?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Parky</span>
          </a>
          <p>Pour améliorer l'efficacité et la commodité de la gestion de votre parking utilisez Parky</p>
        
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Liens usuels</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Listes des parkings</a></li>
          
            <li><a href="#">Contactez_nous</a></li>
            
          </ul>
        </div>

       
        <div id="contacter"class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4 >Contactez_nous</h4>
          <p>
            
            <strong>Telephone:</strong> +216 53995317<br>
            <strong>Email:</strong> sirinehentati2084@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap1/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>