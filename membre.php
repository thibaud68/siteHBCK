<?php
include_once('header.php');
?>
<main>   
    <!-- Presentation -->
    <div class="container">
        <div class="row">
            <div>
                <form action="valide_connexion.php" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Identifiant" name="Email" value="<?php if (isset($_POST['Email'])) echo htmlentities(trim($_POST['Email'])); ?>">
                        <input type="password" placeholder="Mot de passe" name="Mot_De_Passe" value="<?php if (isset($_POST['Mot_De_Passe'])) echo htmlentities(trim($_POST['Mot_De_Passe'])); ?>">
                        <input type="submit" class="butn btn-success" name="connexion" value="Connexion" style="border-radius: 8px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include_once('end_page.php');
?>