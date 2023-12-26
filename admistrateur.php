
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
       
        /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* Full-width input fields */
.modal-content input[type=text], 
.modal-content input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Set a style for the submit button */
.modal-content .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.modal-content .cancel {
  background-color: red;
}

/* Add some padding to the form container */
.modal-content form {
  padding: 20px;
}

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
form {
  background-color: rgb(245, 251, 253);
  width: 500px;
  padding: 20px;
  padding-left: 25px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin: auto;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }

fieldset {
  margin-bottom: 20px;
}

/* Style du bouton */
#bouton {
  display: inline-block;
  padding: 10px 20px;
  background-color: #03989e;
  color: #fff;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  border: none;
  cursor: pointer;
}

/* Style du bouton au survol */
#bouton:hover {
  background-color: #036d72;
}
#bouton1:hover {
  background-color: #e83d34;
}
/* Style du bouton au clic */

#bouton1:active {
  background-color: #d91c18;
}
/* Style du bouton désactivé */
#bouton #bouton1.disabled {
  background-color: #d3d3d3;
  cursor: not-allowed;
}


</style>




  <header id="header" class="header d-flex align-items-center">
<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Parky<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
       
        <ul>
          <li><a href="index-copy.php">Accueil</a></li>
          
          
          <li><a href="gerercompte.php">Votre compte</a></li>
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
    <div class="page-header d-flex align-items-center" style=" padding-right:300px;   background: linear-gradient(to bottom, rgba(150, 210, 255, 0.9), rgba(35, 208, 211, 0.6));">

        
        
       
                <!-- Horizontal Form -->
                
                <section  class="breadcrumbs">
                  <div class="container" style="display: flex; justify-content: center; align-items: center;">
  
                   
                    
                    <div class="row">
                      
                      
                      <div class="col-lg-6 order-1 order-lg-2">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                      </div>
                    </div>
                  </div>
                </section>
                
                <section style="padding-left:80px;padding-top:1px;">
                  <div class="container" >
                  <div class="d-flex justify-content-between align-items-center">
                      
    <div style="padding-left:10px;"class="section-header">
   
   <h2>Ajouter un terrain de parking</h2>
                   
                    </div>
                    <form  method="POST" enctype="multipart/form-data">
                 
                      <div style="width:450px;"class="form-group">
                        <label for="Localisation">Localisation</label>
                        <input type="text" class="form-control" id="Localisation" name="Localisation">
                      </div>
                    
                      <div class="form-group">
                        <label for="NombreEmplacementTotale">Nombre d'emplacement totale</label>
                        <input type="number" class="form-control" id="NombreEmplacementTotale" name="NombreEmplacementTotale">
                      </div>
                    
                      <div class="form-group">
                        <label>Type de configuration de stationnement</label><br>
                        <input type="radio" name="type_stationnement" id="en_bataille" value="en_bataille">
                        <label for="en_bataille">en bataille</label>
                        <input type="radio" name="type_stationnement" id="epi_en_45" value="epi_en_45">
                        <label for="epi_en_45">Epi en 45°</label>
                        <input type="radio" name="type_stationnement" id="epi_en_60" value="epi_en_60">
                        <label for="epi_en_60">Epi en 60°</label>
                      </div>
                    
                      
                    
                      <div class="form-group">
                        <label for="image">Sélectionnez une image à télécharger :</label><br>
                        <input type="file" class="form-control-file" id="filename" name="image_file">
    <img id="preview-image" src="#" alt="Aperçu de l'image" style="max-width: 300px; max-height: 300px; margin-top: 10px;">
    <script>
        // Fonction pour afficher l'aperçu de l'image sélectionnée
        document.getElementById("image_file").addEventListener("change", function() {
            var previewImage = document.getElementById("preview-image");
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
            }
            reader.readAsDataURL(file);
        });
    </script>
                      </div>
                    
                    
                      <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                    </form>
                    
                    <?php


    $conn = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn));
    
    if (isset($_FILES["image_file"])) {
      // get the temporary filename of the uploaded file
      $tmp_file = $_FILES["image_file"]["tmp_name"];
      
      // read the contents of the file
      $file_data = file_get_contents($tmp_file);
      
      // convert the file data to a base64-encoded string
      $base64_data = base64_encode($file_data);
      
      // echo the base64 string
      
    }
    
    if (isset($_POST['submit'])) {
        $adresse = $_POST["Localisation"];
        $nbre_places = $nbre_places_dispo = $_POST["NombreEmplacementTotale"];
        $type_stationnement = $_POST["type_stationnement"];
        
        $stmt = mysqli_prepare($conn, "INSERT INTO terrain_de_parking (IMAGE_TERRAIN,TYPE_DE_STATIONNEMENT, ADRESSE, NBRE_DES_PLACES, NBRE_DES_PLACES_DISPONIBLES) VALUES (?,?, ?, ?, ?)");

        mysqli_stmt_bind_param($stmt, "sssii",$base64_data, $type_stationnement, $adresse, $nbre_places, $nbre_places_dispo);
        mysqli_stmt_execute($stmt);

       

      
       
                             $filename = $_FILES["image_file"]["name"];
                             $tmpname = $_FILES["image_file"]["tmp_name"];
                             $folder = "images/" . $filename;
                         
                             // Open the file in binary mode
                             $file_data = fopen($tmpname, 'rb');
                         
                             // Read the contents of the file
                             $file_contents = fread($file_data, filesize($tmpname));
                         
                             // Close the file
                             fclose($file_data);
                         
                             // Convert the file data to a base64-encoded string
                             $base64_data = base64_encode($file_contents);
                         
        // If upload button is clicked ...
       
    
        // remove the data URI scheme from the string if it exists
        if (strpos($base64_data, "data:image") !== false) {
            $base64_data = substr($base64_data, strpos($base64_data, ",") + 1);
        }
        
        // decode the base64-encoded string to binary data
        $image_data = base64_decode($base64_data);
        
        // generate a unique filename for the image
        $filename = uniqid() . ".png";
        
        // display the image
      //  echo '<img src="images/' . $filename . '">';
    }
       
    
    mysqli_close($conn);
