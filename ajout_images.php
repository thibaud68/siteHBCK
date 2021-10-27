<?php 
include 'connectbdd.php';

$nom=$_FILES["urlimage"]["name"]; // on recupere le nom de l'image avec son extension
 
    list($name, $ext) = explode(".", $nom);   // on separe le nom de l'image de son extension    
 
  $ext=".".$ext; // on rajoute un . devant l'extention
 

 
$bdd->exec("INSERT INTO carousel(urlimage)  VALUES('$nom');"); // et on termine en envoyant les données dans la base 


header('refresh: 1; URL=compte.php');

?>
 

 