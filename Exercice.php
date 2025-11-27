<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>formulaire</title>
    </head>
<body>
 <form action="traitement_exercice.php" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="sexe">Genre :</label>
        <input type="text" id="sexe" name="sexe" required>
        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <input type="submit" value="Envoyer">
  </form>        
</body>
</html>