?>

                
                  
	

		
	


           
            </div>
         
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
         
        </div>
      </div>
    </div>
    

    
  
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
    
<div class="col-xl-4 col-md-6">
          </div><!-- End post list item -->
</div><!-- End blog posts list --></div>
    </section><!-- End Blog Section -->
    
    <div class="section-header">
   
    <h2 >Listes des Parkings</h2>
    <div style="padding-left:200px;padding-right: 200px;padding-bottom: 10px; "class="col-lg-6">

  
    <div class="col-lg-6">
          <!-- Table with stripped rows -->
<!-- Primary Color Bordered Table -->
<table style="width:900px;align-items:left; align-content: start;"class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Numéro de parking</th>
      <th scope="col">Localisation</th>
      <th scope="col">type de configuration de stationnement</th>
      <th scope="col">Nombre d'emplacements totale</th>
      <th scope="col">Nombre d'emplacements disponibles</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error());
    $res = mysqli_query($conn, "SELECT * FROM terrain_de_parking ORDER BY ID_TERRAIN_DE_PARKING");

    while ($row = mysqli_fetch_array($res)) {
      echo '<tr>';
      echo '<td>' . $row['ID_TERRAIN_DE_PARKING'] . '</td>';
      echo '<td>' . $row['ADRESSE'] . '</td>';
      echo '<td>' . $row['TYPE_DE_STATIONNEMENT'] . '</td>';
      echo '<td>' . $row['NBRE_DES_PLACES'] . '</td>';
      echo '<td>' . $row['NBRE_DES_PLACES_DISPONIBLES'] . '</td>';
      echo '<td>';
      echo '<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">';
      echo '<button style="display: inline-block;
            padding: 10px 20px;
            background-color: #52b212;/* Ajout de la couleur de fond pour le bouton */
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            cursor: pointer;" id="bouton"  class="open-form">Modifier</button> <!-- Ajout du texte pour le bouton -->';
      echo '<button style="display: inline-block;
            padding: 10px 20px;
            background-color: #b71007; /* Ajout de la couleur de fond pour le bouton */
            color: rgba(255, 255, 255, 0.7);
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            cursor: pointer;" id="bouton1" class="supprimerTerrain">Supprimer</button> <!-- Ajout du texte pour le bouton -->';
      echo '</div>';
      echo '</td>';
      echo '</tr>';
    }

    mysqli_close($conn);
    ?>
  </tbody>
