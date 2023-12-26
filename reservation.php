


<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'parky') or die(mysqli_error($conn));
if ($conn) {
    echo "Connexion réussie<br>";
}

$idU = $_SESSION['idU'];
$timereser = $_POST['timereser'];
$ADRESSE = $_POST['ADRESSE'];
$timesatayin = $_POST['timesatayin'];
$datereser = $_POST['datereser'];
$idterrain = $_POST['id_terrain_de_parking'];

// Select the first row that contains `SI_PLACE_DISPONIBLE = 0` for the given `ID_TERRAIN_DE_PARKING`
$sql2 = "SELECT ID_PLACE_DE_PARKING FROM place_de_parking WHERE ID_TERRAIN_DE_PARKING = ? AND SI_PLACE_DISPONIBLE = 0 LIMIT 1";
$stmt = mysqli_prepare($conn, $sql2);
mysqli_stmt_bind_param($stmt, 'i', $idterrain);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if ($result !== false && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $idPlaceDeParking = $row['ID_PLACE_DE_PARKING'];

    // Update the selected row
    $stmt = mysqli_prepare($conn, "UPDATE `place_de_parking` SET `SI_PLACE_DISPONIBLE`='1',`HEURE_DE_RESERVATION`=?,`DUREE_DE_RESERVATION`=?,`DATE_DE_RESERVATION`=? WHERE ID_PLACE_DE_PARKING=? and ID_TERRAIN_DE_PARKING=?");
    mysqli_stmt_bind_param($stmt, "ssssi", $timereser, $timesatayin, $datereser, $idPlaceDeParking, $idterrain);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Update the `utilisateur` table
    $stmt = mysqli_prepare($conn, "UPDATE `utilisateur` SET `ID_PLACE_DE_PARKING`=? WHERE IDE_UTILISATEUR=?");
    mysqli_stmt_bind_param($stmt, "ii", $idPlaceDeParking, $idU);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: index-copy.php");
    echo "Nouvelle réservation enregistrée avec succès.";
} else {
    echo "Aucune place de parking disponible.";
}
