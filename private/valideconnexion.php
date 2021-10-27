<?php
// je fait appel a la connexion de la base de donnée.
include 'connectbdd.php';
// on verifie si le champ est vide ou pas.
if(isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Mot_De_Passe']) && !empty($_POST['Mot_De_Passe']))
{
	$Email = $_POST['Email'];
	$Mot_De_Passe = $_POST['Mot_De_Passe'];
	// requete SQL pour verifier que les données correspondent.
	$req = $bdd->query("SELECT * FROM utilisateurs WHERE Email = '".$Email."' AND Mot_De_Passe = '".$Mot_De_Passe."'");
	$data = $req->fetch();
	
		if ($data['Email'] == $Email && $data['Mot_De_Passe'] == $Mot_De_Passe)
		{
			// on ecrit un message de connexion et on rafraichit la page toutes les deux secondes
			echo "connexion en cours";
			session_start();

			$_SESSION['Email'] = $data['Email'];
			

			header('Refresh: 2; URL=index.php');

		}else{ 
			echo "Pas trouvé";
			header('Refresh: 2; URL=connexion.php');		
			// on ecrit un message si les données ne sont pas trouvable et on rafraichit la page toutes les deux secondes
		}
}else{
	echo "les champs sont vides";
	header('Refresh: 2; URL=connexion.html');
}
?>