<?php
// Vérifier si le formulaire a été soumis
if (isset($_POST["submit"])){

    // Récupérer les informations de connexion à la base de données
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="parky";

    // Se connecter à la base de données
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("La connexion a échoué :".mysqli_connect_error());
    }

    // Récupérer l'ID de l'utilisateur et le mot de passe saisis dans le formulaire
    $idU=$_POST['idU'];
    $password=$_POST['password'];

    // Préparer la requête SQL pour récupérer les informations de l'utilisateur correspondant à l'ID saisi
    $sql="SELECT * FROM utilisateur WHERE IDE_UTILISATEUR=?";
   
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $idU);
    mysqli_stmt_execute($stmt);

    // Récupérer les résultats de la requête
    $result = mysqli_stmt_get_result($stmt);

    // Vérifier si la requête a renvoyé des résultats
    if ($result !== false && mysqli_num_rows($result)>0){
        
        // Récupérer les informations de l'utilisateur
        $row=mysqli_fetch_assoc($result);
        $actualPass=$row['MOT_DE_PASSE'];

        // Vérifier si le mot de passe saisi correspond au mot de passe de l'utilisateur
        if($actualPass==$password){

            // Démarrer la session et enregistrer l'ID de l'utilisateur
            session_start();
            $_SESSION['idU']=$idU;

            // Rediriger l'utilisateur vers la page d'accueil ou la page d'administration, selon ses privilèges
            if($password=="parky123" && $idU==2 ){
                header("Location:admistrateur.php");
            }
            else{
                header("Location: index-copy.php");
            }
            exit;
        }
        else{
            // Afficher un message d'erreur si le mot de passe saisi est incorrect
            echo 'bad';
        }
    }
    else {
        // Afficher un message d'erreur si l'ID de l'utilisateur saisi n'a pas été trouvé dans la base de données
        echo 'bad';
    }

    // Fermer la requête et la connexion à la base de données
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
   // Afficher un message d'erreur si le formulaire n'a pas été soumis correctement
   echo 'failed to open';
}
?>
