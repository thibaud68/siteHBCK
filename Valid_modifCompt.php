<?php
include 'connectbdd.php';

     if (isset($_POST['Nom']) && !empty($_POST['Nom']) &&
       isset($_POST['Prenom']) && !empty($_POST['Prenom'])&&
       isset($_POST['Email']) && !empty($_POST['Email'])&&
       isset($_POST['Mot_De_Passe']) && !empty($_POST['Mot_De_Passe'])&&
       isset($_POST['Administrateur']) && $_POST['Administrateur'] != "" &&
       isset($_POST['Webmaster']) && $_POST['Webmaster'] != "" &&
       isset($_POST['Redacteur']) && $_POST['Redacteur'] != ""){
        $bdd->exec("UPDATE Utilisateurs  SET Nom='".$_POST['Nom']."', Prenom ='".$_POST['Prenom']."', Email ='".$_POST['Email']."', Mot_De_Passe ='".$_POST['Mot_De_Passe']."', Administrateur =".$_POST['Administrateur'].", Webmaster = ".$_POST['Webmaster'].", Redacteur = ".$_POST['Redacteur']." WHERE  Id_Utilisateurs=".$_POST['Id_Utilisateurs']."");
        
          header('Location:comptAdmin.php');
      }
 if (isset($_POST['Nom_Partenaires']) /*&& !empty($_POST['Nom_Partenaires'])*/ &&
       isset($_POST['Adresse_Partenaires']) /*&& !empty($_POST['Adresse_Partenaires'])*/&&
       isset($_POST['Numero_Partenaires']) /*&& !empty($_POST['Numero_Partenaires'])*/&&
       isset($_POST['Logos_Partenaires']) /*&& !empty($_POST['Logos_Partenaires'])*/){
        $bdd->exec("UPDATE Partenaires  SET Nom_Partenaires='".$_POST['Nom_Partenaires']."', Adresse_Partenaires ='".$_POST['Adresse_Partenaires']."', Numero_Partenaires ='".$_POST['Numero_Partenaires']."', Logos_Partenaires ='".$_POST['Logos_Partenaires']."' WHERE  Id_Partenaires=".$_POST['Id_Partenaires']."");      
          header('Location:comptAdmin.php');
      }
 if 
       (isset($_POST['Photo_Media']) /*&& !empty($_POST['Photo_Media']))*/&&
        isset($_POST['Video_Media']) /*&& !empty($_POST['Video_Media']))*/&&
        isset($_POST['Articles_Presse_Media'])/* && !empty($_POST['Articles_Presse_Media']))*/){
       $bdd->exec("UPDATE Mediatheque  SET Photo_Media='".$_POST['Photo_Media']."', Video_Media='".$_POST['Video_Media']."', Articles_Presse_Media='".$_POST['Articles_Presse_Media']."' WHERE  Id_Media=".$_POST['Id_Media']."");      
          header('Location:comptAdmin.php');
      }
 if (isset($_POST['Date_Match']) /*&& !empty($_POST['Date_Match'])*/&&
      isset($_POST['Nom_Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
       isset($_POST['Score_HBCK']) /*&& !empty($_POST['Score_HBCK'])*/&&
       isset($_POST['Equipes_Adverses']) /*&& !empty($_POST['Equipes_Adverses'])*/&&
       isset($_POST['Score_Visiteurs']) /*&& !empty($_POST['Score_visiteurs'])*/){    
      $bdd->exec("UPDATE NEWS  SET Date_Match='".$_POST['Date_Match']."', Id_Equipes=".$_POST['Nom_Equipes'].", Score_HBCK=".$_POST['Score_HBCK'].", Equipes_Adverses='".$_POST['Equipes_Adverses']."', Score_Visiteurs=".$_POST['Score_Visiteurs']." WHERE  Id_News=".$_POST['Id_News']."");
        //echo "UPDATE NEWS  SET Date_Match=".$_POST['Date_Match'].", Equipes=".$_POST['Equipes'].", Score_HBCK=".$_POST['Score_HBCK'].", Equipes_Adverses=".$_POST['Equipes_Adverses'].", Score_Visiteurs=".$_POST['Score_Visiteurs']." WHERE  Id_News=".$_POST['Id_News']."";
          header('Location:comptAdmin.php');
      }
 if (isset($_POST['Horaires_Entrainement']) /*&& !empty($_POST['Horaires_Entrainement'])*/&&
        isset($_POST['Designation']) /*&& !empty($_POST['designation'])*/&&
          isset($_POST['Nom_Equipes'])/* && !empty($_POST['Nom_Equipes'])*/){
          
     $bdd->exec("UPDATE Club  SET Horaires_Entrainement='".$_POST['Horaires_Entrainement']."', Designation='".$_POST['Designation']."', Id_Equipes=".$_POST['Nom_Equipes']." WHERE  Id_Club=".$_POST['Id_Club']."");       
          header('Location:comptAdmin.php');
      }
  if (isset($_POST['Nom_Equipes'])/* && !empty($_POST['Nom_Equipes']) */&&
       isset($_POST['Championnat'])/* && !empty($_POST['Championnat'])*/){
     $bdd->exec("UPDATE Equipes  SET Nom_Equipes='".$_POST['Nom_Equipes']."', Championnat='".$_POST['Championnat']."' WHERE  Id_Equipes=".$_POST['Id_Equipes']."");       
          header('Location:comptAdmin.php');
      }
      ?>       
    
    

 



