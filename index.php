<!DOCTYPE html>
<html>
	<head>
		<title>formulaire de contact</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<header>Formulaire De Contact</header>
		<div class="corps">
			<p>
			   <a href="index.php" title="Ma page d'accueil" >Accueil |</a>
			  <a href="page1.php" title="Ma deuxieme page" >page 1 |</a>
			  <a href="page2.php" title="Ma troisieme page"> Page 2 |</a>
			</p>
			<form method="POST" action="formulaire.php">
			<table>
				<tr><td>Nom:</td> <td><input type="text" class="form" name="nom" <?php if(isset($_POST['nom'])){echo 'value="'.$_POST['nom'] .'"';}?> ></td></tr>
				<tr><td>Prénom:</td> <td><input type="text" class="form" name="pnom" <?php if(isset($_POST['pnom'])) {echo 'value="'.$_POST['pnom'] .'"';}?> ></td></tr>
				<tr><td>Tel:</td><td> <input type="text" class="form" name="tel" <?php if(isset($_POST['tel'])) {echo 'value="'.$_POST['tel'] .'"';} ?> ></td></tr>
				<tr><td>Sexe: M</td><td><input type="radio" name="sexe" value="M"/> F <input type="radio" name="sexe" value="F" /></td></tr>
				<tr><td>Université:</td>
					<td>
						<select name="univ" class="form" />
							<option value="uea">Université Espoir d'Afrique</option>
							<option value="ulbu">Université Lumière de Bujumbura</option>
							<option value="ult">Université Du Lac Tanganyika</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">Laissez un message<br/>
					<textarea name="msg" class="champ_msg"/><?php if(isset($_POST['msg'])) {echo $_POST['msg'];} ?></textarea>
					</td>
				</tr>
					<tr><td><input type="submit" name="submit" class="bouton_envoyer" value="Envoyer" /></td></tr>
			</table>
			</form>
		</div>
	</body>
</html>