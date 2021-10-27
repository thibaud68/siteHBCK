<?php
include_once('connectbdd.php');
include_once('FluxRSS.php');
include_once('header.php'); 
?>
<main>
	<div class="container FDNoirClair ">
		<div class="row">
			<div class="col-sm-12 col-xl-12 TexteArticle">
				<div>
					<table>
						<thead>
							<tr>
								<th colspan="2">
									<h2>Equipes Championnat</h2>
								</th>
							</tr>
						</thead>
						<?php
						$query = "SELECT * FROM equipes  ORDER BY Id_Equipes ASC; ";
						$req = $bdd->query($query);
						while ($row = $req->fetch()) {
							?>
							<tbody>
								<tr>
									<td><?php echo $row['Nom_Equipes']; ?></td>
									<td><?php echo $row['Championnat']; ?></td>
								</tr>
							</tbody>
						<?php
					}
					$req->closeCursor();
					?>
					</table>
					</thead>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
include_once('end_page.php');
?>