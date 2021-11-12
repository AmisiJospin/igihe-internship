<!DOCTYPE html>
<html>
	<head>
		<title>formulaire de contact</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<header>Formulaire De Contact</header>
		<div class="corps">
		<?php
			require('connexion.php');
			$requete = $bdd -> prepare('SELECT * FROM formulaire');
			$requete -> execute() or die(print_r($bdd->errorInfo()));
		
			while($data=$requete->fetch())
				{
					echo 'Nom:'. $data['nom'].'<br/>';
				
				}
		?>
		</div>
		
		
	</body>
</html>