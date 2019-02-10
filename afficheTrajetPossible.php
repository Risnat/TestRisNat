<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d’accueil : coup de pouce à Dantec</title>
    
    <!-- acquisition de la bib bootstrp-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="../css/jumbotron.css" rel="stylesheet" type="text/css"> 
    
    
    
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

$_SESSION['place_id_lycee']= 'ChIJOcUjxYorEkgRADTmNs2lDAQ';
    $_SESSION['lat_lycee']=  48.732084;
    $_SESSION['long_lycee']=   -3.459144;

?>

    <div class="container"> <!-- definition du container de la page d'accueil-->

        <nav class="navbar navbar-inverse" role="navigation">  <!-- barre de navigation en noir avec nav-barinverse-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../index.php" class="navbar-brand">Pouce à Dantec </a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li> <a href="../index.php">Accueil</a> </li>
                    <li> 
                        <a href="proposertrajet.php">Proposer un trajet </a>
                    </li>
                    <li> <a  href="recherchertrajet.php">Rechercher un trajet </a>
                    </li>
                    <li> <a href="profil.php"><?php echo $_SESSION['prenom'].'<br>'.$_SESSION['nom'] ;?> </a>
                        
                        </li>
                </ul>
                <form class="navbar-form navbar-right" action = "../index.php" role="form">
                    <div class="input-group">
                        <input type="text" style="width:150px" class="input-sm form-control" placeholder="Recherche">
                        <span class="input-group-btn">

                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>

                        </span>
                    </div>
                </form>
            </div>
        </nav>
    </div>


<div class="container"> <!-- definition du container du jumbotron de page-->
    <div class= "row">
        <div class="col-md-12">
    <div class="jumbotron"> 
        <h2>Covoiturage pendant les travaux au lycée</h2>
    </div>
</div>
</div>
</div>
<!-- definition du container du milieu de page-->

<div class="container" id="containerRechercher"> 
    <div class= "row">



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
</div>





    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <left>
                <h6 class="footertext">A propos :</h6></left></div></div>
                <br>
                <div class="row">
                <div class="col-md-4">
                    <center>
                        <img src="http://www.icone-png.com/png/16/16118.png" class="img-circle" alt="the-brains" width="50px" height="50px">
                        <br>
                        <h6 class="footertext">infos pratiques</h6>
                        <h6><p class="footertext">vraiment pratiques<br></p></h6>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="http://www.icone-png.com/png/43/43317.png" class="img-circle" alt="..." width="50px" height="50px">
                        <br>
                        <h6 class="footertext">Qui sommes-nous ?</h6>
                        <h6><p class="footertext">Les BTS SIO1<br></p></h6>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="http://www.icone-png.com/png/54/53683.png" class="img-rounded" alt="..." width="50px" height="50px">
                        <br>
                        <h6 class="footertext">mentions légales</h6>
                    </center>
                </div>
            </div>
        </div>
            <br>
            <div class="row">
                    <center><img src="..//images/logo_fld.jpg" class="img-circle" alt="logo felix" width="50px" height="50px"></center>
                    <center>    <p><a href="#">Contactez-nous</a></p> <p class="footertext">Copyright 2018</p></center>
            </div>
        </div>
    
    
<?php

?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>