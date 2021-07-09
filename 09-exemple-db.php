<?php
<<<<<<< HEAD
var_dump ($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or sur une page</title>
</head>
<body>
    <h1>Livre d'or sur une page</h1>
    <form name="goldenbook" method="POST" action="">
        <input type="text" name="thename" placeholder="Votre nom" require /><br>
        <textarea name="thetext" placeholder="Votre texte" require></textarea><br>
        <input type="submit" value="Envoyer" /><br>
    </form>
</body>
</html>
=======
// $_POST existe par défaut en tant que tableau, lorsqu'on récupère un formulaire, il devient un tableau associatif contenant les valeurs
// var_dump($_POST);

// connexion à la DB
$connexionDB = mysqli_connect("localhost", "root", "", "exe9", 3307);

// récupération des commentaires de la table goldenbook
$recupComments = mysqli_query($connexionDB, "SELECT * FROM goldenbook ORDER BY thedate DESC;");

// on va compter le nombre de commentaires récupérés
$nbComment = mysqli_num_rows($recupComments);

// transformation des données
?>
<html>
    <head>
        <title>Livre d'or sur une page</title>
    </head>
    <body>
        <h1>Livre d'or sur une page</h1>
        <form name="goldenbook" method="post" action="">
            <input type="text" name="thename" placeholder="Votre nom" required /><br> 
            <textarea name="thetext" placeholder="Votre texte" required></textarea><br> 
            <input type='submit' value='Envoyer'/><br>
        </form>
        <h3>Nous avons <?=$nbComment?> commentaires</h3>
        <h4>Le nom</h4>
        <p>écrit</p>
        <p>Le ...date</p><hr>
    </body>
</html>

>>>>>>> f6f3321dde5c739b93c81d40d137d92bac91d986
