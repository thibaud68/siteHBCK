<?php
    //connexion Ã  la base de donnees OVH
    //new PDO("mysql:host=$serveur;dbname=$nom_bd;charset=utf8", $login, $mot_de_passe);
$login = 'legenieomw68100';
$pass = 'Hbck68100';


// Connexion à la base de données ovh

$bdd = new PDO("mysql:host=legenieomw68100.mysql.db;dbname=legenieomw68100;charset=utf8", $login, $pass);

?>


<?php 
// Connexion à la base de données o2switch
//$user = 'azepol_admin';
//$pass = 'admin0147';

//$bdd = new PDO('mysql:host=localhost;dbname=azepol_fonctasso', $user, $pass);
//var_dump($dbb);
?>
