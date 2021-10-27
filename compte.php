<?php
include 'connectbdd.php';
session_start();

  if($_SESSION['Administrateur'] == 1){
    include'comptAdmin.php'; 

  }else if($_SESSION['Webmaster'] == 1){
    include'comptWeb.php';
   
  }else if($_SESSION['Redacteur'] == 1){
    include'comptReda.php';
   
  }else{
  	
    header('refresh: 0; URL=connexion.php');
  }
?>