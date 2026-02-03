<?php
$nom = $_POST["nom_user"];
$prenom = $_POST["prenom_user"];
$message = $_POST["message_user"];
echo "Voici le message que vous avez écrit : <br>";
echo $message, "<br>";
echo "Confirmez vous l'envoi de ce message ?";
?>