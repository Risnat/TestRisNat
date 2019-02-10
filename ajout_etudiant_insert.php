<!doctype html>
<html>
<head>

</head>
<body>
<?php
include("connexion.php");

$stmt = $connexion->prepare("INSERT INTO  etudiant (nom_etudiant, prenom_etudiant, chemin_image_etudiant,mdp_etudiant) VALUES (:nom_etudiant,:prenom_etudiant,:chemin_image_etudiant,:mdp_etudiant)");
$stmt->bindParam(':nom_etudiant',  $nom_etudiant);
$stmt->bindParam(':prenom_etudiant', $prenom_etudiant);
$stmt->bindParam(':chemin_image_etudiant',$chemin_image_etudiant );
$stmt->bindParam(':mdp_etudiant',$mdp );

// insertion d’une ligne
$nom_etudiant = $_POST['nom'];
$prenom_etudiant = $_POST['prenom'];
$chemin_image_etudiant = $_POST['nom'].'.jpg' ;
$mdp = $_POST['mdp'];
$succes=$stmt->execute();
header('Location: index.php');  
?>
</body>
</html>

