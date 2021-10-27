<?php
    //connexion Ã  la base de donnees OVH
    //connexion Ã  la base de donnees Xamp
$user = 'root';
$pass = '';
$bdd = new PDO('mysql:host=localhost;dbname=bdd_hbck',$user,$pass);
$bdd->exec("SET NAMES 'UTF8'");
?>