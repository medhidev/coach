<?php

$user = 'root';
$password = '';
$bdd = 'mycoach';
$host = 'localhost';

try {
	$connect = new mysqli($host, $user, $password, $bdd);
}
catch(Exception $e){
    die ("Connection Impossible avec '$host'".$e->getMessage());
}

?>