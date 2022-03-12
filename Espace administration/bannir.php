<?php
session_start();
$bdd = new PDO('mysql: host=localhost;dbname=espace_admin;', 'root',''); 
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('select * from membres where id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount()>0){
        $bannirUser = $bdd->prepare('delete from membres where id = ?');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');
    }else{
        echo 'Aucun membre n\'a été trouver';
    }
}else{
    echo "L'identifiant n'a pas été récupéré";
}
?>
