<nav>
	<ul>
		<li>
			<a href="index.php">Accueil</a>
		</li>
		<?php
		session_start();

		if (isset($_SESSION['username'])){
			echo '<li><a href="../script/logout.php">Deconnexion</a></li>';
		}

		else{
			echo '<li><a href="login.php">Connexion</a></li>';
		}

		?>
		<li>
			<a href="seances.php">Seances</a>
		</li>
		<li>
			<?php
			if (isset($_SESSION['username'])){
				echo '🟢 '.$_SESSION['username'];
			}
			else{
				echo '🔴 '.'non-connecté';
			}
			?>
		</li>
	</ul>
</nav>