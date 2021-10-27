<?php
include_once('connectbdd.php');
include_once('header.php');

?>
<main>
  <div class="container  FDNoirClair">
    <div class="row no-gutters ">
      <div class="col-sm-12 col-xl-12 FDNoirClair ">

        <form action="Valid_modifCompt.php" method="post">
          <h6>Modifier le tableau</h6>
          <input name="Id_Utilisateurs" type='hidden' value="<?php echo $_GET['Id_Utilisateurs']; ?>">
          NOM:
          <input name="Nom" type="text" value="<?php echo $_GET['Nom']; ?>">
          PRENOM:
          <input type="text" name="Prenom" value="<?php echo $_GET['Prenom']; ?>"><br>
          EMAIL:
          <input type="text" name="Email" value="<?php echo $_GET['Email']; ?>">
          MOT DE PASSE:
          <input type="text" name="Mot_De_Passe" value="<?php echo $_GET['Mot_De_Passe']; ?>"><br>
          ADMINISTRATEUR:
          <input type="number" name="Administrateur" value="<?php echo $_GET['Administrateur']; ?>">
          WEBMASTER:
          <input type="number" name="Webmaster" value="<?php echo $_GET['Webmaster']; ?>">
          REDACTEUR:
          <input type="number" name="Redacteur" value="<?php echo $_GET['Redacteur']; ?>">
          <button type="submit">Envoyer</a></button>
          <button type="submit" href="comptAdmin.php"> Retour</a></button>
        </form>
        <h6>Modifier le tableau</h6>
        <input name="Id_Partenaires" type='hidden' value="<?php echo $_GET['Id_Partenaires']; ?>">
        NOM PARTENAIRES:
        <input name="Nom_Partenaires" type="text" value="<?php echo $_GET['Nom_Partenaires']; ?>">
        ADRESSE PARTENAIRES:
        <input type="text" name="Adresse_Partenaires" value="<?php echo $_GET['Adresse_Partenaires']; ?>"><br>
        NUMERO PARTENAIRES:
        <input type="text" name="Numero_Partenaires" value="<?php echo $_GET['Numero_Partenaires']; ?>">
        LOGOS PARTENAIRES:
        <input type="text" name="Logos_Partenaires" value="<?php echo $_GET['Logos_Partenaires']; ?>"><br>
        <button type="submit">Envoyer</a></button>
        <button type="submit" href="comptAdmin.php"> Retour</a></button>
        </form>
        <form id="lastCase" action="Valid_modifCompt.php" method="post">
          <h6>Modifier le tableau</h6>
          <input name="Id_Media" type='hidden' value="<?php echo $_GET['Id_Media']; ?>">
          PHOTOS:
          <input name="Photo_Media" type="text" value="<?php echo $_GET['Photo_Media']; ?>">
          VIDEOS:
          <input type="text" name="Video_Media" value="<?php echo $_GET['Video_Media']; ?>"><br>
          ARTICLE DE PRESSE:
          <input type="text" name="Articles_Presse_Media" value="<?php echo $_GET['Articles_Presse_Media']; ?>">
          <button type="submit">Envoyer</a></button>
          <button type="submit" href="comptAdmin.php"> Retour</a></button>
        </form>
        <?php
        $reponse  = $bdd->query("SELECT * FROM Equipes");
        ?>
        <form id="lastCase" action="Valid_modifCompt.php" method="post">
          <h6>Modifier le tableau</h6>
          <input name="Id_News" type='hidden' value="<?php echo $_GET['Id_News']; ?>">
          DATE MATCH:
          <input name="Date_Match" type="text" value="<?php echo $_GET['Date_Match']; ?>">

          EQUIPES HBCK: <select name="Nom_Equipes">
            <?php
            while ($donnees = $reponse->fetch()) {
              if ($_GET['Nom_Equipes'] == $donnees['Nom_Equipes']) {
                ?>
                <option selected="selected" value=" <?php echo $donnees['Id_Equipes']; ?>"><?php echo $_GET['Nom_Equipes']; ?></option>
              <?php
            } else {
              ?>
                <option value=" <?php echo $donnees['Id_Equipes']; ?>"><?php echo $donnees['Nom_Equipes']; ?></option>
              <?php
            }
            ?>

            <?php
          }
          ?>
          </select>
          SCORE HBCK:
          <input type="text" name="Score_HBCK" value="<?php echo $_GET['Score_HBCK']; ?>"><br>
          EQUIPES ADVERSES:
          <input type="text" name="Equipes_Adverses" value="<?php echo $_GET['Equipes_Adverses']; ?>">
          SCORE ADVERSES:
          <input type="text" name="Score_Visiteurs" value="<?php echo $_GET['Score_Visiteurs']; ?>">
          <button type="submit">Envoyer</a></button>
          <button type="submit" href="comptAdmin.php"> Retour</a></button>
        </form>
        <?php
        $reponse  = $bdd->query("SELECT * FROM Equipes");
        ?>
        <form id="lastCase" action="Valid_modifCompt.php" method="post">
          <h6>Modifier le tableau</h6>
          <input name="Id_Club" type='hidden' value="<?php echo $_GET['Id_Club']; ?>">
          HORAIRES D'ENTRAINEMENT:
          <input name="Horaires_Entrainement" type="text" value="<?php echo $_GET['Horaires_Entrainement']; ?>">
          DESIGNATION:
          <input name="Designation" type="text" value="<?php echo $_GET['Designation']; ?>">
          EQUIPES HBCK: <select name="Nom_Equipes">
            <?php
            while ($donnees = $reponse->fetch()) {
              if ($_GET['Nom_Equipes'] == $donnees['Nom_Equipes']) {
                ?>
                <option selected="selected" value=" <?php echo $donnees['Id_Equipes']; ?>"><?php echo $_GET['Nom_Equipes']; ?></option>
              <?php
            } else {
              ?>
                <option value=" <?php echo $donnees['Id_Equipes']; ?>"><?php echo $donnees['Nom_Equipes']; ?></option>
              <?php
            }
            ?>

            <?php
          }
          ?>
          </select>
          <button type="submit">Envoyer</a></button>
          <button type="submit" href="comptAdmin.php"> Retour</a></button>
        </form>
        <div>
          <form action="Valid_modifCompt.php" method="post">
            <h6>Modifier le tableau</h6>
            <input name="Id_Equipes" type='hidden' value="<?php echo $_GET['Id_Equipes']; ?>">
            NOM DES EQUIPES:
            <input name="Nom_Equipes" type="text" value="<?php echo $_GET['Nom_Equipes']; ?>">
            CHAMPIONNAT:
            <input type="text" name="Championnat" value="<?php echo $_GET['Championnat']; ?>"><br>
            <button type="submit">Envoyer</a></button>
            <button type="submit" href="comptAdmin.php"> Retour</a></button>
          </form>
        </div>
      </div>
    </div>
</main>
<?php
include('end_page.php');
?>