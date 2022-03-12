<?php
//systeme de deconnection

session_start();//on commence par declarer toutes les sessions
$_SESSION = array();//les stocker dans un array
session_destroy();//detruire toutes ces sessions
header('Location: connexion.php');//enfin, rediriger vers la page de connexion
?>