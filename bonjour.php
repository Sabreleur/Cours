<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bonjour PHP</title>
</head>

<body>

<h1>Bonjour en PHP</h1>
<!--Code lié au fichier CoursPHP.php-->
<?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?>

<?php
if(isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))
{
	$_GET['repeter'] = (int) $_GET['repeter'];

	if($_GET['repeter'] >=1 AND $_GET['repeter'] <=100)
	{
		for($i=0; $i < $_GET['repeter']; $i++)
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . '</br>';
		}
	}
}

else
{
	echo 'Il faut renseigner un nom et un prenom';
}
?>

<!---Champ de renseignement du pseudo---->
<form action="affichage.php" method="post">
	<p>Veuillez renseigner votre pseudo</p>
		<input type="text" name="pseudo"/>

		<!--Création d'une zone de texte---->
		<p>Poste un petit message aussi</p>
    	<textarea name="message" rows="8" cols="45"></textarea>


		<!--Liste déroulante-->
		<p>Dans quel pays habitez-vous?</p>
        <select name="pays">
            <option value="France">France</option>
            <option value="Italie">Italie</option>
            <option value="Espagne">Espagne</option>
        </select>

		<!--Création de la checkbox-->
		<p>Selectionnez une ou plusieurs cases en rapport avec ce que vous aimez</p>
		<input type="checkbox" name="frites" id="cases">
    	<label for="case"> Frites </label>
        <br>
        <input type="checkbox" name="poisson" id="cases">
        <label for="case"> Poisson </label>
        <br>
        <input type="checkbox" name="légumes" id="cases">
        <label for="case"> Légumes </label>
        <br>
        <input type="checkbox" name="boeufs" id="cases">
        <label for="case"> Boeufs </label>
        <br>

				<!--Création du pseudo caché-->
				<p>Tapez votre deuxième pseudo (il sera caché)</p>
				<input type="hiden" name="pseudoc" />

				<!---Bouton de validation---->
        <input type="submit" value="valider"/>


</form>

<form action="recu.php" method="post" enctype="multipart/form-data">
	<!--Envoie de fichier, de types images-->
	<p>Fomulaire d'envoie de fichier<br>
		<input type="file" name="fichier"/>
		<input type="submit" value="envoyer mon fichier"/>
	</p>
</form>

</body>
</html>
