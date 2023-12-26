
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Parky</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image1/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Parky
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/Parky-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <style>
    #listparking{
      display: grid;
      grid-template-columns: 25% 25% 25% 25%;
    }
    #hh4{
    grid-template-columns: 110% 5%;
    background-color: rgb(251, 253, 255);
    width: auto;
    display: grid;
}
</style>




  <header id="header" class="header d-flex align-items-center">
<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Parky<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
       
        <ul>
          <li><a href="index.php">Accueil</a></li>
         
            <li><a href="login.html">Se connecter à votre compte</a></li>
            <li><a href="#contacter">Contactez_nous</a></li>
          
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->


<body>
  
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="page-header d-flex align-items-center" style="background-image: url('');">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="index.php">Accueil</a></li>
        <li>Listes des parkings</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-8 cell-xl-9">
              <!-- Classic slider-->
              <section class="section">
                <!-- Swiper -->
               <img style="width:1500px;padding-left:150px;padding-right:40px;padding-top:4px" src="assets\img\parkingazure.jpeg">
              </section>
            </div>
            <div  class="cell-lg-4 cell-xl-3 reveal-lg-flex">
              <div style="width:300px;"class="hotel-booking-form">
                <h3>Resevez votre place parking</h3>
                <!-- RD Mailform-->
                <form  action="reservation.php" method="POST" style="padding-top:4px"class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="range range-sm-bottom spacing-20">
                    
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p style="color:#03989e" class="text-uppercase">Lieu de stationnement</p>
                      
                      <div class="form-wrap form-wrap-validation">
                        <!--Select 2-->
                        <?php
                        // Establish database connection
                        $conn1 = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn1));
            
                        // Fetch addresses from the database
                        $result = mysqli_query($conn1, "SELECT ADRESSE FROM terrain_de_parking");
            
                        // Display addresses in the HTML select element
                        echo '<select class="form-input select-filter" name="ADRESSE" data-minimum-results-search="-1" data-constraints="@Required">';
                        echo '<option>&nbsp;</option>';
            
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option>' . $row['ADRESSE'] . '</option>';
                        }
            
                        echo '</select>';
            
                        // Close database connection
                        mysqli_close($conn1);
                        ?>
                      </div>
                        
                
                    
                    </div>
                    <div class="cell-lg-12 cell-md-4 cell-sm-6">
                      <p style="color:#03989e"class="text-uppercase">Date de reservation</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span></span></label>
                        <input class="form-input" id="date-out" data-time-picker="date" type="date" name="datereser" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p style="color:#03989e"class="text-uppercase">Heure de reservation</p>
                      <div class="form-wrap">
                        <label class="form-label form-label-icon" for="date-out"><span>00:00</span></label>
                        <input class="form-input" id="date-out" data-time-picker="time" type="time" name="timereser" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-lg-6 cell-md-4 cell-xs-6">
                      <p style="color:#03989e"class="text-uppercase">Durée de reservation</p>
                      <div class="form-wrap">
                      <label class="form-label form-label-icon" for="date-out"><span>00:00</span></label>
                        <input class="form-input" id="date-out" data-time-picker="time" type="time"  name="timesatayin" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-lg-12 cell-md-4">
                      <button class="button button-primary button-square button-block button-effect-ujarak" type="submit" name="submit"><span>Réserver</span></button>
                    </div>
                    
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>



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
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#">Listes des parkings</a></li>
          <li><a href="#">Votre compte</a></li>
          <li><a href="#">Contactez_nous</a></li>
         
        </ul>
      </div>

    

      <div id="contacter"class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contactez_nous</h4>
        <p>
          <strong>Telephone:</strong> +216 53995317<br>
          <strong>Email:</strong> sirinehentati2084@gmail.com<br>
        </p>

      </div>

    </div>
  </div>

  <div class="container mt-4">

  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
      <!-- Javascript-->
      <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--Coded by Drel-->
    
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
  const reservationTime = document.getElementById('reservation-time').value;
  const reservationstart = document.getElementById('reservation-start').value;
  const reservationdate = document.getElementById('reservation-date').value;

</script>
</body>
</html>