<?php

include '../request/connexion.php';
include '../request/req_filter.php';

$selected_filter = $_POST['liste_filter'];
$input_filter = $_POST['field_filter'];

echo 'Filtre: '.$selected_filter.'<br>';
echo 'Rechercher: '.strtolower($input_filter);
?>