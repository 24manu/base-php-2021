<?php
// $_POST existe par défaut en tant que tableau, lorsqu'on récupère un formulaire, il devient un tableau associatif contenant les valeurs
// var_dump($_POST);
$connexionDB = mysqli_connect("localhost" "root", "", "exe9", 3307);
$recupComments = mysqli_query($connexionDB, "SELECT * FROM goldenbook ORDER BY thedate DESC;");
$nbComment = mysqli_num_rows($recupComments);
$datasComment = mysqli_fetch_assoc()
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
        <h3>Nous avons x commentaires</h3>
        <h4>Le nom</h4>
        <p>écrit</p>
        <p>Le...date</p><hr>
    </body>

</html>

