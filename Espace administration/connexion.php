<?php 
session_start();
if(isset($_POST['valider'])){//si le user clique sur le bouton on va utiliser notre code
  if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
        //pseudo par defaut 
        $pseudo_par_defaut="admin";
        $mdp_par_defaut="admin1234";

        //stockage des variables saisies
        $pseudo_saisi=htmlspecialchars($_POST['pseudo']);
        $mdp_saisi=htmlspecialchars($_POST['mdp']);

        //verifie que le pseudo et le mdp entrer par l'utilisateur sont exacts
         if($pseudo_saisi == $pseudo_par_defaut and $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp']=$mdp_saisi;
            header('Location: index.php');
         }else{
             echo "Votre mot de passe ou pseudo est incorrecte";
         }
  }else{
      echo "Veuillez compléter tous les champs";  
  }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf_8">
        <title>Mon premier projet</title>
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="pseudo">
            <br><br>
            <input type="password" name="mdp">
            <br><br><br>
            <input type="submit" name="valider">
        </form>

    </body>
</html>