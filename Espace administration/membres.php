<?php
//on va afficher tout les membres, on se connecte dabord a la bdd
$bdd = new PDO('mysql: host=localhost;dbname=espace_admin;', 'root',''); 

session_start();
if (!$_SESSION['mdp']) {
    header('Location: connexion.php');
}

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Afficher les membres</title>
    </head>

    <body>
        <!--afficher tout les membres-->
        <?php 
        $recupUsers = $bdd->query('select * from membres');
        while($user = $recupUsers->fetch()){
            ?>
            <!--on recupere l'id de chaque user et en fonction de ça on peut le supprimer de la bd-->
            <p><?= $user['pseudo']; ?><a href="bannir.php?id=<?= $user['id']; ?>">Bannir le membre</a></p>
            <?php 
        }
        ?>

        <!--fin afficher tout les membres-->

    </body>

    </html>