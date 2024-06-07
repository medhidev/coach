<?php

include '../request/connexion.php';
include '../request/req_login.php';
session_start();
$_SESSION['username'] = null;

// execution requête (mysqli)
$exec_req_user = $connect->query($request_user);
$row_user = $exec_req_user->fetch_row();

if ($row_user){
	$_SESSION['username'] = $row_user[0];
	header('Location: ../pages/seances.php');
}
else{
	// $_SESSION['error'] = 'Champ Incorrecte !';
	header('Location: ../pages/login.php');
}
?>