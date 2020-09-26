<?php
	if(isset($_GET['info']) && !empty($_GET['info'])){

		$info = $_GET['info'];
	}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<title>Anniversaire : je m'inscris</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/formulaire.css">
</head>

<body>
	<main>
		<section>
			<!------------### lien du traitement ###------------->
			<form action="../traitements/formulaire.php" method="post">
				<h1> FOMULAIRE D'INSCRIPTION</h1>
				<!------------### formulaire - fieldset ###------------->
				<fieldset>
					<!------------### Nom et prénom ###------------->
					<label for="name">Nom</label>
					<input type="text" id="name" name="nom" autofocus placeholder="Entrez votre nom" required>
					<label for="prenom">Prénom</label>
					<input type="prenom" id="prenom" name="prenom" autofocus placeholder="Entrez votre prénom" required>
					<!------------### le sexe ###------------->
					<label for="sexe"> Quel est votre sexe ?</label>
					<input type="radio" id="homme" value="homme" name="sexe" required>
					<label for="sexe" class="light">Homme</label><br>
					<input type="radio" id="femme" value="femme" name="sexe" required>
					<label for="sexe" class="light">Femme</label><br><br>
					<!------------### Numéro de téléphone ###------------->
					<label for="phone">Entrez votre numéro de téléphone :</label>
					<input type="text" id="numeroTel" name="numeroTel" placeholder="Ex. 065010101" required><br>
					<!------------### Indiquez le nombre de personne : choix multiple ###------------->
					<label>Je suis</label>
					<input type="radio" id="un" value="un" name="choix" required>
					<label for="un" class="light">Seule</label><br>
					<input type="radio" id="deux" value="deux" name="choix" required>
					<label for="un" class="light">À deux</label><br>
					<input type="radio" id="trois" value="trois" name="choix" required>
					<label for="un" class="light">À trois</label><br>
				</fieldset>
				<!------------### Envoyez ###------------->
				<button type="submit">Envoyez</button>
				<!------------### Réponse d'erreur lors de la saisie des champs ###------------->
				
				<?= !empty($info)?'<div class="reponse">Veuillez renseigner votre numéro au format précisé svp !</div>':'';
				?>
			</form>
		</section>
	</main>
</body>

</html>