</table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>
  </main><!-- End #main -->
 
  <div id="myForm" class="modal">
  <div style="width:550px;" class="modal-content"><div class="d-flex justify-content-between align-items-center">
                      <h2 style="font-size:30px">Modifier le terrain de parking</h2>
                    </div>
    <form  method="POST" enctype="multipart/form-data">
    
        <div class="form-group">
          <label for="Localisation1">Localisation</label>
          <input type="text" class="form-control" id="Localisation1" name="Localisation1">
        </div>
      
        <div class="form-group">
          <label for="NombreEmplacementTotale1">Nombre d'emplacement totale</label>
          <input type="number" class="form-control" id="NombreEmplacementTotale1" name="NombreEmplacementTotale1">
        </div>
    
        <div class="form-group">
          <label>Type de configuration de stationnement</label><br>
          <input type="radio" name="type_stationnement1" id="en_bataille1" value="en_bataille">
          <label for="en_bataille">en bataille</label>
          <input type="radio" name="type_stationnement1" id="epi_en_451" value="epi_en_45">
          <label for="epi_en_45">Epi en 45°</label>
          <input type="radio" name="type_stationnement1" id="epi_en_601" value="epi_en_60">
          <label for="epi_en_60">Epi en 60°</label>
        </div>
      
        
      
        <div class="form-group">
          <label for="image">Sélectionnez une image à télécharger :</label><br>
          <input type="file" class="form-control-file" id="filename1" name="filename1">
<img id="preview-image1" src="#" alt="Aperçu de l'image" style="max-width: 300px; max-height: 300px; margin-top: 10px;">
/*<?php


$conn1 = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn1));

if (isset($_FILES["image_file1"])) {
  // get the temporary filename of the uploaded file
  $tmp_file1 = $_FILES["image_file1"]["tmp_name"];
  
  // read the contents of the file
  $file_data1 = file_get_contents($tmp_file1);
  
  // convert the file data to a base64-encoded string
  $base64_data1 = base64_encode($file_data1);
  
  // echo the base64 string
  
}

if (isset($_POST['submit1'])) {
    $adresse1 = $_POST["Localisation1"];
    $nbre_places1 = $nbre_places_dispo1 = $_POST["NombreEmplacementTotale1"];
    $type_stationnement1 = $_POST["type_stationnement1"];
    
    $stmt = mysqli_prepare($conn1, "INSERT INTO terrain_de_parking (IMAGE_TERRAIN,TYPE_STATIONNEMENT, ADRESSE, NBRE_DES_PLACES, NBRE_DES_PLACES_DISPONIBLES) VALUES (?,?, ?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "sssii",$base64_data1, $type_stationnement1, $adresse1, $nbre_places1, $nbre_places_dispo1);
    mysqli_stmt_execute($stmt);

   

  
   
                         $filename1 = $_FILES["filename1"]["name"];
                         $tmpname1 = $_FILES["filename1"]["tmp_name"];
                         $folder1 = "images/" . $filename1;
                     
                         // Open the file in binary mode
                         $file_data1 = fopen($tmpname1, 'rb');
                     
                         // Read the contents of the file
                         $file_contents1 = fread($file_data1, filesize($tmpname1));
                     
                         // Close the file
                         fclose($file_data1);
                     
                         // Convert the file data to a base64-encoded string
                         $base64_data1 = base64_encode($file_contents1);
                     
    // If upload button is clicked ...
   

    // remove the data URI scheme from the string if it exists
    if (strpos($base64_data1, "data:image") !== false) {
        $base64_data1 = substr($base64_data1, strpos($base64_data1, ",") + 1);
    }
    
    // decode the base64-encoded string to binary data
    $image_data1 = base64_decode($base64_data1);
    
    // generate a unique filename for the image
    $filename1 = uniqid() . ".png";
    
    // display the image
  //  echo '<img src="images/' . $filename . '">';
}
   

mysqli_close($conn1);
?>*/
<script>
// Fonction pour afficher l'aperçu de l'image sélectionnée
document.getElementById("filename").addEventListener("change", function() {
var previewImage = document.getElementById("preview-image");
var file = this.files[0];
var reader = new FileReader();
reader.onload = function(e) {
  previewImage.src = e.target.result;
}
reader.readAsDataURL(file);
});

