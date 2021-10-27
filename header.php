<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="text/php">
    <title>Tc php Equipe One HBCK.</title>
    <meta name="description" content="Equipe One">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<header>
   
        

<nav class="navbar navbar-icon-top navbar-expand-lg ">
          <img id="logo" src="picture/logo80.png" alt="logo insigne">
  
<!-------Burger------------------>
<button class="navbar-toggler navbar-dark " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    </span>
  </button>
  <!--------------------------------------->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="btn btn-perso" id="accueil" href="index.php?page=accueil" >
          <i class="fa fa-home"></i>
          Accueil
          <span class="sr-only">(current)

          </span>
          </a>
      </li>
<!--------------------------------------->
<div class="dropdown">
  <button class="btn btn-perso2   dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    News
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    <a class="dropdown-item" id="news" href="news.php?page=news">
          News
        </a>

    <a class="dropdown-item" id="cote_hand" href="cote_hand.php?page=cote_hand">
        Coté Hand
        </a>
  </div>
</div>
<!--------------------------------------->
<div class="dropdown">
  <button class="btn btn-perso2   dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Club
  </button>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    <a class="dropdown-item" id="club" href="club.php?page=club">
          Club
        </a>

        <a class="dropdown-item" id="equipes" href="equipes.php?page=equipes">
        Equipes
        </a>

        <a class="dropdown-item" id="calendrier" href="calendrier.php?page=calendrier">
        Calendrier des matchs
        </a>

  </div>
</div>

<!--------------------------------------->
      <li class="nav-item">
        <a class="btn btn-perso" id="mediatheque" href="media.php?page=mediatheque">
          Mediatheques
        </a>
      </li>
<!--------------------------------------->
      <li class="nav-item">
        <a class="btn btn-perso" id="partenaires" href="sponsorts.php?page=sponsorts">
          Partenaires
        </a>
      </li>
<!-------------contact----------------->
      <li class="nav-item">
        <a class="btn btn-perso " id="contact" href="contact.php?page=contact">
          Contact
        </a>
      </li>
 <!-------------------facebook-------------------->
      <li class="nav-item">
        <a class="btn btn-perso fa fa-facebook"  href="#" >
        </a>
      </li>
      <!-------------------twiter-------------------->
      <li class="nav-item">
        <a class="btn btn-perso fa fa-twitter"  href="#" >
        </a>
      </li>
        <!--------------------------------------->
    </ul>
  <div>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle jauneTexte " data-toggle="dropdown"><b>Accés</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
                            <form class="form" action="valide_connexion.php" method="post">
										<div class="form-group">
											 <label class="sr-only" for="Email">Adresse Email</label>
											 <input class="form-control" input type="text" placeholder="Identifiant" name="Email" value="<?php if (isset($_POST['Email'])) echo htmlentities(trim($_POST['Email'])); ?>">
										</div>
										<div class="form-group">
											 <label class="sr-only" for="Mot de passe">Password</label>
                                             <input class="form-control" input type="password" placeholder="Mot de passe" name="Mot_De_Passe" value="<?php if (isset($_POST['Mot_De_Passe'])) echo htmlentities(trim($_POST['Mot_De_Passe'])); ?>">
                                             <div class="help-block text-right"><a href="">Mot de passe ?</a></div>
										</div>
										<div class="form-group">
                                        <button class="btn btn-danger my-2 my-sm-0" type="submit" name="connexion" value="Connexion">Connexion</button>
										</div>
										
								 </form>
							</div>
							
					 </div>
				</li>
			</ul>
        </li>
</div>
<!--------------------------------------->
   
  </div>
 <img id="logoFeminin" src="picture/hbFeminin.png" alt="logo texte">
</nav>

</header>
<body>