<?php

include '../request/connexion.php';
include '../request/req_seance.php';

// execution requête pour executer une première fois la requête
$exec_req_seance = $connect->query($request_seance);
$row_seance = $exec_req_seance->fetch_row();

// AFFICHAGE DE LA LISTE DES SEANCES
while ($row_seance){

	// (Convertion) Permet d'enlever les secondes
	$dateTimeD = DateTime::createFromFormat('H:i:s', $row_seance[3]);
	$dateTimeF = DateTime::createFromFormat('H:i:s', $row_seance[4]);
	echo '<tr>
				<td id="field">
					'.$row_seance[9].'
				</td>
				<td id="field">
					'.$row_seance[0].'
				</td>
				<td>
					'.$row_seance[1].'
				</td id="field">
				<td>
					'.$row_seance[2].'
				</td id="field">
				<td>
					'.$dateTimeD->format("H:i").' - '.$dateTimeF->format("H:i").'
				</td id="field">
				<td id="field">
					'.$row_seance[5].'
				</td>
				<td id="field">
					'.$row_seance[6].' '.$row_seance[7].' '.$row_seance[8].'
				</td>
			</tr>';

	$row_seance = $exec_req_seance->fetch_row();
}

?>