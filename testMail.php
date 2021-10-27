<?php
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $email=$_POST['email'];
 $Texte_message=$_POST['Texte_message'];


    ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "kamel.lekcir@uha.fr";
 
    $to = $email;
 
    $subject = "Vérification PHP mail";
 
    $message = "PHP mail marche";
 
    $headers = "From:" . $from;
 
    mail($to,$subject,$message, $headers);
 

?>
<html>
<script>alert('L\'email a été envoyé.')</script>
</html>
<?php
header("refresh:1; url=index.php");
?>

      