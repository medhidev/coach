<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seances</title>
</head>
<style>
	table, td{
		border: 1px solid black;
		border-collapse

	}
</style>
<body>
	<?php include 'nav.php'; ?>

	<h2>Seances de Sport</h2>
	<form action="../script/filter.php" method="POST">
		<select name="liste_filter">
			<optgroup label="Filtre"></optgroup>
			<option value="NomSport">Cour</option>
			<option value="NomSeance">Exercice</option>
			<option value="Difficulte">Difficulté</option>
			<option value="Jour">Jour</option>
			<option value="heure">Horraire</option>
			<option value="Nuù">Salle</option>
			<option value="lieu">Lieu</option>
		</select>

		<input type="text" name="field_filter" placeholder="valeur de Filtre">

		<input type="submit" value="rechercher">
	</form><br>
	
	<table>
		<thead>
			<th colspan="7">Liste des Seances</th>
		</thead>
		<tbody>
			<tr>
				<td>
					Cour
				</td>
				<td>
					Exercice
				</td>
				<td>
					Difficulté
				</td>
				<td>
					Jour
				</td>
				<td>
					Horraire
				</td>
				<td>
					Salle
				</td>
				<td>
					Lieu
				</td>
			</tr>
			<?php include '../script/liste_seance.php'; ?>
		</tbody>
	</table>
</body>
</html>