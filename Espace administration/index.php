<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <a href="membres.php">Afficher tous les membres</a> 



    </body>

    </html>