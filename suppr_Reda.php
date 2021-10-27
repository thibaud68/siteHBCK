<?php
include 'connectbdd.php';

if (isset($_GET['Id_Media'])) {
$Id_Media = $_GET['Id_Media'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM Mediatheque WHERE Id_Media = '".$Id_Media."'");
     header('refresh: 0; URL=comptReda.php');
     
}
if (isset($_GET['Id_News'])) {	
$Id_News = $_GET['Id_News'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM NEWS WHERE Id_News = '".$Id_News."'");
     header('refresh: 0; URL=comptReda.php');
}
if (isset($_GET['Id_Rencontres'])) {	
$Id_Rencontres = $_GET['Id_Rencontres'];
//notre variable q qui et envoyer
$bdd->exec("DELETE FROM CALENDRIER WHERE Id_Rencontres = '".$Id_Rencontres."'");
     header('refresh: 0; URL=comptReda.php');
}
?>