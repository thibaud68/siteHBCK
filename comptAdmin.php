<?php
include_once('connectbdd.php');
include_once('header.php');
//session_start();                                                                                                                                        

//echo ->.$_POST['Nom'] ;

if (
  isset($_POST['Nom']) && !empty($_POST['Nom']) &&
  isset($_POST['Prenom']) && !empty($_POST['Prenom']) &&
  isset($_POST['Email']) && !empty($_POST['Email']) &&
  isset($_POST['Mot_De_Passe']) && !empty($_POST['Mot_De_Passe']) &&
  isset($_POST['Administrateur']) && $_POST['Administrateur'] != "" &&
  isset($_POST['Webmaster']) && $_POST['Webmaster'] != "" &&
  isset($_POST['Redacteur']) && $_POST['Redacteur'] != ""
) {
  $bdd->exec("INSERT INTO utilisateurs VALUES(default,'" . $_POST['Nom'] . "','" . $_POST['Prenom'] . "','" . $_POST['Email'] . "','" . $_POST['Mot_De_Passe'] . "'," . $_POST['Administrateur'] . "," . $_POST['Webmaster'] . "," . $_POST['Redacteur'] . ");"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptAdmin.php'); //on rafraichit la page
}


if (
  isset($_POST['Nom_Partenaires']) && !empty($_POST['Nom_Partenaires']) &&
  isset($_POST['Adresse_Partenaires']) && !empty($_POST['Adresse_Partenaires']) &&
  isset($_POST['Numero_Partenaires']) && !empty($_POST['Numero_Partenaires']) &&
  isset($_POST['Logos_Partenaires']) && !empty($_POST['Logos_Partenaires'])
) {
  $bdd->exec("INSERT INTO partenaires VALUES(default,'" . $_POST['Nom_Partenaires'] . "','" . $_POST['Adresse_Partenaires'] . "','" . $_POST['Numero_Partenaires'] . "','" . $_POST['Logos_Partenaires'] . "');"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptAdmin.php'); //on rafraichit la page
}
if (
  isset($_POST['Date_Match']) /*&& !empty($_POST['Date_Match'])*/&&
  isset($_POST['Nom_Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
  isset($_POST['Score_HBCK']) /*&& !empty($_POST['Score_HBCK'])*/&&
  isset($_POST['Equipes_Adverses']) /*&& !empty($_POST['Equipes_Adverses'])*/&&
  isset($_POST['Score_Visiteurs'])
) {
  $bdd->exec("INSERT INTO news VALUES(default,'" . $_POST['Date_Match'] . "'," . $_POST['Nom_Equipes'] . "," . $_POST['Score_HBCK'] . ",'" . $_POST['Equipes_Adverses'] . "'," . $_POST['Score_Visiteurs'] . ");"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptAdmin.php'); //on rafraichit la page
  // echo "INSERT INTO news VALUES(default,'".$_POST['Date_Match']."',".$_POST['Nom_Equipes'].",".$_POST['Score_HBCK'].",'".$_POST['Equipes_Adverses']."',".$_POST['Score_Visiteurs'].")";
}
if (
  isset($_POST['Horaires_Entrainement']) && !empty($_POST['Horaires_Entrainement']) &&
  isset($_POST['Designation']) && !empty($_POST['Designation']) &&
  isset($_POST['Equipes']) && !empty($_POST['Equipes'])
) {

  $bdd->exec("INSERT INTO club VALUES(default,'" . $_POST['Horaires_Entrainement'] . "','" . $_POST['Designation'] . "'," . $_POST['Equipes'] . ");");
  header('refresh: 0; URL=comptAdmin.php'); //on rafraichit la page
  //header("Location:./comptAdmin.php");
  //include('comptAdmin.php');
}
if (
  isset($_POST['Nom_Equipes']) && !empty($_POST['Nom_Equipes']) &&
  isset($_POST['Championnat']) && !empty($_POST['Championnat'])
) {

  $bdd->exec("INSERT INTO equipes VALUES(default,'" . $_POST['Nom_Equipes'] . "','" . $_POST['Championnat'] . "');"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptAdmin.php'); //on rafraichit la page
}

?>
</main>
<div class="container  FDNoirClair">
  <div class="row no-gutters ">
    <div class="col-sm-12 col-xl-12 FDNoirClair ">
      <div>
        <p>
          Bienvenue
        </p>
        <a href="deconnexion.php">Deconnexion</a>
      </div>
      <table>
        <thead>
          <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>MOT DE PASSE</th>
            <th>ADMINISTRATEUR</th>
            <th>WEB MASTER</th>
            <th>REDACTEUR</th>


          </tr>
        </thead>
        <tbody>
          <?php
          $reponse  = $bdd->query('SELECT * FROM utilisateurs order by Id_Utilisateurs ASC');
          while ($donnees = $reponse->fetch()) {
            ?>
            <tr>
              <td><?php echo $donnees['Nom']; ?></td>
              <td><?php echo $donnees['Prenom']; ?></td>
              <td><?php echo $donnees['Email']; ?></td>
              <td><?php echo $donnees['Mot_De_Passe']; ?></td>
              <td><?php echo $donnees['Administrateur']; ?></td>
              <td><?php echo $donnees['Webmaster']; ?></td>
              <td><?php echo $donnees['Redacteur']; ?></td>
              <td><a href=modifCompt.php?Id_Utilisateurs=<?php echo $donnees['Id_Utilisateurs'] . '&Nom=' . $donnees['Nom'] . '&Prenom=' . $donnees['Prenom'] . '&Email=' . $donnees['Email'] . '&Mot_De_Passe=' . $donnees['Mot_De_Passe'] . '&Administrateur=' . $donnees['Administrateur'] . '&Webmaster=' . $donnees['Webmaster'] . '&Redacteur=' . $donnees['Redacteur']; ?>" type="button" class="btn btn-warning" />modifier</a></td>
              <td><a href="suppr_ComptAdmin.php?Id_Utilisateurs=<?php echo $donnees['Id_Utilisateurs']; ?>" type="button" class="btn btn-danger" />supprimer</a></td>
            </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
      <form id="monform" name="form1" method="post" action="comptAdmin.php">
        <h3>INSERTION TABLEAU UTILISATEURS:</h3>
        <label>
          <input type="hidden" name="Id_Utilisateurs" />
        </label>

        <label>NOM :
          <input type="text" name="Nom" />
        </label>
        <label>PRENOM :
          <input type="text" name="Prenom" />
        </label><br>
        <label>EMAIL :
          <input type="text" name="Email" />
        </label>
        <label>MOT DE PASSE :
          <input type="text" name="Mot_De_Passe" />
        </label><br>
        <label>ADMINISTRATEUR :
          <input type="text" name="Administrateur" />
        </label>
        <label>WEBMASTER :
          <input type="text" name="Webmaster" />
        </label>
        <label>REDACTEUR :
          <input type="text" name="Redacteur" />
        </label>
        <label>
          <input type="submit" name="bouton" value="Envoyer" />
        </label>
      </form>
      <table>
        <thead>
          <tr>
            <th>NOM </th>
            <th>ADRESSE </th>
            <th>NUMERO </th>
            <th>LOGOS </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $reponse  = $bdd->query('SELECT * FROM partenaires order by Id_Partenaires ASC');
          while ($donnees = $reponse->fetch()) {
            ?>
            <tr>
              <td><?php echo $donnees['Nom_Partenaires']; ?></td>
              <td><?php echo $donnees['Adresse_Partenaires']; ?></td>
              <td><?php echo $donnees['Numero_Partenaires']; ?></td>
              <td><?php echo $donnees['Logos_Partenaires']; ?></td>
              <td><a href="modifCompt.php?Id_Partenaires=<?php echo $donnees['Id_Partenaires'] . '&Nom_Partenaires=' . $donnees['Nom_Partenaires'] . '&Adresse_Partenaires=' . $donnees['Adresse_Partenaires'] . '&Numero_Partenaires=' . $donnees['Numero_Partenaires'] . '&Logos_Partenaires=' . $donnees['Logos_Partenaires']; ?>" type="button" class="btn btn-warning">modifier</a></td>
              <td><a href="suppr_ComptAdmin.php?Id_Partenaires=<?php echo $donnees['Id_Partenaires']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
            </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
      <form id="monform" name="form1" method="post" action="comptAdmin.php">
        <h3>INSERTION TABLEAU PARTENAIRES:</h3>
        <label>
          <input type="hidden" name="Id_Partenaires" />
        </label>
        <label>NOM :
          <input type="text" name="Nom_Partenaires" />
        </label>
        <label>ADRESSE :
          <input type="text" name="Adresse_Partenaires" />
        </label><br>
        <label>NUMERO :
          <input type="text" name="Numero_Partenaires" />
        </label>
        <label>LOGOS :
          <input type="text" name="Logos_Partenaires" />
        </label>
        <label>
          <input type="submit" name="bouton" value="Envoyer" />
        </label>
        <?php
        ?>
      </form>
    </div>
  </div>
</div>
</div>
<table>
  <thead>
    <tr>
      <th>PHOTO</th>
      <th>VIDEO</th>
      <th>ARTICLE DE PRESSE</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $reponse  = $bdd->query('SELECT * FROM Mediatheque order by Id_Media ASC');
    while ($donnees = $reponse->fetch()) {
      ?>
      <tr>
        <td><?php echo $donnees['Photo_Media']; ?></td>
        <td><?php echo $donnees['Video_Media']; ?></td>
        <td><?php echo $donnees['Articles_Presse_Media']; ?></td>
        <td><a href="modifCompt.php?Id_Media=<?php echo $donnees['Id_Media'] . '&Photo_Media=' . $donnees['Photo_Media'] . '&Video_Media=' . $donnees['Video_Media'] . '&Articles_Presse_Media=' . $donnees['Articles_Presse_Media']; ?>" type="button" class="btn btn-warning">modifier</a></td>
        <td><a href="suppr_ComptAdmin.php?Id_Media=<?php echo $donnees['Id_Media']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
      </tr>
    <?php
  }
  ?>
  </tbody>
</table>
<?php
if ((isset($_POST['Photo_Media']) && !empty($_POST['Photo_Media'])) && (isset($_POST['Video_Media']) && !empty($_POST['Video_Media'])) && (isset($_POST['Articles_Presse_Media']) && !empty($_POST['Articles_Presse_Media']))
) {
  $bdd->exec("INSERT INTO Mediatheque VALUES(default,'" . $_POST['Photo_Media'] . "','" . $_POST['Video_Media'] . "','" . $_POST['Articles_Presse_Media'] . "');"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  //header('refresh: 0; URL=comptAdmin.php');//on rafraichit la page
}
?>
<form id="monform" name="form1" method="post" action="comptAdmin.php">
  <h3>INSERTION TABLEAU MEDIATHEQUES:</h3>
  <label>
    <input type="hidden" name="Id_Media" />
  </label>
  <label>PHOTO :
    <input type="text" name="Photo_Media" />
  </label>
  <label>VIDEO :
    <input type="text" name="Video_Media" />
  </label><br>
  <label>ARTICLE DE PRESSE :
    <input type="text" name="Articles_Presse_Media" />
  </label>
  <label>
    <input type="submit" name="bouton" value="Envoyer" />
  </label>
</form>
<?php
$reponse1  = $bdd->query("SELECT * FROM equipes");
$reponse  = $bdd->query("SELECT * FROM equipes inner join NEWS on NEWS.Id_Equipes = equipes.Id_Equipes order by Id_News DESC");
?>
<table>
  <thead>
    <tr>
      <th>DATE DES MATCHS</th>
      <th>EQUIPES HBCK</th>
      <th>SCORE HBCK</th>
      <th>EQUIPES ADVERSES</th>
      <th>SCORE VISITEURS</th>
    </tr>
  </thead>
  <?php
  while ($donnees = $reponse->fetch()) {
    ?>
    <tr>
      <td><?php echo $donnees['Date_Match']; ?></td>
      <td><?php echo $donnees['Nom_Equipes']; ?></td>
      <td><?php echo $donnees['Score_HBCK']; ?></td>
      <td><?php echo $donnees['Equipes_Adverses']; ?></td>
      <td><?php echo $donnees['Score_Visiteurs']; ?></td>
      <td><a href="modifCompt.php?Id_News=<?php echo $donnees['Id_News'] . '&Date_Match=' . $donnees['Date_Match'] . '&Nom_Equipes=' . $donnees['Nom_Equipes'] . '&Score_HBCK=' . $donnees['Score_HBCK'] . '&Equipes_Adverses=' . $donnees['Equipes_Adverses'] . '&Score_Visiteurs=' . $donnees['Score_Visiteurs']; ?>" type="button" class="btn btn-warning">modifier</a></td>
      <td><a href="suppr_ComptAdmin.php?Id_News=<?php echo $donnees['Id_News']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
    </tr>
  <?php
}
?>
  <tbody>
  </tbody>
</table>
<form id="monform" name="form1" method="post" action="comptAdmin.php">
  <h3>INSERTION TABLEAU NEWS:</h3>
  <label>
    <input type="hidden" name="Id_News" />
  </label>
  NOM EQUIPES HBCK: <select name="Nom_Equipes">
    <?php
    while ($donnees1 = $reponse1->fetch()) {
      ?>
      <option value=" <?php echo $donnees1['Id_Equipes']; ?>">

        <?php echo $donnees1['Nom_Equipes']; ?>

      </option>
    <?php
  }
  ?>
  </select>
  <label>DATE DES MATCHS :
    <input type="text" name="Date_Match" />
  </label>
  <label>SCORE HBCK :
    <input type="text" name="Score_HBCK" />
  </label>
  <label>EQUIPES ADVERSES :
    <input type="text" name="Equipes_Adverses" />
  </label><br>
  <label>SCORE VISITEURS :
    <input type="text" name="Score_Visiteurs" />
  </label>
  <label>
    <input type="submit" name="bouton" value="Envoyer" />
  </label>
</form>
<?php
?>
<table>
  <thead>
    <tr>
      <th>HORAIRES D'ENTRAINEMENT</th>
      <th>DESIGNATION</th>
      <th>EQUIPES HBCK</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $reponse1  = $bdd->query("SELECT * FROM equipes");

    $reponse  = $bdd->query('SELECT * FROM club INNER JOIN Equipes on  club.Id_Equipes = equipes.Id_Equipes order by Id_Club ASC');
    while ($donnees = $reponse->fetch()) {
      ?>
      <tr>
        <td><?php echo $donnees['Horaires_Entrainement']; ?></td>
        <td><?php echo $donnees['Designation']; ?></td>
        <td><?php echo $donnees['Nom_Equipes']; ?></td>
        <td><a href="modifCompt.php?Id_Club=<?php echo $donnees['Id_Club'] . '&Horaires_Entrainement=' . $donnees['Horaires_Entrainement'] . '&Designation=' . $donnees['Designation'] . '&Nom_Equipes=' . $donnees['Nom_Equipes']; ?>" type="button" class="btn btn-warning">modifier</a></td>
        <td><a href="suppr_ComptAdmin.php?Id_Club=<?php echo $donnees['Id_Club']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
      </tr>
    <?php
  }
  ?>
  </tbody>
</table>
<?php
?>
<form name="form1" method="post" action="">
  <h3>INSERTION TABLEAU CLUB:</h3>
  <label>
    <input type="hidden" name="Id_Club" />
  </label>
  <label>HORAIRES D'ENTRAINEMENT :
    <input type="text" name="Horaires_Entrainement" />
  </label>
  <label>DESIGNATION :
    <input type="text" name="Designation" />
  </label>
  NOM EQUIPES HBCK: <select name="Equipes">
    <?php
    while ($donnees1 = $reponse1->fetch()) {
      ?>
      <option value=" <?php echo $donnees1['Id_Equipes']; ?>">
        <?php echo $donnees1['Nom_Equipes']; ?>
      </option>
    <?php
  }
  ?>
  </select>
  <label>
    <input type="submit" name="bouton" value="Envoyer" />
  </label>
</form>
<table>
  <thead>
    <tr>
      <th>NOM EQUIPES</th>
      <th>CHAMPIONNAT</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $reponse  = $bdd->query('SELECT * FROM equipes order by Id_Equipes ASC');
    while ($donnees = $reponse->fetch()) {
      ?>
      <tr>
        <td><?php echo $donnees['Nom_Equipes']; ?></td>
        <td><?php echo $donnees['Championnat']; ?></td>
        <td><a href="modifCompt.php?Id_Equipes=<?php echo $donnees['Id_Equipes'] . '&Nom_Equipes=' . $donnees['Nom_Equipes'] . '&Championnat=' . $donnees['Championnat']; ?>" type="button" class="btn btn-warning">modifier</a></td>
        <td><a href="suppr_ComptAdmin.php?Id_Equipes=<?php echo $donnees['Id_Equipes']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
      </tr>
    <?php
  }
  ?>
  </tbody>
</table>
<?php
?>
<form name="form1" method="post" action="comptAdmin.php">
  <h3>INSERTION TABLEAU EQUIPES:</h3>
  <label>
    <input type="hidden" name="Id_Equipes" />
  </label>
  <label>NOM DE L'QUIPE :
    <input type="text" name="Nom_Equipes" />
  </label>
  <label>CHAMPIONNAT :
    <input type="text" name="Championnat" />
  </label>
  <label>
    <input type="submit" name="bouton" value="Envoyer" />
  </label>
</form>


<form enctype="multipart/form-data" name="form1" method="post" action="ajout_images.php">
    <?php
if(isset($_GET['id_photo'])){
  $id_photo= $_GET['id_photo'];
  $bdd->exec("DELETE FROM carousel WHERE id_photo = '".$id_photo."'");
}
    $query ="SELECT * FROM carousel ORDER BY id_photo ASC; ";
?>
    <input type="file" name="urlimage" class="custom-file-input" accept=".jpg,.jpeg,.gif,.png"id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile04"></label>

 <br><button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Valider</button>
<table class="table" border="2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Photo</th>
      <th scope="col"></th>
   </tr>
  </thead>
    <tbody>   
   <?php
      $query ="SELECT * FROM carousel";
      $req = $bdd->query($query);
         while($row = $req->fetch()){
   ?>  
 <tr> 
  <td> <img width="100" height="100"src="sponsorts/<?php echo $row['urlimage'];?>"/> </td>
  <td><a role="button" class="btn btn-danger" href="compte.php?id_photo=<?php echo $row['id_photo'];?>"OnClick="return confirm('Voulez-vous vraiment supprimer ?');">Supprimer</a></td>
 </tr>
   <?php
     }
    $req->closeCursor();
   ?>
    </tbody>
</table>

</div>
</div>
</div>
</main>
<?php
include('end_page.php');
?>