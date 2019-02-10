    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">SIO </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="#">Equipe </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Etudiants <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">1ère Année</a></li>
                            <li role="presentation"><a href="#">2 ème Année</a></li>
                            <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="#">Trombinoscope </a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="#">Cours </a></li>
                    <li role="presentation"><a href="#">Projets </a></li>
					 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Stages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Offres</a></li>
							 <li class="divider" role="presentation"></li>
                            <li role="presentation"><a href="#">Demandes</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation">
					<?php

					if ($_SESSION['connecte']!='ok')
					{ 
					?>
                        <a href="connecter.php"> <i class="glyphicon glyphicon-user"></i> Se connecter</a>
                    <?php
					}
					else
					{  
					?>
					<a href="#"> <i class="glyphicon glyphicon-user"></i> connecté</a>
                    <?php
					}
					?>
					</li>
                    <li role="presentation">
                        <a href="insert_etudiant.php"> <i class="glyphicon glyphicon-log-in"></i> S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>