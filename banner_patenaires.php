<footer>
    <!-- sponsors flexbox--->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-12 FDNoir space ">

                <?php
		$query = "SELECT * FROM partenaires ORDER BY Id_Partenaires ASC; ";
		$req = $bdd->query($query);
		while ($row = $req->fetch()) {
			?>
                <p><a href="<?php echo $row['Url_Sponsors']; ?>"> <img class="ht" src="picture/<?php echo $row['Logos_Partenaires']; ?>"></a></p>
                <?php

	}
	$req->closeCursor();
    ?>
 
</div>
        </div>
    </div>
</footer> 