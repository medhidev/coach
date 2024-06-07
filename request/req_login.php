<?php

$request_user = "SELECT *
FROM utilisateur
WHERE email = '".$_POST['login']."' AND mot_de_passe = '".hash('sha256', $_POST['mdp'])."';";

?>