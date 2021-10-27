<?php
include_once('connectbdd.php');
include_once('header.php');

?>
<main>
<div class="container  FDNoirClair">
  <div class="row no-gutters ">
    <div class="col-sm-12 col-xl-12 FDNoirClair ">

  <form id="lastCase" action="Valid_modifReda.php" method="post">
    <h6>Modifier le tableau</h6>
    <input class="input-group-field" name="Id_Media" type='hidden' value="<?php echo $_GET['Id_Media']; ?>">
    PHOTOS:
    <input class="input-group-field" name="Photo_Media" type="text" value="<?php echo $_GET['Photo_Media']; ?>">
    VIDEOS:
    <input type="text" name="Video_Media" value="<?php echo $_GET['Video_Media']; ?>"><br>
    ARTICLE DE PRESSE:
    <input type="text" name="Articles_Presse_Media" value="<?php echo $_GET['Articles_Presse_Media']; ?>">
    </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
    <button type="submit" href="comptReda.php" class="btn btn-primary btn-sm"> Retour</a></button>
  </form>
  <?php
  $reponse  = $bdd->query("SELECT * FROM Equipes");
  ?>
  <form id="lastCase" action="Valid_modifReda.php" method="post">
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
    <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
    <button type="submit" href="comptReda.php" class="btn btn-primary btn-sm"> Retour</a></button>
  </form>
   <?php
  $reponse  = $bdd->query("SELECT * FROM Equipes");
  ?>
  <form id="lastCase" action="Valid_modifReda.php" method="post">
    <h6>Modifier le tableau</h6>
    <input class="input-group-field" name="Id_Rencontres" type='hidden' value="<?php echo $_GET['Id_Rencontres']; ?>">
    DATE RENCONTRES:
    <input class="input-group-field" name="Date_Rencontre" type="date" value="<?php echo $_GET['Date_Rencontre']; ?>">
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

    EQUIPES ADVERSES:
    <input type="text" name="Equipe_Adverse" value="<?php echo $_GET['Equipe_Adverse']; ?>">
    HORAIRE:
    <input type="time" name="Horaire" value="<?php echo $_GET['Horaire']; ?>">
    <button type="submit" class="btn btn-primary btn-sm">Envoyer</a></button>
    <button type="submit" href="comptReda.php" class="btn btn-primary btn-sm"> Retour</a></button>
  </form>


  </div>
  </div>
  </div>
</main>
<?php
include('end_page.php');
?>