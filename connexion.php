<main>
  <div class="container  FDNoirClair">
    <div class="row no-gutters ">
      <div class="col-sm-12 col-xl-12 FDNoirClair ">

        <form action="valide_connexion.php" method="post">
          <div class="row column log-in-form">
            <h4 class="text-center">Identifiez-vous</h4>
            <label>Identifiant
              <input type="text" placeholder="Votre nom" name="Email" value="<?php if (isset($_POST['Email'])) echo htmlentities(trim($_POST['Email'])); ?>">
            </label>
            <label>Mot de passe
              <input type="password" placeholder="Password" name="Mot_De_Passe" value="<?php if (isset($_POST['Mot_De_Passe'])) echo htmlentities(trim($_POST['Mot_De_Passe'])); ?>">
            </label>
            <p><input type="submit" class="button expanded" name="connexion" value="Connexion" style="border-radius: 8px;"></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
include('end_page.php');
?>