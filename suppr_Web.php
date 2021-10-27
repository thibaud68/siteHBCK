<?php
include 'connectbdd.php';


if (isset($_GET['Id_Partenaires'])) {
$Id_Partenaires = $_GET['Id_Partenaires'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM Partenaires WHERE Id_Partenaires = '".$Id_Partenaires."'");
     header('refresh: 0; URL=comptWeb.php');
}
if (isset($_GET['Id_Media'])) {
	
$Id_Media = $_GET['Id_Media'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM Mediatheque WHERE Id_Media = '".$Id_Media."'");
     header('refresh: 0; URL=comptWeb.php');
}
if (isset($_GET['Id_News'])) {	
$Id_News = $_GET['Id_News'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM NEWS WHERE Id_News = '".$Id_News."'");
     header('refresh: 0; URL=comptWeb.php');
}
if (isset($_GET['Id_Club'])) {
	
$Id_Club = $_GET['Id_Club'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM Club WHERE Id_Club = '".$Id_Club."'");
     header('refresh: 0; URL=comptWeb.php');
}
if (isset($_GET['Id_Equipes'])) {
	
$Id_Equipes = $_GET['Id_Equipes'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM Equipes WHERE Id_Equipes = '".$Id_Equipes."'");

     header('refresh: 0; URL=comptWeb.php');
}



?>