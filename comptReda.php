<?php
include_once('connectbdd.php');
include_once('header.php');
//session_start();                                                                                                                                        
if (
  isset($_POST['Photo_Media']) &&
  isset($_POST['Video_Media']) &&
  isset($_POST['Articles_Presse_Media'])
) {
  $bdd->exec("INSERT INTO mediatheque VALUES(default,'" . $_POST['Photo_Media'] . "','" . $_POST['Video_Media'] . "','" . $_POST['Articles_Presse_Media'] . "');"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptReda.php'); //on rafraichit la page
}
if (
  isset($_POST['Date_Match']) /*&& !empty($_POST['Date_Match'])*/&&
  isset($_POST['Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
  isset($_POST['Score_HBCK']) /*&& !empty($_POST['Score_HBCK'])*/&&
  isset($_POST['Equipes_Adverses']) /*&& !empty($_POST['Equipes_Adverses'])*/&&
  isset($_POST['Score_Visiteurs'])
) {
  $bdd->exec("INSERT INTO news VALUES(default,'" . $_POST['Date_Match'] . "'," . $_POST['Equipes'] . "," . $_POST['Score_HBCK'] . ",'" . $_POST['Equipes_Adverses'] . "'," . $_POST['Score_Visiteurs'] . ");"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptReda.php'); //on rafraichit la page
  // echo "INSERT INTO news VALUES(default,'".$_POST['Date_Match']."',".$_POST['Nom_Equipes'].",".$_POST['Score_HBCK'].",'".$_POST['Equipes_Adverses']."',".$_POST['Score_Visiteurs'].")";
}
if (
  isset($_POST['Date_Rencontre']) /*&& !empty($_POST['Date_Match'])*/&&
  isset($_POST['Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
  isset($_POST['Equipe_Adverse']) /*&& !empty($_POST['Score_HBCK'])*/&&
  isset($_POST['Horaire'])
) {
  $bdd->exec("INSERT INTO calendrier VALUES(default," . $_POST['Equipes'] . ",'" . $_POST['Equipe_Adverse'] . "','" . $_POST['Date_Rencontre'] . "','" . $_POST['Horaire'] . "');"); //on insert dans le tableau grace au formulaire qui fait la requete a une base de donnees 
  header('refresh: 0; URL=comptReda.php'); //on rafraichit la page
 //  echo "INSERT INTO calendrier VALUES(default," . $_POST['Date_Rencontre'] . "," . $_POST['Equipes'] . ",'" . $_POST['Equipe_Adverse'] . "'," . $_POST['Horaire'] . ");";
}

?>
<main>
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
              <th>PHOTO</th>
              <th>VIDEO</th>
              <th>ARTICLE DE PRESSE</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $reponse  = $bdd->query('SELECT * FROM mediatheque order by Id_Media ASC');
            while ($donnees = $reponse->fetch()) {
              ?>
              <tr>
                <td><?php echo $donnees['Photo_Media']; ?></td>
                <td><?php echo $donnees['Video_Media']; ?></td>
                <td><?php echo $donnees['Articles_Presse_Media']; ?></td>
                <td><a href="modifReda.php?Id_Media=<?php echo $donnees['Id_Media'] . '&Photo_Media=' . $donnees['Photo_Media'] . '&Video_Media=' . $donnees['Video_Media'] . '&Articles_Presse_Media=' . $donnees['Articles_Presse_Media']; ?>" type="button" class="btn btn-warning">modifier</a></td>
                <td><a href="suppr_Reda.php?Id_Media=<?php echo $donnees['Id_Media']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
              </tr>
            <?php
          }
          ?>
          </tbody>
        </table>
        <form id="monform" name="form1" method="post" action="">
          <h3>INSERTION TABLEAU mEDIATHEQUES:</h3>
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
        $reponse  = $bdd->query("SELECT * FROM equipes inner join news on news.Id_Equipes = equipes.Id_Equipes order by Id_News DESC");
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
              <td><a href="modifReda.php?Id_News=<?php echo $donnees['Id_News'] . '&Date_Match=' . $donnees['Date_Match'] . '&Nom_Equipes=' . $donnees['Nom_Equipes'] . '&Score_HBCK=' . $donnees['Score_HBCK'] . '&Equipes_Adverses=' . $donnees['Equipes_Adverses'] . '&Score_Visiteurs=' . $donnees['Score_Visiteurs']; ?>" type="button" class="btn btn-warning">modifier</a></td>
              <td><a href="suppr_Reda.php?Id_News=<?php echo $donnees['Id_News']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
            </tr>
          <?php
        }
        ?>
          <tbody>
          </tbody>
        </table>
        <form id="monform" name="form1" method="post" action="">
          <h3>INSERTION TABLEAU NEWS:</h3>
          <label>
            <input type="hidden" name="Id_News" />
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
          <label>DATE DES MATCHS :
            <input type="Date" name="Date_Match" />
          </label>
          <label>SCORE HBCK :
            <input type="Number" name="Score_HBCK" />
          </label>
          <label>EQUIPES ADVERSES :
            <input type="text" name="Equipes_Adverses" />
          </label><br>
          <label>SCORE VISITEURS :
            <input type="Number" name="Score_Visiteurs" />
          </label>
          <label>
            <input type="submit" name="bouton" value="Envoyer" />
          </label>
        </form>
                <?php
        $reponse1  = $bdd->query("SELECT * FROM equipes");
        $reponse  = $bdd->query("SELECT * FROM equipes inner join calendrier on calendrier.Id_Equipes = equipes.Id_Equipes order by Id_Rencontres DESC");
        ?>
        <table>
          <thead>
            <tr>
              <th>DATE DES MATCHS</th>
              <th>EQUIPES HBCK</th>
              <th>EQUIPES ADVERSES</th>
              <th>HORAIRE</th>
            </tr>
          </thead>
          <?php
          while ($donnees = $reponse->fetch()) {
            ?>
            <tr>
              <td><?php echo $donnees['Date_Rencontre']; ?></td>
              <td><?php echo $donnees['Nom_Equipes']; ?></td>
              <td><?php echo $donnees['Equipe_Adverse']; ?></td>
              <td><?php echo $donnees['Horaire']; ?></td>
              <td><a href="modifReda.php?Id_Rencontres=<?php echo $donnees['Id_Rencontres'] . '&Date_Rencontre=' . $donnees['Date_Rencontre'] . '&Nom_Equipes=' . $donnees['Nom_Equipes'] . '&Equipe_Adverse=' . $donnees['Equipe_Adverse'] . '&Horaire=' . $donnees['Horaire']; ?>" type="button" class="btn btn-warning">modifier</a></td>
              <td><a href="suppr_Reda.php?Id_Rencontres=<?php echo $donnees['Id_Rencontres']; ?>" type="button" class="btn btn-danger">supprimer</a></td>
            </tr>
          <?php
        }
        ?>
          <tbody>
          </tbody>
        </table>
        <form id="monform" name="form1" method="post" action="">
          <h3>INSERTION TABLEAU NEWS:</h3>
          <label>
            <input type="hidden" name="Id_Rencontres" />
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
          <label>DATE DES MATCHS :
            <input type="date" name="Date_Rencontre" />
          </label>
           <label>EQUIPES ADVERSES :
            <input type="text" name="Equipe_Adverse" />
          </label><br>
          <label>HORAIRE :
            <input type="time" name="Horaire" />
          </label>
          <label>
            <input type="submit" name="bouton" value="Envoyer" />
          </label>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
include('end_page.php');
?>