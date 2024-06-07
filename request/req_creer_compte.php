<?php

$request_add_user = 'INSERT INTO utilisateur
VALUES ("'.$_POST["pseudo"].'", "'.$_POST["nom"].'", "'.$_POST["prenom"].'", "'.$_POST["email"].'", 
	"'.hash('sha256', $_POST["password"]).'");';

?>