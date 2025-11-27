<?php
/* Récupère les données du formulaire */
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$sexe = isset($_POST['sexe']) ? $_POST['sexe'] : '';
$motDePasse = isset($_POST['motDePasse']) ? $_POST['motDePasse'] : '';

/*Envoie au navigateur le code HTML du résultat après traitement. Dans ce code HTML, le prenom, le sexe et 
la longueur du mot de passe seront remplacés dynamiquement par les valeurs saisies par l'utilisateur */
echo('
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Traitement</title>
    </head>
<body>
    <h1>Données du formulaire</h1>
    <h3>Votre prénom est : '.$prenom.' </h3>
    <h3>Vous êtes de sexe : '.$sexe.' </h3>
    <h3>Votre mot de passe comporte : '. strlen($motDePasse) .' caractères </h3>
</body>
</html>');
?>

