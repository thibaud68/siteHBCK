<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php');
?>
<main>
  <!-- sponsors flexbox--->
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xl-12 FDNoirClair space ">


      </div>
    </div>
  </div>
  <main>
    <div class="space">
      <img src="picture/logo.png" alt="logo club">
    </div>
    <!-- Presentation -->
    <div class="container">
      <div class="row">
        <div class="space  TexteArticle ">

          <div>
            Certificat medical
            <a href="document\HBCK 1819  Certificat medical.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            <div>
              Demande licence
              <a href="document\HBCK 1819  Demande licence.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            </div>
            <div>
              Engagement licence
              <a href="document\HBCK 1819  Engagement licence.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            </div>
            <div>
              Questionnaire santé
              <a href="document\HBCK 1819  Questionnaire sante.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            </div>
            <div>
            Règlement intérieur
              <a href="document\HBCK 1819  Reglement interieur.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            </div>
            <div>
              Autorisation parentale
              <a href="document\HBCK 1819 Autorisation parentale.pdf" title="Pdf">Telechargement ici(.pdf)</a>
            </div>

          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xl-12">
            <span class="TITREJaune ">Pour nous contacter!</span>
            <!-- formulaire de contact -->
            <form method="POST" action="contact.php">
              <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="name" name="Nom" class="form-control" id="Nom">
              </div>
              <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="name" name="Prenom" class="form-control" id="Prenom"required>
              </div>
              <div class="form-group">
                <label for="Email">Email</label>
                <input type="Email" name="Email" class="form-control" id="Email"required>
              </div>
              <div class="form-group">
                <label for= >Message</label>
                <textarea class="form-control" name="Message" id="Message" rows="3" required></textarea>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" name="mailform" class="btn btn-primary">Envoyez</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

  </main>
  <?php
  //on vérifie si le champs existe

  if (isset($_POST['Message'])) {

    $entete  = 'MIME-Version: 1.0' . "\r\n";
    // Envoie du message en html
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $entete .= 'From: ' . $_POST['Email'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact de hbck.fr</h1> 
        <p><b>Nom : </b>' . $_POST['Nom'] . '<br>
        <b>Prenom : </b>' . $_POST['Prenom'] . '<br>
        <b>Email : </b>' . $_POST['Email'] . '<br>
        <b>Message : </b>' . $_POST['Message'] . '</p>'; //on attribue une variable à $_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Message']

    $retour = mail('khecmensah@outlook.fr', 'Envoi depuis page Contact', $message, $entete);
    if ($retour) {
      echo '<p>Votre message a bien été envoyé.</p>';
    }
  }
  ?>
</main>
<?php
include_once('end_page.php');
?>