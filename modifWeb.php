<?php
include_once('connectbdd.php');
include_once('header.php');

?>
<main>
  <div class="container  FDNoirClair">
    <div class="row no-gutters ">
      <div class="col-sm-12 col-xl-12 FDNoirClair ">

        <form id="lastCase" action="Valid_modifWeb.php" method="post">
          <div class="newsletter">
            <h6>Modifier le tableau</h6>
            <input class="input-group-field" name="Id_Partenaires" type='hidden' value="<?php echo $_GET['Id_Partenaires']; ?>">
            NOM PARTENAIRES:
            <input class="input-group-field" name="Nom_Partenaires" type="text" value="<?php echo $_GET['Nom_Partenaires']; ?>">
            ADRESSE PARTENAIRES:
            <input type="text" name="Adresse_Partenaires" value="<?php echo $_GET['Adresse_Partenaires']; ?>"><br>

            NUMERO PARTENAIRES:
            <input type="text" name="Numero_Partenaires" value="<?php echo $_GET['Numero_Partenaires']; ?>">

            LOGOS PARTENAIRES:
            <input type="text" name="Logos_Partenaires" value="<?php echo $_GET['Logos_Partenaires']; ?>"><br>
          </div>
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
      <button type="submit" href="comptWeb.php" class="btn btn-primary btn-sm"> Retour</a></button>
      </form>
      <div class="baseline">
        <form id="lastCase" action="Valid_modifWeb.php" method="post">
          <div class="newsletter">
            <h6>Modifier le tableau</h6>
            <input class="input-group-field" name="Id_Media" type='hidden' value="<?php echo $_GET['Id_Media']; ?>">
            PHOTOS:
            <input class="input-group-field" name="Photo_Media" type="text" value="<?php echo $_GET['Photo_Media']; ?>">
            VIDEOS:
            <input type="text" name="Video_Media" value="<?php echo $_GET['Video_Media']; ?>"><br>
            ARTICLE DE PRESSE:
            <input type="text" name="Articles_Presse_Media" value="<?php echo $_GET['Articles_Presse_Media']; ?>">
            <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
            <button type="submit" href="comptWeb.php" class="btn btn-primary btn-sm"> Retour</a></button>
        </form>
        <?php
        $reponse  = $bdd->query("SELECT * FROM Equipes");

        ?>
        <form id="lastCase" action="Valid_modifWeb.php" method="post">
          <div class="newsletter">
            <h6>Modifier le tableau</h6>
            <input class="input-group-field" name="Id_News" type='hidden' value="<?php echo $_GET['Id_News']; ?>">
            DATE MATCH:
            <input class="input-group-field" name="Date_Match" type="text" value="<?php echo $_GET['Date_Match']; ?>">
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
          </div>
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
      <button type="submit" href="comptWeb.php" class="btn btn-primary btn-sm"> Retour</a></button>
      </form>
      <?php
      $reponse  = $bdd->query("SELECT * FROM Equipes");
      ?>
      <div class="baseline">
        <form id="lastCase" action="Valid_modifWeb.php" method="post">
          <div class="newsletter">
            <h6>Modifier le tableau</h6>
            <input class="input-group-field" name="Id_Club" type='hidden' value="<?php echo $_GET['Id_Club']; ?>">
            HORAIRES D'ENTRAINEMENT:
            <input class="input-group-field" name="Horaires_Entrainement" type="text" value="<?php echo $_GET['Horaires_Entrainement']; ?>">
            DESIGNATION:
            <input class="input-group-field" name="Designation" type="text" value="<?php echo $_GET['Designation']; ?>">
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
            <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
            <button type="submit" href="comptWeb.php" class="btn btn-primary btn-sm"> Retour</a></button>
        </form>
        <form action="Valid_modifWeb.php" method="post">
          <h6>Modifier le tableau</h6>
          <input name="Id_Equipes" type='hidden' value="<?php echo $_GET['Id_Equipes']; ?>">
          NOM DES EQUIPES:
          <input name="Nom_Equipes" type="text" value="<?php echo $_GET['Nom_Equipes']; ?>">
          CHAMPIONNAT:
          <input type="text" name="Championnat" value="<?php echo $_GET['Championnat']; ?>"><br>
          <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
          <button type="submit" href="comptWeb.php" class="btn btn-primary btn-sm"> Retour</a></button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
include('end_page.php');
?>