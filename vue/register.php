<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>
	<?php include 'nav.php'; ?>

	<h2>Formulaire d'inscription</h2>
	<form action="../script/creer_compte.php" method="POST">
		<input type="text" name="pseudo" placeholder="pseudo" required><br>
		<input type="text" name="prenom" placeholder="prénom" required><br>
		<input type="text" name="nom" placeholder="nom" required><br>
		<input type="email" name="email" placeholder="adresse email" required><br>
		<input type="password" name="password" placeholder="mot de passe" required><br><br>

		<input type="submit" name="send" value="Créer">
		<input type="reset" name="reset" value="Effacer">

	</form>
</body>
</html>