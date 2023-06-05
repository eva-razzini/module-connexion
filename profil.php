<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
    header("Location: connexion.php");
    exit();
}

// Code pour mettre à jour les informations du profil dans la base de données
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link id="style" rel="stylesheet" type="text/css" href="style3.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap');
  </style>
</head>
<body class="bodyprof" >
    <form method="POST" action="profil.php">
        <h1>Profil</h1>
        <label style="font-size: 0.5em" for="login">Login :</label>
        <input type="text" id="login" name="login" value="<?php echo $_SESSION["login"]; ?>" required><br>

        <label style="font-size: 0.5em" for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION["prenom"]; ?>" required><br>

        <label style="font-size: 0.5em" for="nom">Nom  :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $_SESSION["nom"]; ?>" required><br>

        <label style="font-size: 0.5em" for="password">Mot de passe :</label>
        <input type="text" id="password" name="password" value="<?php echo $_SESSION["password"]; ?>" required><br>

        <input type="submit" value="Enregistrer" >
    </form>
</body>
</html>
