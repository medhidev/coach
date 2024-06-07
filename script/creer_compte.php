<?php

include '../request/connexion.php';
include '../request/req_creer_compte.php';

echo $request_add_user;

$connect->query($request_add_user);
header('Location: ../pages/login.php');
echo '<script>alert("compte créer avec succès")<script>';

?>