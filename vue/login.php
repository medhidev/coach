<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connexion</title>
</head>
<body>
	<?php include 'nav.php'; ?>

	<form action="../script/verif_user.php" method="POST" name="form_connect">
		<h3>Formulaire de connexion</h3>

		<input type="text" name="login" placeholder="adresse email" required><br>
		<input type="password" name="mdp" placeholder="mot de passe" required><br>
		<!-- <input type="checkbox" name="authorize_track" required> promotion par email<br> -->
		<a href="register.php">créer un compte</a><br><br>

		<input type="submit" name="send" value="Connecter">

		<?php
		if (!empty($_SESSION['error'])){
			// à résoudre
			// echo '<script>alert("'.$_SESSION['error'].'")</script>';
		}
		?>
	</form>
</body>
</html>