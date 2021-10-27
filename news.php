<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php'); 
?>
<main>
	<div class="container FDNoirClair">
		<div class="row">
			<div class="col-sm-12 col-xl-12 TexteArticle">
			<div>
				<?php
				$query = "SELECT * FROM equipes inner join news on news.Id_Equipes = equipes.Id_Equipes ORDER BY Id_News ASC; ";
				$req = $bdd->query($query);
				while ($row = $req->fetch()) {
					$FR_Date = date("d-m-y", strtotime($row['Date_Match']));
					?>
					<table  border=2 >
						<thead>
							<tr>
								<th colspan="2">
									<h2><?php echo 'Match du '.$FR_Date; ?></h2>
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
					<br>
				<?php
			}
			$req->closeCursor();
			?>
			<div class="FlurssInfo">
			<?php
                        // output RSS feed to HTML
                        output_rss_feed('https://www.lequipe.fr/rss/actu_rss_Hand.xml', 20, true, true, 200);
			?>
			</div>
				</div>
			</div>
		</div>
	</div>
		
</main>
<?php
include_once('end_page.php');
?>