<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php');
?>
<main>
    <!-- sponsors flexbox--->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-12 FDNoirClair space ">


            </div>
        </div>
    </div>

    <div class="container  FDNoirClair TexteArticle ">
        <div class="row">
            <div class="col-sm-12 col-xl-12 Marge_bas">
                <h4> Nos partenaires</h4>
                <?php
                $query = "SELECT * FROM partenaires ORDER BY Id_Partenaires ASC; ";
                $req = $bdd->query($query);
                while ($row = $req->fetch()) {
                    ?> <div class=" Marge_bas FDJaune">
                    <div class="imgdroite Marge_bas">
                        <a href="<?php echo $row['Url_Sponsors']; ?>">
                            <img class="img-fluid img-thumbnail" src="picture/<?php echo $row['Logos_Partenaires']; ?>">
                        </a>
                    </div>
                   
                        <h4><?php echo $row['Nom_Partenaires']; ?></h4>
                        <p><?php echo $row['Adresse_Partenaires']; ?></p>
                        <p> <?php echo $row['Numero_Partenaires']; ?></p>
                    </div>
                <?php

            }
            $req->closeCursor();
            ?>
            </div>
        </div>
    </div>
</main>
<?php
include_once('end_page.php');
?>