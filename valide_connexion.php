<?php
include 'connectbdd.php';


if ((isset($_POST['Email']) && !empty($_POST['Email'])) && (isset($_POST['Mot_De_Passe']) && !empty($_POST['Mot_De_Passe']))) {

    $Email = $_POST['Email'];
    $Mot_De_Passe = $_POST['Mot_De_Passe'];
    //echo "SELECT count(*) FROM utilisateurs WHERE Email = '".$Email."' AND Mot_De_Passe ='".$Mot_De_Passe."'";
    $req = $bdd->query("SELECT count(*) FROM utilisateurs WHERE Email = '" . $Email . "' AND Mot_De_Passe ='" . $Mot_De_Passe . "'");
    $data = $req->fetch();
    if ($data[0] == 1) {
        session_start();
        $req = $bdd->query("SELECT * FROM utilisateurs WHERE Email = '" . $Email . "' AND Mot_De_Passe ='" . $Mot_De_Passe . "'");
        $info = $req->fetch();
        $_SESSION['Email'] = $info['Email'];
        $_SESSION['Id_Utilisateurs'] = $info['Id_Utilisateurs'];
        $_SESSION['Administrateur'] = $info['Administrateur'];
        $_SESSION['Webmaster'] = $info['Webmaster'];
        $_SESSION['Redacteur'] = $info['Redacteur'];
        $_SESSION['connect'] = "on";
        header('refresh: 0; URL=compte.php');
    } elseif ($data[0] == 0) {
        echo  "Compte non reconnu.";
        header('refresh: 1; URL=connexion.php');
    } else {
        echo "Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.";
        header('refresh: 1; URL=connexion.php');
    }
} else {
    echo "Au moins un des champs est vide.";
    header('refresh: 1; URL=connexion.php');
}
