<?php
session_start();
 ?>
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
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <link href="css/jumbotron.css" rel="stylesheet" type="text/css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">-->
</head>

<body>
<?php
include("navbar.php");
?>
    

    <div class="jumbotron">
        <h1><strong>BTS SIO - LANNION</strong></h1>
        <p>J'entends et j'<strong>oublie</strong>, Je vois et je me <strong>souviens,</strong> Je fais et je <strong>comprends</strong> </p>
    </div>
    <div class="container-fluid">
        
            <div class="card">

                    <div class="card-header"> 
                      <h4 class="text-bold">Etudiant 1ère année</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                         
<?php
$requete = $connexion->prepare('SELECT prenom_etudiant,nom_etudiant,chemin_image_etudiant from etudiant order by nom_etudiant');
$requete->execute();
$lignes = $requete->fetchAll();
foreach($lignes as $ligne)
{
	?>
	                       <div class="col-md-3" >
                
                             <img class="img-circle fluid" src="<?php echo $ligne["chemin_image_etudiant"]?>">
                             <div class="card-block">
                                 <h5 class="text-bold"><?php  echo ($ligne["prenom_etudiant"].' '.$ligne["nom_etudiant"])?>
						            <a href="#"><span class="glyphicon glyphicon-user"></span></a>
						         </h5>
                             </div>
					        
                            </div>
                    <?php

}
?>
                
            </div>
            </div>	
    </div>
	</div>

	
    <div class="container-fluid">
        <section class="index-link">
        <div class="row">
            <div class="col-md-3">
                <div class="link-area">
                    <h3>A propos</h3>
                    <p> Le BTS SIO (Services Informatiques aux Organisations) a été créé à la rentrée 2011 et remplace le BTS "Informatique de Gestion". Le but : former en deux ans des étudiants à la mise en place de solutions informatiques dans les entreprises et les administrations. </>
                    <ul>
                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    </ul>
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
                    <li><a href="#"> Services-2</a></li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>