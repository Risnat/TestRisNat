<?php
session_start();
 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php
if (isset ($_SESSION['connecte']))
{
	
}
else
{
	$_SESSION['connecte']= 'pasok';
}
include("connexion.php");
?>

<body>
<?php
include("navbar.php");
?>
    

    <div class="jumbotron">
        <h1><strong>BTS SIO - LANNION</strong></h1>
        <p>J'entends et j'<strong>oublie</strong>, Je vois et je me <strong>souviens,</strong> Je fais et je <strong>comprends</strong> </p>
    </div>
    <div class="container-fluid">
        <div class="row">

<?php
$requete = $connexion->prepare('SELECT prenom_etudiant,nom_etudiant from etudiant order by nom_etudiant');
$requete->execute();
$lignes = $requete->fetchAll();
foreach($lignes as $ligne)
{
	?>
	
	<div class="col-md-3 al >
			<div class="col-lg-12 ">
                <div class="card">
				 <div class="card-block-head">
                        <h4 class="text-bold">Etudiant 1ère année</h4>
                    </div>
                    <img class="img-circle" src="assets/img/etudiant.jpg">
                    <div class="card-block">
                        <h5 class="text-bold"><?php  echo ($ligne["prenom_etudiant"].' '.$ligne["nom_etudiant"]);  ?>
						<a href="#"><span class="glyphicon glyphicon-user"></span></a>
						</h5>
						
                    </div>
					 <div class="card-block_white">
                        
						<h4 class="text-white">'</h4>
                    </div>
                </div>
            </div>
			
	<?php

}
?>

           
			
			
			
    </div>
	<p></p>
	<div>
	<section class="index-link">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="link-area">
                    <h3>A propos</h3>
                    <P> Le BTS SIO (Services Informatiques aux Organisations) a été créé à la rentrée 2011 et remplace le BTS "Informatique de Gestion". Le but : former en deux ans des étudiants à la mise en place de solutions informatiques dans les entreprises et les administrations. </P>
                    <li class="fa-li"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="fa-li"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="fa-li"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </div>
            </div>
            <div class="col-md-3">
                <div class="link-area">
                    <h3>Compétences</h3>
                    <ul>
                    <li><a href="#"> SLAM</a></li>
                    <li><a href="#"> SISR</a></li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="link-area">
                    <h3>Lycée</h3>
                    <ul>
                    <li><a href="#"> Accueil</a></li>
                    <li><a href="#"> Blog</a></li>
                    <li><a href="#"> A propos</a></li>
                    <li><a href="#"> contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="link-area">
                    <h3>En savoir plus</h3>
                    <ul>
                    <li><a href="#"> Services-1</a></li>
                    <li><a href="#"> Services-1</a></li>
                    >
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>