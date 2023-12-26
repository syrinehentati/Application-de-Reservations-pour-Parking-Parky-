<?php session_start();


                  $conn = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn));
                  if ($conn) {
                    echo "Connexion réussie<br>";
                  }
                  
                  if (isset($_POST['submit'])) {
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $Mdp = $_POST['motsdepasse'];
                  
                    $stmt = mysqli_prepare($conn, "INSERT INTO utilisateur (NOM_D_UTILISATEUR, PRENOM_D_UTILISATEUR, MOT_DE_PASSE) VALUES (?,?,?)" );
                   
                    mysqli_stmt_bind_param($stmt, "sss", $nom, $prenom, $Mdp);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                  
                    header("Location: index-copy.php");
                    echo "Nouvel utilisateur inséré avec succès.";
                  }
                  
                  mysqli_close($conn);
?>