<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Cours OpenClassrooms PHP</title>
</head>

<body>
<h1>Ici auront lieu des test en PHP lié à OpenClassrooms</h1>

<!---Création et utilisation d'une fonction pour dire bonjour en php------->
<?php
function DireBonjour($nom)
{
	echo 'Bonjour ' . $nom . ' Bienvenue <br>' ;
}

DireBonjour('Marie');
DireBonjour('Paul');
?>

<a href="bonjour.php?nom=Dupond&amp;prenom=Jean&amp;repeter=8">Dis moi bonjour</a>

</body>
</html>