// Fonction pour afficher l'aperçu de l'image sélectionnée
document.getElementById("filename1").addEventListener("change", function() {
var previewImage = document.getElementById("preview-image1");
var file = this.files[0];
var reader = new FileReader();
reader.onload = function(e) {
  previewImage.src = e.target.result;
}
reader.readAsDataURL(file);
});

</script>

        </div>
        <button type="submit" name="submit1" class="btn">Enregister les modifications</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Annuler</button>
      </form>
  
  </div>
</div>

  <div  class="section-header">
    <h2>Listes des utilisateurs</h2>
    <div class="col-lg-6">

      <div style="padding-bottom: 10px; padding-left:200px;width:1400px;"class="card">
        <div class="card-body">
        
        <?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parky";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Exécution de la requête
$sql = "SELECT * FROM utilisateur";
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
    // Affichage des résultats dans une table
    echo "<table>";
    echo "<tr><th>ID utilisateur</th><th>Nom d'utilisateur</th><th>Prénom d'utilisateur</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["IDE_UTILISATEUR"] . "</td><td>"  . $row["NOM_D_UTILISATEUR"]. "</td><td>" . $row["PRENOM_D_UTILISATEUR"]. "</td><td>" ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>

          <!-- End Table with stripped rows -->

        </div>
      </div>
  </div>
  
  <!-- ======= listes des parkings Section ======= -->
  <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Listes des parkings entrés</h2>
       
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <
        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">l'École Nationale Supérieure d'Ingénieurs de Tunis</a></h4>
                <p>partition en epi 60</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Parking de la Gare de Tunis</a></h4>
                <p>partition en bataille</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Parking de l'Avenue Habib Bourguiba</a></h4>
                <p>partition en 60</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Azure City Parking</a></h4>
                <p>partition en epi45</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Parking de la Medina de Tunis</a></h4>
                <p>partition en  bataille</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
            <div class="portfolio-wrap">
              <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Parking de l'Aéroport International de Tunis-Carthage</a></h4>
                <p>partition en 45</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  

  


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Parky</span>
          </a>
          <p>Pour améliorer l'efficacité et la commodité de la gestion de votre parking utilisez Parky</p>
        
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Liens usuels</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Listes des parkings</a></li>
            <li><a href="#">Votre compte</a></li>
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
  <script>
   // Get all buttons with class "open-form"
var buttons = document.getElementsByClassName("open-form");
// Récupérer tous les boutons "supprimerTerrain"
var SuppButtons = document.getElementsByClassName("supprimerTerrain");

// Récupérer le modal
var modal = document.getElementById("myForm");

// Récupérer l'élément <span> qui ferme le modal
var span = document.getElementsByClassName("cancel")[0];

// Ajouter un gestionnaire d'événement à chaque bouton "supprimerTerrain"
for (var j = 0; j < SuppButtons.length; j++) {
  SuppButtons[j].addEventListener('click', function() {
    // Afficher une boîte de dialogue de confirmation
    if (confirm("Voulez-vous vraiment supprimer ce terrain de parking ?")) {
      // Demander l'adresse du terrain de parking à supprimer
      let adresse = prompt("Quelle est l'adresse du terrain de parking que vous voulez supprimer ?");
      
      // Si une adresse a été saisie
      if (adresse !== null) {
        // Envoyer une requête AJAX pour récupérer l'ID du terrain de parking correspondant à l'adresse saisie
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "getTerrainId.php?adresse=" + encodeURIComponent(adresse), true);
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Si la requête a réussi, récupérer l'ID du terrain de parking
            let idTerrainDeParking = xhr.responseText.trim();

            // Envoyer une requête AJAX pour supprimer le terrain de parking et les places de parking associées
            let xhr2 = new XMLHttpRequest();
            xhr2.open("POST", "supprimerTerrain.php", true);
            xhr2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr2.onreadystatechange = function() {
              if (xhr2.readyState === 4 && xhr2.status === 200) {
                // Si la requête a réussi, afficher un message de confirmation et recharger la page
                alert("Le terrain de parking a été supprimé avec succès.");
                location.reload();
              }
            };
            xhr2.send("idTerrainDeParking=" + encodeURIComponent(idTerrainDeParking));
          }
        };
        xhr.send();
      }
    }
  });
}


// Loop through all buttons and add an event listener to open the modal
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function() {
    modal.style.display = "block";
  });
}

// When the user clicks on <span> (x), close the modal
function closeForm() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>
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