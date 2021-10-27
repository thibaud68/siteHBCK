<?php


include('accueil.php');

if($_GET){
    if($_GET['page']=="accueil"){
        include('accueil.php');
    }
        if($_GET['page']=="news"){
            include('news.php');
        }
    

            if($_GET['page']=="club"){
                include('club.php');     
            }

            if($_GET['page']=="calendrier"){
                include('calendrier.php');     
            }

            if($_GET['page']=="partenaires"){
                include('sponsorts.php');     
            }
            // menu et sous menu
            if($_GET['page']=="equipes"){
                include('equipes.php');     
            }

            if($_GET['page']=="cote_hand"){
                include('cote_hands.php');     
            }
            //

            if($_GET['page']=="mediatheque"){
                include('media.php');     
            }
             //

             if($_GET['page']=="contact"){
                include('contact.php');     
            }

            if($_GET['page']=="access_privee"){
                include('membre.php');     
            }

        }
          
?>
