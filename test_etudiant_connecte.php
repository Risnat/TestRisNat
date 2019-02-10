<?php
session_start();
 ?>
<!doctype html>
<html>
<head>

</head>
<body>
<?php

include("connexion.php");
$test='';
$requete = $connexion->prepare('SELECT identifiant_etudiant from etudiant where nom_etudiant = "'.$_POST['identifiant'].'" and mdp_etudiant = "'.$_POST['mdp'].'"');
$requete->execute();
$lignes = $requete->fetchAll();
if (count($lignes) != 0)
{   
	$_SESSION['connecte']='ok';
	header('Location: index.php');
}
else
{   sleep(20);
	$_SESSION['connecte']='pasok';

	header('Location: index.php');
}
	?>
</body>
</html>

