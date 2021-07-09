<?php
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
