<?php
include 'connectbdd.php';
 if 
       (isset($_POST['Photo_Media']) /*&& !empty($_POST['Photo_Media']))*/&&
        isset($_POST['Video_Media']) /*&& !empty($_POST['Video_Media']))*/&&
        isset($_POST['Articles_Presse_Media'])/* && !empty($_POST['Articles_Presse_Media']))*/){
       $bdd->exec("UPDATE Mediatheque  SET Photo_Media='".$_POST['Photo_Media']."', Video_Media='".$_POST['Video_Media']."', Articles_Presse_Media='".$_POST['Articles_Presse_Media']."' WHERE  Id_Media=".$_POST['Id_Media']."");       
          header('Location:comptReda.php');
      }
 if (isset($_POST['Date_Match']) /*&& !empty($_POST['Date_Match'])*/&&
      isset($_POST['Nom_Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
       isset($_POST['Score_HBCK']) /*&& !empty($_POST['Score_HBCK'])*/&&
       isset($_POST['Equipes_Adverses']) /*&& !empty($_POST['Equipes_Adverses'])*/&&
       isset($_POST['Score_Visiteurs']) /*&& !empty($_POST['Score_visiteurs'])*/){    
      $bdd->exec("UPDATE NEWS  SET Date_Match='".$_POST['Date_Match']."', Id_Equipes=".$_POST['Nom_Equipes'].", Score_HBCK=".$_POST['Score_HBCK'].", Equipes_Adverses='".$_POST['Equipes_Adverses']."', Score_Visiteurs=".$_POST['Score_Visiteurs']." WHERE  Id_News=".$_POST['Id_News']."");
        //echo "UPDATE NEWS  SET Date_Match=".$_POST['Date_Match'].", Equipes=".$_POST['Equipes'].", Score_HBCK=".$_POST['Score_HBCK'].", Equipes_Adverses=".$_POST['Equipes_Adverses'].", Score_Visiteurs=".$_POST['Score_Visiteurs']." WHERE  Id_News=".$_POST['Id_News']."";
          header('Location:comptReda.php');
      }
       if (isset($_POST['Date_Rencontre']) /*&& !empty($_POST['Date_Match'])*/&&
      isset($_POST['Nom_Equipes']) /*&& !empty($_POST['NomEquipes'])*/&&
       isset($_POST['Equipe_Adverse']) /*&& !empty($_POST['Equipe_Adverse'])*/&&
       isset($_POST['Horaire']) /*&& !empty($_POST['Horaire'])*/
     ){    
      $bdd->exec("UPDATE CALENDRIER  SET Date_Rencontre='".$_POST['Date_Rencontre']."', Id_Equipes=".$_POST['Nom_Equipes'].", Equipe_Adverse='".$_POST['Equipe_Adverse']."', Horaire='".$_POST['Horaire']."' WHERE  Id_Rencontres=".$_POST['Id_Rencontres']."");
        //echo "UPDATE CALENDRIER  SET Date_Rencontre='".$_POST['Date_Rencontre']."', Id_Equipes=".$_POST['Nom_Equipes'].", Equipe_Adverse='".$_POST['Equipe_Adverse']."', Horaire='".$_POST['Horaire']."' WHERE  Id_Rencontres=".$_POST['Id_Rencontres']."";
          header('Location:comptReda.php');
      }
?>