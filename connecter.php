<?php
session_start();
 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout etudiant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="css/jumbotron.css" rel="stylesheet" type="text/css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php 
include("navbar.php");
?>
<br>
<br>
<div class="container">
<div class="col-md-6 col-md-offset-3"> 
    <div class="form-area">  
        <form action="test_etudiant_connecte.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Connexion</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="identifiant" name="identifiant" placeholder="identifiant" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mdp" name="mdp" placeholder="mot de passe" required>
					</div>
					
                    
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
        </form>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>