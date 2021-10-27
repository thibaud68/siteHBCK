<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php'); 
?>
<main>
    <div class="container FDNoirClair">
        <div class="row no-gutters">
            <!-- Presentation -->
            <div class="col-sm-12 col-xl-6 FDNoirClair">
                <!--slider -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Manon Houette et ses partenaire s’envolent vers la demi-finale de l’Euro. LOIC VENANCE / AFP-->
                            <img class="d-block w-100" src="picture\pack\le-hbck-assez-logiquement_cr.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <!-- Euro 2018, les Bleues coiffent la double couronne du handball -->
                            <img class="d-block w-100" src="picture\pack\le-hbck-doit-deja-reagir-1413297106_cr.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="picture\pack\le-hbck-s-est-apaise-1553887856_cr.jpg" alt="Third slide">
                        </div>
                    </div>
                    <div class="legende">
                        <p>HBCK est un club de Handball exclusivement féminin situé à Kingersheim.
                            Le club est axé prioritairement sur la formation des jeunes.</p>
                    </div>
                </div>
            </div>
            <!--Fin slider -->



            <!-- Equipe --->
            <div class="col-sm-12 col-xl-6  FDJaune ">
                <table border=2 >
                        <tr>
                            <th colspan="2">
                                <h3>Equipes et Horaires</h3>
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $query = "SELECT * FROM equipes inner join club on 
                        club.Id_Equipes = equipes.Id_Equipes ORDER BY Id_Club ASC; ";
                    $req = $bdd->query($query);
                    while ($row = $req->fetch()) {
                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $row['Nom_Equipes']; ?></td>
                            <td><?php echo $row['Horaires_Entrainement']; ?></td>
                        </tr>
                    </tbody>
                    <?php

                }
                $req->closeCursor();
                ?>
                </table>

            </div>
            <div class="col-sm-12 col-xl-6 TexteArticlep BorderP FDbleu ">
                <h4>Tarifs</h4>
                <p>Le HBC Kingersheim a mis en place un système
                    d’abonnement pour la saison 2018 - 2019 à un prix plus que compétitif.</p>
                <p>Les tarifs sont :</p>
                <p>- Pour une carte saisonnière individuelle : 10 EUR</p>
                <p>- Pour une carte familiale saisonnière : 25 EUR</p>
            </div>
            <!--Adresse-->
            <div class="col-sm-12 col-xl-6 TexteArticle  BorderP FDbleu">
                    <h4>Adresse</h4>
                    <p>HBC KINGERSHEIM</p>
                    <p>Espace Coubertin</p>
                    <p>Rue Pierre de Coubertin</p>
                    <p>BP 44</p>
                    <p>68261 KINGERSHEIM</p>
            </div>
            <!----- Le plan---->
            <div class="col-sm-12 col-xl-6">
                <iframe id="Carteiframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2680.7400118100672!2d7.326193815601281!3d47.786489179197034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768! 4f13.1!3m3!1m2!1s0x47919cec772edaaf%3A0x84a941ddd3d0ce47!2sSalle+Polyvalente+%3A+Le+Hangar!5e0!3m2!1sfr!2sfr!4v1555492989997!5m2!1sfr!2sfr" width="600" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- image -->
 <!--slider -->
 <div class="col-sm-12 col-xl-6 divBackground_black">
 <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Manon Houette et ses partenaire s’envolent vers la demi-finale de l’Euro. LOIC VENANCE / AFP-->
                            <img class="d-block w-100" src="picture\pack\le-hbck-assez-logiquement_cr.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <!-- Euro 2018, les Bleues coiffent la double couronne du handball -->
                            <img class="d-block w-100" src="picture\pack\le-hbck-doit-deja-reagir-1413297106_cr.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="picture\pack\le-hbck-s-est-apaise-1553887856_cr.jpg" alt="Third slide">
                        </div>
                    </div>
                    <div class="legendeFixe">
                        <p>"Le sport va chercher la peur pour la dominer,
                            la fatigue pour en triompher, la difficulté pour la vaincre."</p>
                        <cite>Pierre de COUBERTIN</cite>
                    </div>
                </div>
            </div>
            <!--Fin slider -->
            <!-- div global -->
        </div>
    </div>
</main>
<?php
include_once('end_page.php');
?> 