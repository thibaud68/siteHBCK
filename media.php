<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php');
?>
<main>
 
    <!-- Media--->
 <div class="container  FDNoirClair">
    <div class="row no-gutters ">
            <!-- 1 eme Tableau -->
        <div class="col-sm-12 col-xl-12FDNoirClair testeBorder">
                <?php
                //On creer une variable avec une requete pour selectionner les videos dans l'ordre ascendant
                $query1 = "SELECT Video_Media FROM mediatheque order by Id_media asc limit 1";
                // on creer une variable req dans laquelle on met une fonction query pour recuperer les donnees avec une boucle
                $req1 = $bdd->query($query1);
                while ($row1 = $req1->fetch()) {
                        ?>
                    
                            <video id="tailleMax" src="picture/<?php echo $row1['Video_Media']; ?>" controls></video>
         </div>
                        <?php
                    }
                    ?>
                   
                         <?php
                    //On creer une variable avec une requete pour selectionner les donnees dans l'ordre ascendant dans la limite de 2
                    $query2 = "SELECT Articles_Presse_Media FROM mediatheque order by id_media asc limit 2";
                    $req2 = $bdd->query($query2);
                    while ($row = $req2->fetch()) {
                        ?>
        
                        <?php
                }
                        ?>
                         <?php
                    $query = "SELECT Photo_Media FROM mediatheque ";
                    $req = $bdd->query($query);
                    while ($row = $req->fetch()) {
                        ?>
         <div class="col-sm-12 col-xl-6 FDNoirClair testeBorder ">
                            <img id="tailleMax" src="picture/<?php echo $row['Photo_Media']; ?>" />
        </div>
                        <?php
                }
                        ?>
         
    </div>
</div>
</main>
<?php
include('end_page.php');
?>