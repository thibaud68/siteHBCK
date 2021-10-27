<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php'); 
?>
<main>
    <!-- Presentation -->
    <div class="container  FDNoirClair">
        <div class="row no-gutters ">
        <div class="col-sm-12 col-xl-6 FDNoirClair ">
                <!--slider -->
                <div id="carouselExampleIndicators Imgsize " class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <!-- Manon Houette et ses partenaire s’envolent vers la demi-finale de l’Euro. LOIC VENANCE / AFP-->
      <img class="d-block w-100" src="picture\pack\hand_01_cr.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
        <!-- Euro 2018, les Bleues coiffent la double couronne du handball -->
      <img class="d-block w-100" src="picture\pack\hand_02_cr.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="picture\pack\hand_03_cr.jpg" alt="Third slide">
      </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="legende">
                        <p>Equipe de France, en coupe du monde 2016. et championne de cette Mondial</p>
                    </div>
</div>
<div class="CadreInterne">
<span ><img class="img-fluid" src="picture/hbFeminin.png" alt="logo texte"></span>
        <span class="space" ><img  src="picture/logo80.png" alt="logo insigne">
        <p class="TexteJustif">HBCK est un club de Handball exclusivement féminin situé à Kingersheim.
                            Le club est axé prioritairement sur la formation des jeunes.</p></span>
                            
</div>
<!--Fin slider -->
            </div>
            <!-- 1 eme Tableau -->
            <div class="col-sm-12 col-xl-6 FDNoirClair ">
                <?php
                $query = "SELECT * FROM equipes inner join news on news.Id_Equipes = equipes.Id_Equipes ORDER BY Id_News DESC LIMIT 3 ; ";
                $req = $bdd->query($query);
                while ($row = $req->fetch()) {
                    $FR_Date = date("d-m-Y", strtotime($row['Date_Match']))
                    ?>
                <table  border=2 >
                    <thead>
                        <tr>
                            <th colspan="2">
                                <h2><?php echo 'Match du ' . $FR_Date; ?></h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo 'HBCK' . $row['Nom_Equipes']; ?></td>
                            <td><?php echo $row['Equipes_Adverses']; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $row['Score_HBCK']; ?></td>
                            <td><?php echo $row['Score_Visiteurs']; ?></td>
                        </tr>
                    </tbody>
                    <?php

                }
                $req->closeCursor();
                ?>
                </table>
                <div class="FlurssInfo">
                     <marquee direction="up"height="450"scrollamount="2" >
                        <?php
                   // output RSS feed to HTML
                   output_rss_feed('https://www.lequipe.fr/rss/actu_rss_Hand.xml', 10, true, true, 20);
                    ?>
                    </marquee>
                </div>
            </div>
            <!-- Fin 1 eme Tableau -->
    
            <div class="col-sm-12 col-xl-6">
                
                    <?php
                    $query = "SELECT * FROM equipes inner join news on news.Id_Equipes = equipes.Id_Equipes ORDER BY Id_News ASC; ";
                    $req = $bdd->query($query);
                    while ($row = $req->fetch()) {
                        $FR_Date = date("d-m-Y", strtotime($row['Date_Match']));
                        ?>
                    <table border=2>
                        <thead>
                            <tr>
                                <th colspan="2">
                                    <h2><?php echo 'Match du ' . $FR_Date; ?></h2>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo 'HBCK' . $row['Nom_Equipes']; ?></td>
                                <td><?php echo $row['Equipes_Adverses']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['Score_HBCK']; ?></td>
                                <td><?php echo $row['Score_Visiteurs']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php

                }
                $req->closeCursor();
                ?>
                     <div class="FlurssInfo">
                     <marquee direction="up"height="550"scrollamount="2" >
                        <?php
                       // output RSS feed to HTML
                       output_rss_feed('https://infos-handbal.webnode.fr/rss/all.xml', 10, true, true, 20);
                        ?></marquee>
                    </div>
            </div>
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
<div ><img class="img-fluid mx-auto d-block " src="picture/HBCK Photos SF1 2012 0001.jpg" alt="hbck equipe fr handball"></div>
<!--Fin slider -->
            </div>
        </div><!-- row-->
    </div><!-- container-->
</main>
<?php
include('end_page.php');
?> 